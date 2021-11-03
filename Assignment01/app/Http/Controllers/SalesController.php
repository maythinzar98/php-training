<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalesRequest;
use App\Models\Sales;
use Illuminate\Http\Request;
use App\Contracts\Dao\Sales\SalesInterface;

class SalesController extends Controller
{
    public function __construct(SalesInterface $SalesInterface)
    {
        $this->SalesInterface = $SalesInterface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ShowSalesTable()
    {
        $data = Sales::latest()->paginate(5);

        return view('Sales.SalesList', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sales.SalesCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalesRequest $request)
    {
        $validated = $request->validated();
        $this->SalesInterface->store($validated);
        return redirect()->route('Sales.index')->with('success','Data added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function SalesEdit($id)
    {
        $data = $this->SalesInterface->selectSales($id);
        return view('Sales.SalesUpdate',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalesRequest $request, $id)
    {
        $validated = $request->validated();
        return redirect()->route('Sales.index')->with('success','Data updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteSales($id)
    {
        $this->ShoesInterface->deleteSales($id);
        return redirect()->route('Sales.index')->with('success', 'Data is successfully deleted');
    }
}
