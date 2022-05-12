<?php

namespace App\Http\Controllers\Admin\Panel\Library\Traits\Panel;

trait Delete
{
    /*
    |--------------------------------------------------------------------------
    |                                   DELETE
    |--------------------------------------------------------------------------
    */

    /**
     * Delete a row from the database.
     *
	 * @param $id
	 * @return mixed
	 */
    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
