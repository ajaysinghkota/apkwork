<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use session;

class MainController extends Controller
{
    //

    public function AddTransaction()
    {
        return view('addtransaction');
    }

    public function allTransaction()
     {
        $allTransaction=Transaction::orderBy('id','desc')->get();
        return view('welcome',['alltransaction'=>$allTransaction]);
     }

    public function saveTransaction(Request $request)
     {
        
        $insertarray=array (
            'amount'=>$request->amount,
            'type'=>$request->typeoftransaction,
            'description'=>$request->description
        
        );
        $conut=Transaction::count();

        if($conut==0 && $request->typeoftransaction==1)
         {
            $insertarray['balance']=$request->amount;
         }
         else if($conut>0 && $request->typeoftransaction==1 )
         {
            $lastTransaction=Transaction::orderBy('id','desc')->first();
            $amount=$lastTransaction->balance;
            $insertarray['balance']=$amount+$request->amount;

         }
         else if($conut>0 && $request->typeoftransaction==2 )
         {
            $lastTransaction=Transaction::orderBy('id','desc')->first();
            $amount=$lastTransaction->balance;
            $insertarray['balance']=$amount-$request->amount;

         }
         $transaction=Transaction::create(
            $insertarray
         );
         if($transaction)
         {
            session()->flash('message','Transaction added successfully');
            return redirect('/');

         }
        
     }
}
