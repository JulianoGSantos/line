<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('client/index');
    }

    public function store(Request $request){
        Client::create($request->all());
        return redirect()->route('client.index');
    }
}
