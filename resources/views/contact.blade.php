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
            class="form-control @error('name') is-invalid  @enderror"
            id="name" name="con_name"             
            placeholder="Contacto">
            @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="col-lg-2 control-label">Password</label>
          <div class="col-lg-10">
            <input type="text" 
            class="form-control @error('phone_number') is-invalid  @enderror" " 
            id="number" name="con_phone_number" placeholder="988765432">
            @error('phone_number')
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
