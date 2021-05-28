<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loans;



//facade
use Redirect;

class LoansController extends Controller
{
    //declare variable
   protected $request;
   public function __construct(Request $request)
   {

       $this->request = $request;
    }
    public function index()
    {

        
        return view ('Loans');
    }
    public function save()
    {
        Loans::create(
        $this->request->except('_token')
        
    );
        
        return Redirect::route('home');

    }
}