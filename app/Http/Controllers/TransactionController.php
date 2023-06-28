<?php

namespace App\Http\Controllers;

use App\Models\BalanceModel;
use App\Models\TransactionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    //
    public function sendMoney(Request $request)
    {
        $bank = $request->input('bank');
        $name = $request->input('name');
        $amount = $request->input('amount');
        $notes = $request->input('notes');

        DB::table('transactions')->insert([
            'name' => $name,
            'bank' => $bank,
            'amount' => $amount,
            'notes' => $notes,
            'status' => 'Transfer',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('transactions')
            ->where('created_at', now());

            return redirect('/mutation');
    }

    public function mutation(){
        return view('mutation', [
            "active" => "mutation",
            "mutation"  => TransactionModel::getAll()
        ]);
    }

    public function balance(){
        return view('balance', [
            "active" => "balance",
            "balance" => BalanceModel::getBalance()
        ]);
    }

    public function addBalance(Request $request)
    {
        $balance = $request->input('amount');;

        DB::table('balance')->insert([
            'balance' => $balance,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

            return redirect('/balance');
    }

}