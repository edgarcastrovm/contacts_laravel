@extends('layouts.app')
@push('scripts')
    <script src="{{ asset('js/welcome.js') }}" defer></script>
@endpush
@section('content')
    <section class="welcome">
        <h1 class="welcome_title text-center"> Contacts App</h1>
        <h3 class="welcome_message text-center"> Contacts App</h1>
            <div class="text-center">
                <button class="btn btn-primary welcome_button"> Contacts App</button>
            </div>

    </section>
@endsection
