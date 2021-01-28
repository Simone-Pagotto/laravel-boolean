@extends('layouts.main')

@section('hero-title')
    <ul>
        @foreach($data as $user)
            <li>
                <div class="card">
                    <img src="{{ $user['image']}}" alt="dumb foto">
                    <p>{{ $user['first_name'] }} {{ $user['last_name'] }}</p>
                    <p>{{ $user['email'] }}</p>
                    <p>{{ $user['gender'] }}</p>
                    <a href="/utenti/{{$user['id']}}">Vedi Dettagli</a>
                </div>
            </li>
        @endforeach
    </ul>
@endsection