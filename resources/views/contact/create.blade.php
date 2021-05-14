@extends('layout')
@section('content')
@if (!session()->has('message'))
    
<div class="my-container">
  <h1>Contact works</h1>
  <form action="/contact" method="POST">
    @csrf
    <div class="form-group mb-2">
      {{-- value="{{old('email') ?? $client->name}}" --}}
        <label>Pseudo name</label>
        <input type="text" name="name" class="form-control  @error('name')is-invalid @enderror"  placeholder="Enter pseudo" value="{{old('name')}}">
              @error('name')  <small  class=" invalid-feedback">{{$errors->first('name')}}</small> 
            @enderror
        </div>
        <div class="form-group mb-2">
        <label>Email address</label>
        <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" " placeholder="Enter email" value="{{old('email')}} ">
        @error('email') <small  class=" invalid-feedback">{{$errors->first('email')}}</small> @enderror
        </div>    
       
        <div class="form-group">
              <label>Example textarea</label>
              <textarea name="message" class="form-control @error('message') is-invalid @enderror"   rows="3" placeholder="Message..."> {{old('message')}}</textarea>
              @error('message') <small  class=" invalid-feedback">{{$errors->first('message')}}</small> @enderror
            </div>
            <button type="submit" class="btn btn-primary my-3">Envoyer le message</button>
        </div>

    
  </form>
</div>
@endif    
@endsection