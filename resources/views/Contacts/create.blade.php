@extends('layouts.app')

@section('content')
  <div class="container">

    <form class="form form-horizontal" method="POST" action="{{ route('contacts.store') }}">
      @csrf
      <fieldset>
        <legend>Legend</legend>
        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Nombre contacto</label>
          <div class="col-lg-10">
            <input type="text" 
            value="{{ old('con_name')}}"
            class="form-control @error('con_name') is-invalid  @enderror"
            id="name" name="con_name"             
            placeholder="Contacto">
            @error('con_name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="number" class="col-lg-2 control-label">telefono</label>
          <div class="col-lg-10">
            <input type="text" 
            value="{{ old('con_phone_number')}}"
            class="form-control @error('con_phone_number') is-invalid  @enderror"
            id="number" name="con_phone_number" placeholder="988765432">
            @error('con_phone_number')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-lg-2 control-label">email</label>
          <div class="col-lg-10">
            <input type="text" 
            value="{{ old('con_email')}}"
            class="form-control @error('con_email') is-invalid  @enderror" 
            id="number" name="con_email" placeholder="email@domain.com">
            @error('con_email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="age" class="col-lg-2 control-label">Edad</label>
          <div class="col-lg-10">
            <input type="number" 
            value="{{ old('con_age')}}"
            class="form-control @error('con_age') is-invalid  @enderror" 
            id="age" name="con_age" placeholder="20">
            @error('con_age')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="reset" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </fieldset>
    </form>

  </div>
@endsection
