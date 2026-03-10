@extends('layouts.app')

@section('content')
<div class="article-detail">
    <img src="{{ asset('images/' . $article['image']) }}" alt="{{ $article['title'] }}">
    <h1>{{ $article['title'] }}</h1>
    <div class="meta">
        <span>Par <strong>{{ $article['author'] }}</strong></span>
        <span>|</span>
        <span>Le {{ $article['date'] }}</span>
    </div>
    <div class="article-content">
        {{ $article['content'] }}
    </div>
    <div style="margin-top: 3rem;">
        <a href="{{ route('blog.index') }}" class="btn" style="background: transparent; border: 1px solid var(--primary);">← Retour au Blog</a>
    </div>
</div>
@endsection
