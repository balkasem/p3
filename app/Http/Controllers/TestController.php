<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //$manyWays = $request->input('manyWays');
        return view('BillSplit.create');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response GET
     */
    public function create()
    {
        return view('BillSplit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $manyWays = $request->input('manyWays', null);
        $round = $request->input('round', false);
        $tabNum = $request->input('tabNum', null);
        $serviceQuality = $request->input('serviceQuality', null);

        if( $manyWays != null && $tabNum != null && $serviceQuality != null ){
            $results = ($tabNum / $manyWays) + ( ($tabNum * ($serviceQuality /100)) / $manyWays );
            if( $round == true) {
                $results = round($results);
            }
        } else {
            $results = 0;
        }

        return view('BillSplit.index')->with([
            'manyWays' => $manyWays,
            'tabNum' => $tabNum,
            'results' => $results,
            'serviceQuality' => $serviceQuality,
            'round' => $request->has('round')
        ]);
        //return view('BillSplit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
