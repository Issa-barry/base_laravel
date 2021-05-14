@extends('layout')
@section('content')
   {{-- Pas besoin de foreach ici --}}
   <div class="show-client">
    
      <a href="{{$client->id}}/edit" class="btn btn-secondary my-3">Modifier</a>
      <form action="/clients/{{$client->id}} " method="post" style="display: inline;">
       @csrf
       @method('DELETE')
      <button type="submit" class="btn btn-danger">Supprimer</button>
      </form>


    <ul class="list-group list-group-flush">
       
        <li class="list-group-item">  <h3> {{$client->name}} </h3> </li>
        <li class="list-group-item"> <strong>Email</strong>        : {{$client->email}} </li>
        <li class="list-group-item"> <strong>Membre depuis</strong>: {{$client->created_at}} </li>
        <li class="list-group-item"> <strong>Status</strong>       : {{$client->status}} </li>
        <li class="list-group-item"> <strong>Entreprise</strong>: {{$client->entreprise->name}} </li>
      </ul>
   </div>
@endsection