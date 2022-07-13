@extends('layouts.app')

@section('content')
  <div class="container">
    @if ($contacts->count() == 0)
      <div>No existen registros</div>
    @else
      <div class="row">
        @foreach ($contacts as $item)
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">
                  <a class="text-decoration-none text-white" href="{{ route('contacts.show',$item) }}">{{ $item->con_name }} </a> 
                </h4>
              </div>
              <div class="card-body">
                <h4 class="card-title pricing-card-title">Telefono: {{ $item->con_phone_number }}</h4>
                <h4 class="card-title pricing-card-title">Email: {{ $item->con_email }}</h4>
                <h4 class="card-title pricing-card-title">Edad: {{ $item->con_age }}</h4>
                <div class="text-center">
                  
                  <form action="{{ route('contacts.destroy',$item->con_id) }}" method="POST">
                    <a class="col btn btn-lg btn-warning"
                    href="{{ route('contacts.edit', ['contact' => $item->con_id]) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button class="col btn btn-lg btn-danger" type="submit"
                    href="{{ route('contacts.edit', ['contact' => $item->con_id]) }}">Eliminar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          </li>
        @endforeach
      </div>
    @endif
  </div>
@endsection
