<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $req)
    {
        return view('test', [
            'message' => $req->query('message', 'No se detectó un mensaje'),
        ]);
    }
}
