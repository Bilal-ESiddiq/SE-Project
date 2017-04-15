<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Auth;


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
    protected $redirectTo = '/profile';

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
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'gender' => 'required|max:255',
            'birthdate' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
  

    protected function create(array $data)
    {
        $result = $data['gender'];
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'gender' => $result,
            'birthdate' => $data['birthdate'],
        ]);
        
        

    }

    

    
    public function register(\Illuminate\Http\Request $request)
    {
    // validate the form 


   if($this->validator($request->all())->fails())
   {
    return redirect('/')->withErrors($this->validator($request->all()));
   }
   else{
        $this->create($request->all());
        return redirect('/profile');
   }

// return Redirect::to('/')->withErrors($this->validator);

/*
    if ($this->validator($request->all())->validate()->passes())
    {
        // add the user
        $this->create($request->all());
        return redirect('/profile');
    }
    
  */ 
    
    // redirect user
   // return redirect($this->redirectPath());

    }
}
