@csrf
<div class="form-group mb-2">
  {{-- value="{{old('email') ?? $client->name}}" --}}
    <label>Pseudo name</label>
    <input type="text" name="name" class="form-control  @error('name')is-invalid @enderror"  placeholder="Enter pseudo" value="{{old('name') ?? $client->name}}">
          @error('name') 
            <small  class=" invalid-feedback">
             {{$errors->first('name')}}
            </small> 
         @enderror
    </div>

    <div class="form-group mb-2">
    <label>Email address</label>
    <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" " placeholder="Enter email" value="{{old('email') ?? $client->email}} ">
    @error('email') <small  class=" invalid-feedback">{{$errors->first('email')}}</small> @enderror
    </div>    
 


<div class="form-group mb-2">
  <select name="status" class="form-select @error('status')is-invalid @enderror" aria-label="Default select example">
    @foreach ($client->getStatusOption() as  $key => $value)
    <option value="{{$key}}" {{$client->status == $value ? 'selected': ''}} >{{$value}}</option>
    @endforeach

  </select>
  @error('status') <small  class=" invalid-feedback">{{$errors->first('status')}}</small> @enderror
</div>
<div class="form-group mb-2">
  <select name="entreprise_id" class="form-select @error('entreprise_id')is-invalid @enderror" aria-label="Default select example">
    @foreach ($entreprises as $item)
    <option value="{{$item->id}} " {{$client->entreprise_id == $item->id ? 'selected' : ''}} >{{$item->name}} </option>
    @endforeach

  </select>
  @error('entreprise_id') <small  class=" invalid-feedback">{{$errors->first('entreprise_id')}}</small> @enderror
</div>