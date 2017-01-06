<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// Model
use App\Medicine;
use App\Doctor;
use App\Patient;
use App\Record;
use Auth;

class RootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $medicines_count  = Medicine::count();
        $doctors_count    = Doctor::count();
        $patients_count   = Patient::count();
        $records_count = Record::count();
        $authUserRole = Auth::user()->role;

        return view('root.index', [
            'medicines_count'  => $medicines_count,
            'patients_count'   => $patients_count,
            'doctors_count'    => $doctors_count,
            'records_count' => $records_count,
            'authUserRole' => $authUserRole
        ]);
    }
}
