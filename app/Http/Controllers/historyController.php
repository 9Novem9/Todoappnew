<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\history;//追加
use Illuminate\Support\Facades\Validator;

class historyController extends Controller
{
       
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $history = tasks::all();
       
      return view('history.index', compact('history'));
      }
 

}

    

