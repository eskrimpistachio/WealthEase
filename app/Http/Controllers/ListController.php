<?php

namespace App\Http\Controllers;
use App\Models\Account;
use App\Models\ListModel;

use Illuminate\Http\Request;


class ListController extends Controller
{
    public function getAllLists(){
        return view('list', [
            "active" => "list",
            "accounts" => ListModel::getAll(),
        ]);
    }

    public function findSlug($nomor_rekening){
        return view('transfer', [
            "active" => "transfer",
            "account" => ListModel::find($nomor_rekening),
        ]);
    }

    public function addAccount(Request $request)
    {
        $account = new Account();
        $account->fill($request->only(['name','acc_num', 'bank']));
        $account->save();

        return redirect('/list');
    }
}
