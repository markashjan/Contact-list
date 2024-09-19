<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{    
    public function signup(){
        return view('signup');
    }
    public function user(User $user){
        //dd($user);
        $user = User::all();
        return view('userpage')->with('user',$user);
     
    }
    public function userdetails(User $user){

        return view('userdetails')->with('user',$user);

    }
    public static function userdata(Request $request):RedirectResponse
    {
        $data = request()->all();      

        $user = new User();
        //On the left is the field name in DB and on the right is field name in Form/view
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save();

        session()->flash('success', 'User created successfully');

        return redirect('userpage');

    }
    
    public function edituser(User $user){
    
        return view('edituser')->with('user',$user);
    
    }
    
    public static function update(User $user){
        $data = request()->all();
        
        $user->name = $data['name'];
        $user->phone = $data['email'];
        $user->save();

        session()->flash('success', 'Contact infomation updated successfully');

        return redirect('userdetails');

    }
    public function delete($contact){
        //$contact->dd();
        User::where('id', $contact)->delete();

        session()->flash('success', 'Contact deleted successfully');
        
        return redirect('/');    
    }

    public function search( Request $request){
        $search = $request->input('search');
        $Contacts = User::where('name', 'like', '%'.$search.'%')->get(); 
        //dd($results); 
    return view('index', compact('Contacts'));
    }
}
