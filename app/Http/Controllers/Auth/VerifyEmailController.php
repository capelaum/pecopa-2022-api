<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\ResponseFactory;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function verify(Request $request): RedirectResponse
    {
        $user = User::findOrFail($request->route('id'));

        if ($user->hasVerifiedEmail()) {
            $redirectPath = "/email/ja-verificado?name={$user->name}&email={$user->email}";
            $redirectUrl = config('app.frontend_url') . $redirectPath;
            return redirect($redirectUrl);
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        $redirectPath = "/email/verificado?name={$user->name}&email={$user->email}";
        $redirectUrl = config('app.frontend_url') . $redirectPath;
        return redirect($redirectUrl);
    }

    /**
     * Send Email Verification
     *
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function send(Request $request): Response|Application|ResponseFactory
    {
        $request->user()->sendEmailVerificationNotification();

        return response([
            'message' => 'Email de verificação reenviado com sucesso'
        ], 200);
    }
}
