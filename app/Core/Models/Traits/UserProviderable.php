<?php
/**
 * Created by PhpStorm.
 * User: kimnh
 * Date: 08/04/2017
 * Time: 20:55
 */

namespace App\Core\Models\Traits;

use App\Core\Models\Contracts\UserProvider;
use Illuminate\Support\Facades\Storage;

trait UserProviderable
{
    /** @return bool */
    public function isAdmin()
    {
        return $this->getAttribute('role') == UserProvider::ADMIN;
    }

    /** @return bool */
    public function isUser()
    {
        return $this->getAttribute('role') == UserProvider::USER;
    }

    /** @return string Name of user */
    public function getName()
    {
        return trim($this->first_name . ' ' . $this->last_name, ' ');
    }

    /** @return string Identifier of user */
    public function getIdentifier()
    {
        return $this->getName() ?: $this->email;
    }

    /**
     * Get avatar
     *
     * @param string|null $value
     * @return string
     */
    public function getAvatarAttribute($value)
    {
        if (is_null($value)) {
            return config('common.default_avatar');
        }

        return Storage::url($value);
    }
}
