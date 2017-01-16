<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Validator, Input, Redirect, Session, Auth, Hash;
use App\User;

class AdminController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}

    public function index()
    {
    	$doctor = User::where('role', 'doctor')->get();
    	$apoteker = User::where('role', 'apoteker')->get();
        $admin = User::where('role', 'admin')->get();
        $users = User::all();

    	return view('admin.index', [
    		'doctors' => $doctor,
    		'apotekers' => $apoteker,
            'admins' => $admin,
            'users' => $users
    	]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validation_rules = array(
            'name' => 'required',
            'password' => 'required',
            'email' => 'required'
        );

        $validator = Validator::make($request->all(), $validation_rules);

        if (!$validator->fails()) {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;

            $user->save();

            return redirect()->action('AdminController@index');
        } else {
            return redirect()->action('AdminController@create')
                             ->withErrors($validator);
        }
    }
}
