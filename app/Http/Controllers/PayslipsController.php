<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payslips;



//facade
use Redirect;


class PayslipsController extends Controller
{
        //declare variable
   protected $request;
   public function __construct(Request $request)
   {

       $this->request = $request;
    }
    public function index()
    {

        
        return view ('payslips');
    }
    public function save()
    {
        Payslips::create(
        $this->request->except('_token')
        
    );
        
        return Redirect::route('home');

    }
}
