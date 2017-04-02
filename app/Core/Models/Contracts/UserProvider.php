<?php

/**
 * Created by PhpStorm.
 * User: huukimit
 * Date: 23/01/2017
 * Time: 22:22
 */

namespace App\Core\Models\Contracts;

/**
 * Class UserProvider
 * @package App\Core\Models
 */
interface UserProvider
{
    const ADMIN = 'Admin';
    const CUSTOMER = 'Customer';

    public function getType();

    public function isAdmin();

    public function isCustomer();

    public function getName();

    public function getIdentifier();

    public function getAvatarAttribute($value);
}
