<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listdata= Supplier::all();
        //dd($listdata);
        return view('supplier.index',compact('listdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("supplier.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Supplier();
        $data->name=$request->get('gname');
        $data->address=$request->get('gaddress');
        $data->save();
        return redirect()->route('suppliers.index')->with('status','Supplier is added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        $data=$supplier;
        return view('supplier.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $supplier->name=$request->get('gname');
        $supplier->address=$request->get('gaddress'  );
        $supplier->save();
        return redirect()->route('suppliers.index')->with('status','supplier data is changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $this->authorize('delete-permission',$supplier);
        try{
            $supplier->delete();
            return redirect()->route('suppliers.index')->with('status','Data Supplier berhasil dhapus');

        }catch (\PDOException $e){
            $msg="Data gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan";

            return redirect()->route('suppliers.index')->with('error',$msg);
        }
    }
}
