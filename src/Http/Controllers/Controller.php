<?php

namespace JSCustom\LaravelLocationManagement\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function __construct(
        \JSCustom\LaravelLocationManagement\Models\User $User,
        \JSCustom\LaravelLocationManagement\Models\UserAddress $UserAddress,
        \JSCustom\LaravelLocationManagement\Models\UserProfile $UserProfile,
        \JSCustom\LaravelLocationManagement\Models\UserRole $UserRole
    ) {
        $this->_user = $User;
        $this->_userAddress = $UserAddress;
        $this->_userProfile = $UserProfile;
        $this->_userRole = $UserRole;
    }
}