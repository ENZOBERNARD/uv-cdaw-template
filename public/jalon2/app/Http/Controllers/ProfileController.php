<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile/show');
    }


    public function upload(Request $request)
    {
        if($request->hasFile('image')){
            $user = Auth::user();
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('/',$filename,'public');
            $user->profile_photo_path='app/public/'.$filename;
            Auth()->user()->update(['profile_photo_path'=>$filename]);
        }
        return redirect()->back();
    }
}
