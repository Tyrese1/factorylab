<?php

namespace App\Http\Controllers;

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\http\Request;
use Firebase\JWT\JWT;

class AccessController extends Controller {

    /**
     * This is the login function.
     *
     * @return page
     */
    public function Authenticate($token = null)
    {
        //checking if user is authenticated already
        if(!$token)
        {
            //if not, return login page for user to enter details
            //return view('login', ['sitename' => config('app.name')]);
            
            //if user submits then authenticate
            if(isset($_POST['submit']))
            {
                //user details
                $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
                $pass = $_POST['pass'];
                $user_data = [
                    "email" => $email,
                    "password" => password_hash($pass, PASSWORD_BCRYPT)
                ];
                //get details from database and verify
                $user = DB::table('users')->where('email', $email)->first();
        
                //compare details with the ones in database
                if (($user->email == $email) && (password_verify($pass, $user->password) )) 
                {
                    //store user details in a token
                    $token = JWT::encode($user_data,"my_secret_key");

                    return view('welcome', [
                    'sitename' => config('app.name'),
                    'token' => $token
                    ]);
        
                }else{
                    //if details are wrong @return error 
                    return "Invalid details";
                    }
                }//
            
        }else{//else if is token assigned already return profile
            return view('welcome', [
                'sitename' => config('app.name')    
            ]);
        }//end of if..else()
        
    }//end of function authenticate()
    
    /**
     * This is the logout function.
     *
     * @return index
     */
    /**public function logout(Request $request)
    {
        //empty session and go back to homepage
        $request->session()->flush();
        return view('welcome', [
            'sitename' => config('app.name')
        ]);
    }*/

}