@extends('layouts.main')

@section('hero-title')
        <ul>
            <li>
                <div class="card">
                    <img src="{{ $dato['image']}}" alt="dumb foto">
                    <p>{{ $dato['first_name'] }} {{ $dato['last_name'] }}</p>
                    <p>{{ $dato['email'] }}</p>
                    <p>{{ $dato['gender'] }}</p>
                </div>
            </li>
        </ul>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa suscipit, incidunt expedita doloribus ex, error, quod ducimus quidem iste atque esse repellendus laudantium voluptas cupiditate odio maiores maxime ad neque?</p>
    
@endsection