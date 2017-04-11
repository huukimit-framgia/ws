<?php
/**
 * Created by PhpStorm.
 * User: kimnh
 * Date: 08/04/2017
 * Time: 16:32
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Get current auth
     * @return \Illuminate\Http\JsonResponse
     */
    public function check()
    {
        $user = Auth::user();
        return $this->response(compact('user'));
    }
}
