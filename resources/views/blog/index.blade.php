@extends('layouts.app')

@section('content')
<div class="hero">
    <h1>Le Blog Nexus</h1>
    <p>Articles, tutoriels et actualités sur le développement web.</p>
</div>

<div class="grid">
    @foreach($articles as $article)
    <article class="card">
        <img src="{{ asset('images/' . $article['image']) }}" alt="{{ $article['title'] }}">
        <div class="meta">
            <span>Par {{ $article['author'] }}</span>
            <span>|</span>
            <span>{{ $article['date'] }}</span>
        </div>
        <h2>{{ $article['title'] }}</h2>
        <p class="excerpt">{{ $article['excerpt'] }}</p>
        <a href="{{ route('blog.show', $article['id']) }}" class="btn">Lire la suite</a>
    </article>
    @endforeach
</div>
@endsection
