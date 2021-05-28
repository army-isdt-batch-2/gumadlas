<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deductions;



//facade
use Redirect;

class DeductionsController extends Controller
{
    //declare variable
   protected $request;
   public function __construct(Request $request)
   {

       $this->request = $request;
    }
    public function index()
    {

      
        return view ('deductions')->with([
            'data' => Deductions::all()
        ]);
    }
    public function create_save()
    {
        Deductions::create(
        $this->request->except('_token')
        
    );
        
        return Redirect::route('deductions');

    }
}