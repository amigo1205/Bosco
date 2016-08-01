<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Exception;
use Illuminate\Http\Request;

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
        return Socialite::driver('facebook')->fields([
            'first_name', 'last_name', 'email', 'gender'
        ])->scopes([
            'email'
        ])->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @param Request $request
     * @return Response
     */
    public function handleProviderCallback(Request $request)
    {
        $user_fb = $this->validateProvider('facebook');
        if($user_fb->getEmail()==''){ throw new Exception('email'); }
        $user = User::where('email',$user_fb->getEmail())->first();
        if(empty($user->id)){
            dd($user_fb->user);
            $user = User::create([
                'name' => $user_fb->user['first_name'],
                'last_name' => $user_fb->user['last_name'],
                'email' => $user_fb->getEmail(),
                'password' => bcrypt(''),
            ]);
        }
        Auth::login($user);
        return response()->redirectTo('mis-reportes');
    }

    public function validateProvider($provider){
        //try {
            $user = Socialite::driver($provider)->user();
            $user->provider = $provider;
        /*} catch(\InvalidArgumentException $e){
            //tw cancel permission
            return response()->redirectTo('mascotas');
        } catch(\OAuthException $e){
            //fb cancel login
            return response()->redirectTo('mascotas');
        } catch (\Exception $e) {
            return response()->redirectTo('mascotas');
        }*/
        return $user;
    }
}
