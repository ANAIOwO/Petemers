<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/service';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //Error messages
        $messages = [
            "name.required" => "使用者名稱需填入!",
            "name.unique" => "此使用者名稱已經註冊過了!",
            "email.required" => "信箱需填入!",
            "email.unique" => "此信箱已經註冊過了!",
            "password.required" => "密碼需填入!",
            "password.min" => "密碼必須大於6個字!",
            "password.confirmed" => "下方確認密碼與輸入的密碼不相同!",
            "phonenumber.required" => "聯絡者電話/手機需填入!",
            "phonenumber.numeric" => "聯絡者電話/手機需為數字!",
            "phonenumber.digits_between" => "聯絡者電話/手機號碼需符合8~10個數字!"
        ];

        // validate the form data
        return  $validator = Validator::make($data, [
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'phonenumber' => 'required|numeric|digits_between:8,10'
        ], $messages);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {         
            return redirect('/service');
        }
      
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    /*protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phonenumber' => $data['phonenumber'],
        ]);
    }*/
    protected function create(array $data)
    {
        
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phonenumber' => $data['phonenumber'],
        ]);
        $user->attachRole('user');  //可切換註冊user/superadministrator
        return $user;
    }
}
