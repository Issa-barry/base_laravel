<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //

    public function list()
    {

         $clients = client::status();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }
    
    public function store()
    {


      $data = request()->validate([
            'name' => 'required|min:3|max:255',
            'email'  => 'required|email',
            'status'  => 'required|integer',   
        ]);
    
       Client::create($data);

        return back();
    }
    
}
