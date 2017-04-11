<?php
/**
 * Created by PhpStorm.
 * User: kimnh
 * Date: 12/04/2017
 * Time: 00:42
 */

namespace App\Core\Models\Traits;

use Illuminate\Auth\Passwords\CanResetPassword as BaseCanResetPassword;
use App\Notifications\Auth\ResetPassword as ResetPasswordNotification;

trait CanResetPassword
{
    use BaseCanResetPassword;

    /** @inheritdoc */
    public function sendPasswordResetNotification($token)
    {
        $notification = new ResetPasswordNotification($token);
        $notification->onQueue('mail.notification');
        $this->notify($notification);
    }
}
