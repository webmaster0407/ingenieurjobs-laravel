<?php
/**
 * JobClass - Job Board Web Application
 * Copyright (c) BeDigit. All Rights Reserved
 *
 * Website: https://laraclassifier.com/jobclass
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from CodeCanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

namespace App\Models\Traits;


trait VerifiedTrait
{
    public function getVerifiedEmailHtml()
    {
        if (!isset($this->verified_email)) return false;
        
        // Get checkbox
        $out = ajaxCheckboxDisplay($this->{$this->primaryKey}, $this->getTable(), 'verified_email', $this->verified_email);
        
        // Get all entity's data
        $entity = self::find($this->{$this->primaryKey});
        
        if (!empty($entity->email)) {
            if ($entity->verified_email != 1) {
            	// ToolTip
				$toolTip = (!empty($entity->email)) ? 'data-bs-toggle="tooltip" title="' . trans('admin.To') . ': ' . $entity->email . '"' : '';
	
				// Get entity's language (If exists)
				$localeQueryString = '';
				if (isset($entity->language_code)) {
					$locale = (array_key_exists($entity->language_code, getSupportedLanguages()))
						? $entity->language_code
						: config('app.locale');
					$localeQueryString = '?locale=' . $locale;
				}
				
                // Show re-send verification message link
                $entitySlug = ($this->getTable() == 'users') ? 'users' : 'posts';
                $urlPath = $entitySlug . '/' . $this->{$this->primaryKey} . '/verify/resend/email' . $localeQueryString;
				$actionUrl = admin_url($urlPath);
    
				// HTML Link
                $out .= ' &nbsp;';
				$out .= '<a class="btn btn-light btn-xs" href="' . $actionUrl . '" ' . $toolTip . '>';
				$out .= '<i class="far fa-paper-plane"></i> ';
				$out .= trans('admin.Re-send link');
				$out .= '</a>';
            } else {
                // Get social icon (if exists)
                if ($this->getTable() == 'users') {
                    if (!empty($entity) && isset($entity->provider)) {
                        if (!empty($entity->provider)) {
                            if ($entity->provider == 'facebook') {
                                $toolTip = 'data-bs-toggle="tooltip" title="' . trans('admin.registered_from', ['provider' => 'Facebook']) . '"';
                                $out .= ' &nbsp;<i class="admin-single-icon fab fa-facebook-square" style="color: #3b5998;" ' . $toolTip . '></i>';
                            }
							if ($entity->provider == 'linkedin') {
								$toolTip = 'data-bs-toggle="tooltip" title="' . trans('admin.registered_from', ['provider' => 'LinkedIn']) . '"';
								$out .= ' &nbsp;<i class="admin-single-icon fab fa-linkedin-square" style="color: #4682b4;" ' . $toolTip . '></i>';
							}
							if ($entity->provider == 'twitter') {
								$toolTip = 'data-bs-toggle="tooltip" title="' . trans('admin.registered_from', ['provider' => 'Twitter']) . '"';
								$out .= ' &nbsp;<i class="admin-single-icon fab fa-twitter-square" style="color: #0099d4;" ' . $toolTip . '></i>';
							}
                            if ($entity->provider == 'google') {
                                $toolTip = 'data-bs-toggle="tooltip" title="' . trans('admin.registered_from', ['provider' => 'Google']) . '"';
                                $out .= ' &nbsp;<i class="admin-single-icon fab fa-google-plus-square" style="color: #d34836;" ' . $toolTip . '></i>';
                            }
                        }
                    }
                }
            }
        } else {
            $out = checkboxDisplay($this->verified_email);
        }
        
        return $out;
    }
    
    public function getVerifiedPhoneHtml()
    {
        if (!isset($this->verified_phone)) return false;
        
        // Get checkbox
        $out = ajaxCheckboxDisplay($this->{$this->primaryKey}, $this->getTable(), 'verified_phone', $this->verified_phone);
        
        // Get all entity's data
        $entity = self::find($this->{$this->primaryKey});
        
        if (!empty($entity->phone)) {
            if ($entity->verified_phone != 1) {
            	// ToolTip
				$toolTip = (!empty($entity->phone)) ? 'data-bs-toggle="tooltip" title="' . trans('admin.To') . ': ' . $entity->phone . '"' : '';
	
				// Get entity's language (If exists)
				$localeQueryString = '';
				if (isset($entity->language_code)) {
					$locale = (array_key_exists($entity->language_code, getSupportedLanguages()))
						? $entity->language_code
						: config('app.locale');
					$localeQueryString = '?locale=' . $locale;
				}
				
                // Show re-send verification message code
                $entitySlug = ($this->getTable() == 'users') ? 'users' : 'posts';
                $urlPath = $entitySlug . '/' . $this->{$this->primaryKey} . '/verify/resend/sms' . $localeQueryString;
				$actionUrl = admin_url($urlPath);
                
                // HTML Link
                $out .= ' &nbsp;';
				$out .= '<a class="btn btn-light btn-xs" href="' . $actionUrl . '" ' . $toolTip . '>';
				$out .= '<i class="fas fa-mobile-alt"></i> ';
				$out .= trans('admin.Re-send code');
				$out .= '</a>';
            }
        } else {
            $out = checkboxDisplay($this->verified_phone);
        }
        
        return $out;
    }
}