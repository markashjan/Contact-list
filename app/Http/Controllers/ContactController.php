<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function index(){
    
        $view = Contacts::all();

        return view('index')->with('Contacts',$view);
    
    }
    
    public function create(){
        return view('create');
    }
    public function details(Contacts $contact){
        //dd($contact);
        return view('details')->with('contact',$contact);
     
    }
    public static function store(Request $request){
        $data = request()->all();

        try {
            $validated = $request->validate([
                'name' => ['required'],
                'phone' => ['required'],
                'email' => ['required']
            ]);
        } catch (ValidationException $e) {
        }

        return $validated;


        $Contacts = new Contacts();
        //On the left is the field name in DB and on the right is field name in Form/view
        $Contacts->name = $data['name'];
        $Contacts->phone = $data['phone'];
        $Contacts->email = $data['email'];
        $Contacts->save();

        session()->flash('success', 'Contact created succesfully');

        return redirect('/');

    }
    
    public function edit(Contacts $contact){
    
        return view('edit')->with('contact',$contact);
    
    }
    
 public static function update(Contacts $contact){
    $data = request()->all();
    


    $contact->name = $data['name'];
    $contact->phone = $data['phone'];
    $contact->email = $data['email'];
    $contact->save();

    session()->flash('success', 'Contact infomation updated successfully');

    return redirect('/');

}
    public function delete(Contacts $contact){
        
        $contact->delete;
        return redirect('/');    
    }
}
