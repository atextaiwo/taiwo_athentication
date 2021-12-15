<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticatedController extends Controller
{
    //
    public function index(){
        return view('backend.index');
    }

    public function logout(){
        Auth::Logout();
        return redirect()->route('login');
    }
    public function profile(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('backend.profile', compact('user'));
    }

    public function edit(){
        $id = Auth::user()->id;
        $editprofile = User::find($id);
        return view('backend.editprofile', compact('editprofile'));
    }
    public function update(request $request){
        $id = Auth::user()->id;
        $updateprofile = User::find($id);
        $updateprofile->name = $request->name;
        $updateprofile->save();
        return redirect()->back()->with('SuccessMsg', 'profile updated successfully');
    
    }
    
}