@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">{{ $contact->con_name }} </h4>
          </div>
          <div class="card-body">
            <p class="card-title pricing-card-title">Telefono: 
                <a href="tel:{{ $contact->con_phone_number }}"> {{ $contact->con_phone_number }}</a>            
            </p>
            <p class="card-title pricing-card-title">Email: 
               <a href="mailto:{{ $contact->con_email }}" target="_blank"> {{ $contact->con_email }}</a>
            </p>
            <p class="card-title pricing-card-title">Edad: {{ $contact->con_age }}</p>
          </div>
        </div>
      </div>
    </div>
    </li>
  </div>
  </div>
@endsection
