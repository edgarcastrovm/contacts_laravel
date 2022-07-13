@extends('layouts.app')

@section('content')
  <div class="container">
    @forelse ($contacts as $item)
      <div class="card mb-3" >
        <div class="row g-0">
          <div class="col-md-4">
            <a href="{{ route('contacts.show',$item->con_id) }}">
              <img src="img/logo.png" class="img-fluid rounded-start" height="40px" alt="Imagen de Perfil">
            </a>
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <p class="card-text">{{ $item->con_name }}</p>
              <p class="card-text"><a href="mailto:{{ $item->con_email }}" target="_blank"> {{ $item->con_email }}</a></p>
              <p class="card-text"><a href="tel:{{ $item->con_phone_number }}"> {{ $item->con_phone_number }}</a> </p>
              <p class="card-text"><small class="text-muted">{{ $item->created_at }}</small></p>
              <p class="card-text"><small class="text-muted">{{ $item->updated_at }}</small></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card-body">
              <form action="{{ route('contacts.destroy',$item->con_id) }}" method="POST">
                <a class="col btn btn-lg btn-warning"
                href="{{ route('contacts.edit', ['contact' => $item->con_id]) }}">Editar</a>
                @csrf
                @method('DELETE')
                <button class="col btn btn-lg btn-danger" type="submit"
                href="{{ route('contacts.destroy', ['contact' => $item->con_id]) }}">Eliminar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    @empty
      <div class="card mb-3" style="max-width: 540px;">

      </div>
    @endforelse
  </div>
@endsection
