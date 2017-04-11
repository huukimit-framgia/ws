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
    const USER = 1;
    const ADMIN = 2;

    public function isAdmin();

    public function isUser();

    public function isVerified();

    public function isActived();

    public function getName();

    public function getIdentifier();

    public function getAvatarAttribute($value);
}
