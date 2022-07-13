@extends('layouts.app')
@push('scripts')
    <script src="{{ asset('js/welcome.js') }}" defer></script>
@endpush
@section('content')
    <section class="welcome">
        <h1 class="welcome_title text-center"> Contacts App</h1>
        <h3 class="welcome_message text-center"> Contacts App</h1>
            <div class="text-center">
                <a href="{{ route('contacts.index') }}" class="btn btn-primary welcome_button">View ontacts</a>
                <a href="{{ route('contacts.create') }}" class="btn btn-primary welcome_button">Add ontacts</a>
            </div>

    </section>
@endsection
