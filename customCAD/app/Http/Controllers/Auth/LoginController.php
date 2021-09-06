<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /*public function redirectTo(){
        if(Auth::check()){
            switch(Auth::user()->roles()->value('name')){
                case 'admin': 
                    $redirectTo = route('admin.users.index');
                    return $redirectTo;
                    break;
                case 'user':
                    $redirectTo = route('home');
                    return $redirectTo;
                    break;
                default:
                    $redirectTo = route('login');
                    return $redirectTo;
                    break;
            }
    
        }

    }*/

    public function redirectTo(){
        if(Auth::user()->hasRole('admin')){
            $this->redirectTo = route('admin.users.index');
            return $this->redirectTo;
        }
        $this->redirectTo = route('home');

        return $this->redirectTo;

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
