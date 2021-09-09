<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\products;
use App\Models\transaction;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products = products::paginate(4);
        $user = User::paginate(4);
        $transaction = transaction::with(['products','user'])->paginate(4);

        return view('dashboard',[
            'products' => $products,
            'users' => $user,
            'transactions' => $transaction
        ]);
    }
}
