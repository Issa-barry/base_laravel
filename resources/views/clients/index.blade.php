@extends('layout')
@section('content')

    <div class="my-container">
     <div class="content-list-clients">
        <h1>Ajoutez un client !</h1>
         <form action="/clients" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Pseudo </label>
              <input type="text" name="pseudo"  class="form-control  " id="exampleInputName" aria-describedby="nameHelp">
             
            </div>
         
            <button type="submit" class="btn btn-primary">Ajouter le client</button>
          </form>

          <br><br> <br><br>
     
        <h2>La liste de nos clients !</h2>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Refence</th>
                <th scope="col">Nom</th>
                <th scope="col">Membre depuis</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($clients as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->created_at}}</td>
                </tr>
                @endforeach    
            </tbody>
          </table>
     </div>
    </div>
    
@endsection