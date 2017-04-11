<?php
/**
 * Created by PhpStorm.
 * User: huukimit
 * Date: 23/01/2017
 * Time: 22:13
 */
namespace App\Core\Models;

use App\Core\Models\Contracts\UserProvider;
use App\Core\Models\Traits\CanResetPassword;
use App\Core\Models\Traits\UserProviderable;
use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as ResetPasswordable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

/**
 * Class BaseUser
 *
 * @package App\Core\Models
 * @property int $id
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $avatar
 * @property string $phone
 * @property string $address
 * @property bool $is_verify
 * @property bool $is_active
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class User extends Model implements UserProvider, AuthenticatableContract, ResetPasswordable
{
    use UserProviderable,
        Authenticatable,
        CanResetPassword,
        HasApiTokens,
        Notifiable;

    protected $table = 'users';
    protected $hidden = ['password', 'remember_token', 'role', 'is_verify', 'is_active'];
    protected $fillable = [
        'id',
        'email',
        'first_name',
        'last_name',
        'avatar',
        'phone',
        'address',
    ];
    protected $casts = [
        'is_verify' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function isVerified()
    {
        return $this->is_verify;
    }

    public function isActived()
    {
        return $this->is_active;
    }
}
