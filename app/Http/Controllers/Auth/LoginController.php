<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Socialite ;
use Auth;
use Exception;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }






//added for google+ login 
      public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        }
        catch (Exception $e)
        {
            return redirect('auth/google');
        } 
      //dd($user);
        $authUser = $this ->createGoogleUser($user);
        Auth::login($authUser ,true);
        return redirect('/');  //profile page 
    }
     public function createGoogleUser($user)
     {

        $authUser= User::where('google_id',$user->id)->first();
        //dd($authUser); btwrek kool 7aga
        if ($authUser)
        {
            return $authUser ;

        }
    
        return User::Create([
            'name'=>$user->name ,
            'google_id'=> $user->id,
            'email'=> $user->email,
           'avatar' => $user->avatar,
           'password' => bcrypt(str_random(16)), //generating random password 
            ]);
     }
    /////////////////////////////////////////////

//for facebook  
  public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->fields([
            'name', 'email', 'gender', 'birthday'
        ])->scopes([
            'email', 'user_birthday'
        ])->redirect();
    }

     public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->fields([
            'name', 'email', 'gender', 'birthday'
        ])->user();
        }
        catch (Exception $e)
        {
            return redirect('auth/facebook');
        } 
    //dd($user);
        $authUser = $this ->createFacebookUser($user);
        Auth::login($authUser ,true);
        return redirect('/');  //profile page 
    }

     public function createFacebookUser($user)
     {

        $authUser= User::where('facebook_id',$user->id)->first();
        //dd($authUser); btwrek kool 7aga
        if ($authUser)
        {
            return $authUser;

        }
    //////////////////////////////////////////////////////////////////////////////
       try {
         $birthday =$user->user['birthday'] ;
        }
        catch(Exception $e) {
            $birthday = NULL;
        }

        return User::Create([
            'name'=>$user->name ,
            'facebook_id'=> $user->id,
            'email'=> $user->email,
           'avatar' => $user->avatar,
           'birthdate' => $birthday,
           'gender' =>$user->user['gender'],
           'password' => bcrypt(str_random(16)), //generating random password 
            ]);
     }











}
