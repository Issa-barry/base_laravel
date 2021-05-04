@extends('layout')
@section('content')

    <div class="my-container">
     <div class="content-list-clients">
        <h1>Ajoutez un client !</h1>
         <form action="/clients" method="POST">
            @csrf
            <div class="form-group mb-2">
              <label>Pseudo name</label>
              <input type="text" name="name" class="form-control  @error('name')is-invalid @enderror"  placeholder="Enter pseudo">
              @error('name') <small  class=" invalid-feedback">{{$errors->first('name')}}</small> @enderror
            </div>
      
            <div class="form-group mb-2">
              <label>Email address</label>
              <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" " placeholder="Enter email">
              @error('email') <small  class=" invalid-feedback">{{$errors->first('email')}}</small> @enderror
            </div>
            <div class="form-group mb-2">
              <select name="status" class="form-select @error('status')is-invalid @enderror" aria-label="Default select example">
                <option value="1">Actif</option>
                <option value="0">Inactif</option>
              </select>
              @error('status') <small  class=" invalid-feedback">{{$errors->first('status')}}</small> @enderror
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
                <th scope="col">Email</th>
                <th scope="col">Membre depuis</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($clients as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->status}}</td>
                   
                </tr>
                @endforeach    
            </tbody>
          </table>
     </div>
    </div>
    
@endsection