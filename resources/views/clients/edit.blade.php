@extends('layout')
@section('content')

    <div class="my-container">
        <h3 class="my-4">Modifier les informations de {{$client->name}} </h3>
         <form action="/clients/{{$client->id}}" method="POST">
            @method('PATCH')
            @include('includes.form')
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
          </form>
     </div>


@endsection