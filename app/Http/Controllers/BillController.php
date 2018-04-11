<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    //

    public function index()
    {
        return view('calculator')->with([
            'tabNum'      => '',
            'manyWays' => '',
            'serviceQuality'     => '',
            'round'      => '',
            'tips'         => '',
            'total'        => '',
            'tipsPp'       => '',
            'tabNumPp'    => '',
            'totalPp'      => '',
        ]);
    }


    public function calculate(Request $request)
    {

        $tabNum      = $request->input('tabNum', null);
        $manyWays = $request->input('manyWays', null);
        $serviceQuality     = $request->input('serviceQuality', '');
        $round      = $request->has('round');

        $this->validate($request, [
            'tabNum'      => 'required|numeric',
            'manyWays' => 'required|numeric',
            'serviceQuality'     => 'required',
        ]);

        $tabNumPp = ($tabNum / $manyWays) + ( ($tabNum * ($serviceQuality /100)) / $manyWays );

        if ($round) {
            $tabNumPp = round($tabNumPp);
        }

        //----------------

        return view('calculator')->with([
            'tabNum'      => $tabNum,
            'manyWays' => $manyWays,
            'serviceQuality' => $serviceQuality,
            'round'      => $round,
            'tabNumPp'    => $tabNumPp,
        ]);
    }


}
