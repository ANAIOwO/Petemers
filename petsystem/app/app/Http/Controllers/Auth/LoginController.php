<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    //login
    public function login(Request $request)
    {
         //Error messages
         $messages = [
            "email.required" => "信箱需填入!",
            "email.email" => "此信箱是無效的!",
            "email.exists" => "此信箱未註冊!",
            "password.required" => "密碼需填入!",
            "password.min" => "密碼必須大於6個字!"
        ];

        // validate the form data
        $validator = Validator::make($request->all(), [
                'email' => 'required|email|exists:users,email',
                'password' => 'required|min:6'
            ], $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            // attempt to log
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password ], $request->remember)) {
                // if successful -> redirect forward
                //return redirect('/service');
                $user=Auth::user();
                return $this->authenticated($request,$user);
                
            }

            // if unsuccessful -> redirect back
            return redirect()->back()->with('failed', '您輸入的密碼可能錯誤!');   
        }
    }


    //logout
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();

        return redirect('home');
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected function authenticated(Request $request, $user)
    {
        if ($user->hasRole('superadministrator')) {
            return redirect('/EMRS_home');
        }

        if ($user->hasRole('user')) {
            return redirect('/service');
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
