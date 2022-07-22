<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    public function create(){
        return view('Dashboard.admin.create');
    }



    public function changePasswordGet(){

        return view('Dashboard.admin.password');
    }

    public function changePasswordPost(Request $request) {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->route('dashboard.index')->withSuccess('success');
    }

    public function edit(){

        $user = Auth::user();
        return view('Dashboard.admin.infoEdit',compact('user'));


    }

    public function update(Request $request , $id){

        $user = User::findOrFail($id);
        $request->validate([
            'name'=>'required|string|max:225',
            'email'=>'required|email|max:191|unique:users,email,' . request()->segment(3) . ',id',
        ]);
        $user-> update($request->all());
        return redirect()->route('dashboard.index')->withUpdate('update');

    }

    public function home(){
        return view('Dashboard.index',[
            'client' => Client::all()

        ]);
    }
}
