<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // for the create user
    public function creatUserPage(){      
        return view('createUserPage'); 

    }

    public function createUser(Request $request){ 
        //To validate the data coming from the input fields
        $validated = $request->validate([
            'Name' =>['required',  'max:255'],
            'Email' =>['required','unique:users,email', 'max:255'],
            'Phone'=>['required', 'max:255'],
        ]);
        // Now the data has been validated completely, we then create a new instance of the validated in the students_enrollments table using the Students_enrollment model
        $user = new User();

        $user->name = request('Name');
        $user->email = request('Email');
        $user->phone = request('Phone');

        //We finally save the collected data in the database
        $user->save();
        session()->flash('success', ' user enrolled  successfully');
        return redirect()->back();

    }
}
