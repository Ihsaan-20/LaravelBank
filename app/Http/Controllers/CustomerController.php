<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index(request $request){
        $amount = new \App\Models\transactions();
        $user_id = Auth::user()->id;

        return view('customer.index');
    }

    public function deposit(Request $request){
        $user_id = Auth::user()->id;
        $deposit = new \App\Models\transactions();
        $deposit->amount = $request->input('amount');
        $deposit->account_id = $user_id;
        // add depositer name here;
        $deposit->transaction_type = $request->input('deposit');
        $deposit->save();
        return response()->json(['message' => 'Amount Deposited!'], 200);
        // dd($user_id);
        // return "deposit";
    }

    public function withdrawal(Request $request){
        $user_id = Auth::user()->id;
        $withdrawal = new \App\Models\transactions();
        $withdrawal->amount = $request->input('amount');
        $withdrawal->account_id = $user_id;
        $withdrawal->transaction_type = $request->input('withdrawal');
        $withdrawal->save();
        return response()->json(['message' => 'Amount Withdrawn!'], 200);

        // dd($user_id);
        // return "deposit";
    }

    public function transfer(Request $request){
        $user_id = Auth::user()->id;
        $transfer = new \App\Models\transactions();
        $transfer->amount = $request->input('amount');
        $transfer->account_id = $user_id;
        // add transfer to here;
        $transfer->transaction_type = $request->input('transfer');
        $transfer->save();
        return response()->json(['message' => 'Amount Transferred!'], 200);


        // dd($user_id);
        // return "deposit";
    }


















    public function loginBlade(){
        return view('customer.login');
    }

    public function createBlade(){
        return view('customer.create_account');
    }

    public function storeAccount(Request $request){
        dd($request->all());
    }
    
    public function destroy(Request $request)
    {
        
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }


}
