<?php

namespace App\Http\Controllers;

use App\Models\Client as ModelsClient;
use Illuminate\Http\Request;

class Client extends Controller
{
    public function index(){
        $client = ModelsClient::all();
        return $client;
    }
}
