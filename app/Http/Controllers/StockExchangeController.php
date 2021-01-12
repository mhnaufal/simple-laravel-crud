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
        return view('stocks.create', [StockExchangeController::class, 'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:100', 'unique:App\Models\StockExchange,name'],
            'buy' => ['required', 'integer', 'between:100000,1000000'],
            'sell' => ['required', 'integer', 'between:50000,1000000'],
            'lot' => ['required', 'integer', 'between:1,3']
        ]);

        StockExchange::create([
            'name' => $request->name,
            'buy' => $request->buy,
            'sell' => $request->sell,
            'lot' => $request->lot
        ]);

        // StockExchange::create($request->all());

        return redirect('stocks.index')->with('msg', 'Company added successfully!');
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
        return view('/stocks/show', ['stockExchange' => $stocks]); //YANG DIKIRIM stockExchange
        // return $stocks;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StockExchange  $stockExchange
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stocks = StockExchange::findOrFail($id);

        return view('stocks.edit', ['stockExchange' => $stocks]);
        // return $stocks;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StockExchange  $stockExchange
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //BEFORE
        // $stocks = StockExchange::findOrFail($id);
        // return $stocks;

        //AFTER 
        // return $request;
        $validated = $request->validate([
            'name' => ['required', 'max:100', 'unique:App\Models\StockExchange,name'],
            'buy' => ['required', 'integer', 'between:100000,1000000'],
            'sell' => ['required', 'integer', 'between:50000,1000000'],
            'lot' => ['required', 'integer', 'between:1,100']
        ]);

        StockExchange::where('id', $id)
            ->update([
                'name' => $request->name,
                'buy' => $request->buy,
                'sell' => $request->sell,
                'lot' => $request->lot
            ]);

        return redirect('stocks/index')->with('msg', 'Company updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StockExchange  $stockExchange
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stocks = StockExchange::findOrFail($id);
        StockExchange::where('id', $id)->delete();
        return redirect('stocks/index')->with('msg', 'Company deleted successfully');
    }
}
