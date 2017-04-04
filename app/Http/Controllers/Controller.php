<?php

namespace App\Http\Controllers;

use App\Core\Models\BaseUser;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Json response
     *
     * @param array $content
     * @param int $status
     * @param array $headers
     * @return \Illuminate\Http\JsonResponse
     */
    public function response($content = [], $status = 200, $headers = [])
    {
        return response()->json($content, $status, $headers);
    }

    /**
     * Get current auth
     *
     * @return Authenticatable|BaseUser|null
     */
    public function auth()
    {
        return Auth::guard($this->getGuard())->user();
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return string
     */
    protected function getGuard()
    {
        return property_exists($this, 'guard') ? $this->guard : config('auth.defaults.guard');
    }

    /**
     * Get the auth middleware for the application.
     *
     * @return string
     */
    public function authMiddleware()
    {
        $guard = $this->getGuard();
        return $guard ? 'auth:' . $guard : 'auth';
    }
}
