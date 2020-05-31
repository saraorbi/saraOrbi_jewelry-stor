<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\User;
use Illuminate\Support\Facades\Hash;
use Session;


class UserController extends Controller
{
    public static function ShowLoginForm()
    {
        // self::$data['title'] .= 'Login';
        return view('forms.login', self::$data);
    }

    // public static function ShowMyPage()
    // {

    //     return view('my_page');
    // }

    public static function ShowSignUpForm()
    {
        self::$data['title'] .= 'SignUp';
        return view('forms.signup', self::$data);
    }

    public static function ValidatUser(SignInRequest $request)
    {
        if ($user = User::where('email', $request->email)->first()) {
            $user = $user->toArray();
            if (Hash::check($request->password, $user['password'])) {
                Session::put("user_id", $user['id']);
                Session::put("user_name", $user['name']);
                // Session::flash("sm", "welcome {$user['name']}");
                Session::flash("welcome {$user['name']}");
                if ($user['role'] == 7) {
                    Session::put("is_admin", true);
                }
                return redirect('home2');
            }
            return redirect('user/login')->withErrors("invalid email or password");
        }
        return redirect('user/login')->withErrors("invalid email or password");
    }

    public static function SignUpUser(SignUpRequest $request)
    {
        if (User::SaveUser($request)) {
            Session::flash("sm", "Sign up succesfully please sign in");
            return redirect('user/login');
        }
    }

    public static function LogOut()
    {
        Session::flush();
        return redirect('/');
    }
}
