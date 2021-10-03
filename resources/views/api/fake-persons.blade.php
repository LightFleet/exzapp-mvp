@extends('app')

@section('content')
    @foreach($persons as $person)
        <div class="person">
            <h1 data-animate="fadeInDown">{{ $person["firstname"] }}</h1>
            <span>Lastname: {{ $person["lastname"] }}</span>
            <span>Email: {{ $person["email"] }}</span>
            <span>Phone: {{ $person["phone"] }}</span>
            <span>Birthday: {{ $person["birthday"] }}</span>
            <span>Gender: {{ $person["gender"] }}</span>
            @foreach($person["address"] as $item)
                <span>{{ $item }}</span>
            @endforeach
            <span>Website: {{ $person["website"] }}</span>
            <span><img src="{{ $person["image"] }}" alt="person image"></span>
        </div>
    @endforeach
@endsection
