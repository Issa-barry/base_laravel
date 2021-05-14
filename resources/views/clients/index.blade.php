@extends('layout')
@section('content')

    
     <div class="content-list-clients">
      <a href="clients/create" class="btn btn-primary my-3">Nouveau client</a>
        <h2>La liste de nos clients !</h2>
      
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Refence</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Email</th>
                  <th scope="col">Entreprise</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($clients as $item)
                  <tr>
                      <th scope="row">{{$item->id}}</th>
                      <td><a href="/clients/{{$item->id}} ">{{$item->name}}</a> </td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->entreprise->name}}</td>
                      <td>{{$item->status }}</td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
         
     </div>
 

@endsection