<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class UserAuth extends Controller
{
    function userLogin(Request $res)
    {
        $data = $res->input('user');

        // Assuming 'username' is the field you want to store in the session
        // $res->session()->put('user', $data);  
        // return redirect('profile');
      
        $res->session()->flash('user', $data);

        // Log the information correctly
        Log::info('Showing the user profile for user: ' . $data);

        return redirect('login');
    }
}
