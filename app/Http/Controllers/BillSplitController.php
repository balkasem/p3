<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class BillSplitController extends Controller
{
    /*
     * GET /books
     * dump($request->input('searchTerm'));
        return view('BillSplit.index');
     *
     */
    public function index(Request $request )
    {
        #$searchTerm =  $_GET['searchTerm'];
        #dump($searchTerm);
        return view('BillSplit.index');
    }

}

