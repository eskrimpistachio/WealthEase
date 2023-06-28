<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BalanceModel extends Model
{
    use HasFactory;

    protected $table = 'balance';

    public static function getBalance()
    {
        $lastTransaction = DB::table('transactions')->select('amount')->sum('amount');
        $balance = DB::table('balance')->select('balance')->sum('balance');
        return $balance - $lastTransaction ;
    }

// public static function getBalance(){
//     $balance = DB::table('balance')->select('balance')->get();
//     return $balance;
// }

}