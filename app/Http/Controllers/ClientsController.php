<?php

namespace App\Http\Controllers;

use App\Client;
use App\Entreprise;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //
    
    //Redirection vers la view qui permet de creer un client
    public function create()
    {
        $entreprises = Entreprise::all();
        $client = new Client();//Ont creer d'abord un client vide (cela nous evite aussi des erreurs sur le old() du formulaire)
        return view('clients.create', compact('entreprises','client'));
    }

    //Ajout d'un client
    public function store()
    {
      $data = request()->validate([
            'name' => 'required|min:3|max:255',
            'email'  => 'required|email',
            'status'  => 'required|integer', 
            'entreprise_id'  => 'required|integer',   
        ]);
       Client::create($data);
       return back();
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect('/clients');
    }

    //A) Modifier un client 
    public function edit(Client $client)
    {
            $entreprises = Entreprise::all();
            return view('clients.edit', compact('client','entreprises'));
    }
    //B) Modifier un client (fin)
    public function update(Client $client)
    {
        $data = request()->validate([
            'name' => 'required|min:3|max:255',
            'email'  => 'required|email',
            'status'  => 'required|integer', 
            'entreprise_id'  => 'required|integer',   
        ]);

        $client->update($data); 
        return redirect('clients/'.$client->id);
    }
        

    //Liste des clients
    public function index()
    {
        //  $clients = Client::status();//Lié au scopeStatus
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }
    
    //Afficher un client
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }



    
}
