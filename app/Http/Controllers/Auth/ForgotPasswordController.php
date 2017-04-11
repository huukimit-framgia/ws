<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /** @inheritdoc */
    public function showLinkRequestForm()
    {
        return view('admin.index');
    }

    /** @inheritdoc */
    protected function sendResetLinkResponse($response)
    {
        /** @var Request $request */
        $request = request();
        if ($request->wantsJson()) {
            return $this->response([
                'message' => trans($response),
            ]);
        }

        return back()->with('status', trans($response));
    }

    /** @inheritdoc */
    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        $errors = ['email' => trans($response)];

        if ($request->wantsJson()) {
            return $this->response($errors, 422);
        }

        return back()->withErrors($errors);
    }
}
