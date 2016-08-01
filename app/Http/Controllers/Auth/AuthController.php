<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Mockery\CountValidator\Exception;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    public function login(LoginRequest $request)
    {
        if(Auth::attempt(['email'=>$request->get('email'), 'password'=>$request->get('password')],$request->get('remember'))){
            return response()->json([
                'status' => true,
                'message' => 'Inicio con sesión con exito!',
                'url' => url('mis-reportes')
            ]);
        }
        return response()->json([
            'status' => false,
            'errors' => ['No se pudo iniciar sesión, verifica tu email o contraseña!']
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function register(RegisterRequest $request)
    {
        return User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);
    }

    public function logout()
    {
        if(Auth::check()){
            Auth::logout();
        }
        return response()->redirectTo('mascotas');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @param Request $request
     * @return Response
     */
    public function handleProviderCallback(Request $request)
    {
        try{
            $user_fb = Socialite::driver('facebook')->user();
            if($user_fb->getEmail()==''){ throw new Exception('email'); }
            $user = User::where('email',$user_fb->getEmail())->first();
            Auth::login($user);
            $url = 'mis-reportes';
        }catch (Exception $e){
            $url = 'mascotas';
        }
        return response()->redirectTo($url);
    }
}
