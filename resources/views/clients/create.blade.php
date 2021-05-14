@extends('layout')
@section('content')

    <div class="my-container">
        <h2 class="my-4">Ajouter un client</h2>
         <form action="/clients" method="POST">
            @include('includes.form')
            <button type="submit" class="btn btn-primary">Ajouter le client</button>
          </form>
     </div>


@endsection