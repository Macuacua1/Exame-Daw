<?php

namespace App\Http\Controllers;
use App\Grupo;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Session;

class GrupoController extends Controller
{
    
    public function index(){
        //fetch all users data
        $users = Grupo::orderBy('created_at','desc')->get();
        
        //pass users data to view and load list view
        return view('user.index', ['users' => $users]);
    }
    
    public function details($id){
        //fetch user data
        $grupo = Grupo::find($id);
        
        //pass users data to view and load list view
        return view('user.details', ['grupo' => $grupo]);
    }
    
    public function add(){
        //load form view
        return view('user.add');
    }
    
    public function insert(Request $request){
        //validate user data
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);
        
        //get user data
        /*$userData = array(
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        );*/
        $grupoData = $request->all();
        
        //insert user data
        Grupo::create($grupoData);
        
        //store status message
        Session::flash('success_msg', 'Grupo added successfully!');

        return redirect()->route('user.index');
    }
    
    public function edit($id){
        //get user data by id
        $user = Grupo::find($id);
        
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
        Grupo::find($id)->update($userData);
        
        //store status message
        Session::flash('success_msg', 'Grupo updated successfully!');

        return redirect()->route('user.index');
    }
    
    public function delete($id){
        //update user data
        Grupo::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Grupo deleted successfully!');

        return redirect()->route('user.index');
    }
    
}