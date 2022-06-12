<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Carbon\Carbon;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Transaction::with(
            [
                'user',
                'buyer'
            ]
        )->get();
                        
        //dd($data);
        return view('transaction.index',compact('data'));
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
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
    public function showAjax(Request $request)
    {
        $id=($request->get('id'));
        $data= Transaction::find($id);
        $products=$data->products;
        return response()->json(array(
            'msg'=>view('transaction.showmodal',compact('data','dataProduk'))->render()
        ),200);
    }
    public function form_submit_front()
    {
        $this->authorize('checkmember');
        return view('frontend.checkout');
    }
    public function submit_form()
    {
        $this->authorize('checkmember');

        $cart=session()->get('cart');
        $user=Auth::user();
        $t= new Transaction;
        $t->user_id=$user->id;
        $t->buyer_id=1;
        $t->transaction_date=Carbon::now()->toDateTimeString();
        $t->save();

        $totalharga=$t->insertProduct($cart,$user);
        $t->total=$totalharga;
        $t->save();

        session()->forget('cart');
        return redirect('home');
    }
}
