<?php

namespace App\Http\Controllers\Admin\Panel\Traits;

use Prologue\Alerts\Facades\Alert;

trait BulkActions
{
	private $allowedActions = ['deletion', 'activation', 'deactivation', 'approval', 'disapproval'];
	
	/**
	 * Bulk Actions
	 *
	 * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
	 */
	public function bulkActions()
	{
		$action = request()->input('action');
		
		if (!in_array($action, $this->allowedActions)) {
			return $this->notAllowedAction();
		}
		
		switch ($action) {
			case 'deletion':
				return $this->bulkDeletion();
				break;
			
			case 'activation':
				return $this->bulkActivation();
				break;
			
			case 'deactivation':
				return $this->bulkDeactivation();
				break;
			
			case 'approval':
				return $this->bulkApproval();
				break;
			
			case 'disapproval':
				return $this->bulkDisapproval();
				break;
			default:
				return $this->notAllowedAction();
		}
	}
	
	/**
	 * Bulk Deletion
	 *
	 * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
	 */
	private function bulkDeletion()
	{
		$this->xPanel->hasAccessOrFail('delete');
		
		return $this->_bulkActions('deletion', null, null);
	}
	
	/**
	 * Bulk Activation
	 *
	 * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
	 */
	private function bulkActivation()
	{
		$this->xPanel->hasAccessOrFail('update');
		
		return $this->_bulkActions('activation', 'active', 1);
	}
	
	/**
	 * Bulk Deactivation
	 *
	 * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
	 */
	private function bulkDeactivation()
	{
		$this->xPanel->hasAccessOrFail('update');
		
		return $this->_bulkActions('deactivation', 'active', 0);
	}
	
	/**
	 * Bulk Approval (Reviewed)
	 *
	 * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
	 */
	private function bulkApproval()
	{
		if (!config('settings.single.listings_review_activation')) {
			return $this->notAllowedAction();
		}
		
		$this->xPanel->hasAccessOrFail('update');
		
		return $this->_bulkActions('approval', 'reviewed', 1);
	}
	
	/**
	 * Bulk Disapproval (Not Reviewed)
	 *
	 * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
	 */
	private function bulkDisapproval()
	{
		if (!config('settings.single.listings_review_activation')) {
			return $this->notAllowedAction();
		}
		
		$this->xPanel->hasAccessOrFail('update');
		
		return $this->_bulkActions('disapproval', 'reviewed', 0);
	}
	
	/**
	 * Bulk Boolean Column Update
	 *
	 * @param $action
	 * @param null $column
	 * @param null $value
	 * @param null $successMessageKey
	 * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
	 */
	private function _bulkActions($action, $column = null, $value = null, $successMessageKey = null)
	{
		if (
			!in_array($action, $this->allowedActions)
			|| (
				!in_array($action, ['deletion'])
				&& (!in_array($column, $this->xPanel->model->getFillable()))
			)
		) {
			return $this->notAllowedAction();
		}
		
		$redirectUrl = $this->xPanel->route;
		
		$data = [];
		
		if (!request()->has('entryId')) {
			$message = trans('admin.no_item_selected');
			if (request()->ajax()) {
				$data['success'] = false;
				$data['message'] = $message;
				
				return response()->json($data, 410, [], JSON_UNESCAPED_UNICODE);
			}
			
			Alert::error($message)->flash();
			
			return redirect()->to($redirectUrl);
		}
		
		try {
			
			// $modelKeyName = $this->xPanel->model->getKeyName();
			$modelKeyName = 'id';
			
			$ids = request()->input('entryId');
			foreach ($ids as $id) {
				if ($action == 'deletion') {
					$res = $this->xPanel->delete($id);
				} else {
					$model = $this->xPanel->model->where($modelKeyName, $id)->first();
					if (!empty($model) && $model->{$column} != $value) {
						$model->{$column} = $value;
						$model->save();
					}
				}
			}
			
			if (!empty($successMessageKey)) {
				$message = trans('admin.' . $successMessageKey, ['countSelected' => count((array)$ids)]);
			} else {
				$message = t('confirm_message_success');
			}
			
			// AJAX Response
			if (request()->ajax()) {
				$data['success'] = true;
				$data['message'] = $message;
				
				return response()->json($data, 200, [], JSON_UNESCAPED_UNICODE);
			}
			
			Alert::success($message)->flash();
			
		} catch (\Throwable $e) {
			$message = $e->getMessage();
			
			// AJAX Response
			if (request()->ajax()) {
				$data['success'] = false;
				$data['message'] = $message;
				
				return response()->json($data, 410, [], JSON_UNESCAPED_UNICODE);
			}
			
			Alert::error($message)->flash();
		}
		
		return redirect()->to($redirectUrl);
	}
	
	/**
	 * Not Allowed Action
	 *
	 * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
	 */
	private function notAllowedAction()
	{
		$redirectUrl = $this->xPanel->route;
		
		$message = 'Action not allowed.';
		if (request()->ajax()) {
			$data['success'] = false;
			$data['message'] = $message;
			
			return response()->json($data, 410, [], JSON_UNESCAPED_UNICODE);
		}
		
		Alert::error($message)->flash();
		
		return redirect()->to($redirectUrl);
	}
}
