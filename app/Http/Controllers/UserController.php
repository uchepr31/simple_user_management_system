<?php

namespace App\Http\Controllers;

use App\Models\Oursers;
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
            'Phone'=>['required'],
        ]);
        // Now the data has been validated completely, we then create a new instance of the validated in the students_enrollments table using the Students_enrollment model
        $user = new User();

        $user->name = request('Name');
        $user->email = request('Email');
        $user->password = request('Phone');

        //We finally save the collected data in the database
        $user->save();
        session()->flash('success', ' user enrolled  successfully');
        return redirect()->back();

    }

        // for the edit users
    
        public function editPage(){
            $users = User::get();       
            return view('Edituser', compact('users')); 
    
            }
         
        public function showWhatWeWantToEdit($id){
                $users = User::find($id);       
                return view('updateUser', compact('users')); 
                  
        }
    
    
        public function editUsers(Request $request){
           //To validate the data coming from the input fields
                $request->validate([
                'Name' =>['required'],
                'Email' =>['required'],
                'Phone'=>['required']
            ]);
    
            // Now we find that particular user using the id 
            $user = User::find($request->id);
             
            // Here we collect the edited or updated details
            $user->name = $request->Name;
            $user->email = $request->Email;
            $user->password = $request->Phone;
           
            //We finally save the edited details in the database
            $user->save();
              
            session() ->flash("success", "user's details updated successfully");
            return redirect('/edit');
    
        }

          //for the delete user
    public function deleteUser($id){
        $users = User::find($id);
        $users->delete();
        session()->flash('success', ' details deleted successfully');
        return redirect()->back();             
    }

        //for the get users
    public function getUsers(){
    $users = User::get();
    return view('Users', compact('users'));  
    }
}
