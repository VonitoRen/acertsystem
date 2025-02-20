<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use Illuminate\Support\Facades\DB;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    // public function store(LoginRequest $request): RedirectResponse
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return redirect()->intended(route('dashboard', absolute: false));
    // }

    public function login(Request $request)
    {
        // Create the validator instance
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()){
            if ($request ->ajax()){
                return response()->json(['errors' => $validator->errors()],422);
            }
        return redirect()->back()->withErrors($validator)->withInput();
        //if credentials good then proceed fix
    }

    $credentials = $request->only('username', 'password');
    $user = DB::table('users')
    ->where('email', $credentials['username'])
    ->first();

    if($user && \Hash::check($credentials['password'], $user->password)){

        Auth::loginUsingId($user->id);

        if ($request->ajax()) {
            // Check user role and set redirection URL accordingly
            $userlvl = Auth::user()->role;

            if ($userlvl == 1) {
                $redirection = 'admin/dashboard';
            } elseif ($userlvl == 2) {
                $redirection = 'legal/dashboard';
            } elseif ($userlvl == 3) {
                $redirection = 'registration/dashboard';
            } elseif ($userlvl == 4) {
                $redirection = 'fad/dashboard';
            } else {
                $redirection = '/login';
            }

            return response()->json([
                'status' => 'success',
                'redirection' => $redirection
            ]);
        }
    }

      // If user not found or password mismatch
      if (!$request->ajax()) {
        return redirect()->back()->with('login_error', 'Invalid credentials. Please check your username and password.');
    }

    return response()->json([
        'errorMessage' => 'Invalid credentials. Please check your username and password.',
        'status' => 'error'
    ]);
}


    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
