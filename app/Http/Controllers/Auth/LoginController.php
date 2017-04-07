<?php

namespace App\Http\Controllers\Auth;

use App\Core\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /** @var string $redirectTo Where to redirect users after login */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /** @inheritdoc */
    public function showLoginForm()
    {
        return view('admin.index');
    }

    /** @inheritdoc */
    protected function authenticated(Request $request, $user)
    {
        /** @var User $user */
        if (!$user->isVerified()) {
            Auth::logout();

            if ($request->wantsJson()) {
                return $this->response([$this->username() => trans('auth.not_verified')], 400);
            }

            return back();
        }

        if ($request->wantsJson()) {
            return $this->response(compact('user'));
        }

        flash()->success(trans('auth.succeeded'));

        return redirect()->intended($this->redirectPath());
    }

    /** @return string Redirect path after login */
    protected function redirectTo()
    {
        /** @var User $user */
        $user = Auth::user();
        return $user && $user->isAdmin() ? route('admin.dashboard') : route('web.home.index');
    }
}
