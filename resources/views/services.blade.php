@extends('layouts.app')

@section('content')
<div class="hero">
    <h1>Nos Services</h1>
    <p>Une expertise complète pour tous vos besoins numériques.</p>
</div>

<div class="grid">
    @foreach($services as $name => $description)
    <div class="card">
        <h2>{{ $name }}</h2>
        <p class="excerpt">{{ $description }}</p>
        <a href="{{ route('contact') }}" class="btn">En savoir plus</a>
    </div>
    @endforeach
</div>
@endsection
