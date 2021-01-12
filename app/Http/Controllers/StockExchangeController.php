<?php

namespace App\Http\Controllers;

use App\Models\StockExchange;
use Illuminate\Http\Request;

class StockExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = StockExchange::all();

        return view('/stocks/index', ['stocks' => $stocks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StockExchange  $stockExchange
     * @return \Illuminate\Http\Response
     */
    public function show($id)   //CHANGE INTO $id FOR SIMPLICITY
    {
        $stocks = StockExchange::findOrFail($id);
        return view('/stocks/show', ['stockExchange' => $stocks]);
        // return $stocks;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StockExchange  $stockExchange
     * @return \Illuminate\Http\Response
     */
    public function edit(StockExchange $stockExchange)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StockExchange  $stockExchange
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockExchange $stockExchange)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StockExchange  $stockExchange
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockExchange $stockExchange)
    {
        //
    }
}
