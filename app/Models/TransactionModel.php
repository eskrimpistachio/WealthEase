<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransactionModel extends Model
{
    protected $table = 'transactions';

    use HasFactory;
    protected $fillable = [
        'acc_num',
        'name',
        'amount',
        'notes',
        'status',
    ];

    public static function getAll()
    {
        $list_account = DB::table('transactions')->select('name', 'bank', 'status', 'amount')->get();
        return $list_account;
    }
}
