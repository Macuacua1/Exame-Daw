<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use Session;
use App\Grupo as Grupo;

class UserController extends Controller
{
    
    public function index(){
        //fetch all users data
        $users = User::orderBy('created_at','desc')->get();
        
        //pass users data to view and load list view
        return view('user.index', ['users' => $users]);
    }
    
    public function details($id){
        //fetch user data
        $user = User::find($id);
        
        //pass users data to view and load list view
        return view('user.details', ['user' => $user]);
    }
    
    public function add(){
        //load form view
        return view('user.add');
    }

    public function addug($id){
        //Add user to grupo
        //fetch all users data
        $users = User::orderBy('created_at','desc')->get();
        $grupo = Grupo::find($id);
               
        return view('user.addug', ['users' => $users], ['grupo' => $grupo]);
    }



    public function insertug(Request $request){
        //validate user data
   
        
        $user_id = $request->user_id;
        $grupo_id = $request->grupo_id;
        
        //store status message

        $user = User::find($user_id);
		$user->chats()->attach($grupo_id);

        Session::flash('success_msg', 'User added to Grupo successfully!');

        return redirect()->route('user.index');
    }
    
    public function insert(Request $request){
        //validate user data
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        
        //get user data
        /*$userData = array(
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        );*/
        $userData = $request->all();
        
        //insert user data
        User::create($userData);
        
        //store status message
        Session::flash('success_msg', 'User added successfully!');

        return redirect()->route('user.index');
    }
    
    public function edit($id){
        //get user data by id
        $user = User::find($id);
        
        //load form view
        return view('user.edit', ['user' => $user]);
    }
    
    public function update($id, Request $request){
        //validate user data
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        
        //get user data
        $userData = $request->all();
        
        //update user data
        User::find($id)->update($userData);
        
        //store status message
        Session::flash('success_msg', 'User updated successfully!');

        return redirect()->route('user.index');
    }
    
    public function delete($id){
        //update user data
        User::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'User deleted successfully!');

        return redirect()->route('user.index');
    }

    public function ugdelete($id){
        //update user data
        User::find(Auth::id())->chats()->detach($id);        
        //store status message
        
        Session::flash('success_msg', 'User deleted successfully!');

        return redirect()->route('user.index');
    }
    
}