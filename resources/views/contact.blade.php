@extends('layouts.app')

@section('content')
<div class="article-detail">
    <div class="hero">
        <h1>Contactez-nous</h1>
        <p>Une question ? Un projet ? Nous sommes là pour vous.</p>
    </div>

    <div class="card" style="max-width: 600px; margin: 0 auto; background: rgba(30, 41, 59, 0.5);">
        <form onsubmit="event.preventDefault(); alert('Message envoyé ! (Simulation)');">
            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; margin-bottom: 0.5rem; color: var(--text-muted);">Nom complet</label>
                <input type="text" style="width: 100%; padding: 0.75rem; border-radius: 0.5rem; border: 1px solid rgba(255,255,255,0.1); background: #0f172a; color: white;" placeholder="Jean Dupont">
            </div>
            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; margin-bottom: 0.5rem; color: var(--text-muted);">Email</label>
                <input type="email" style="width: 100%; padding: 0.75rem; border-radius: 0.5rem; border: 1px solid rgba(255,255,255,0.1); background: #0f172a; color: white;" placeholder="jean@example.com">
            </div>
            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; margin-bottom: 0.5rem; color: var(--text-muted);">Message</label>
                <textarea rows="5" style="width: 100%; padding: 0.75rem; border-radius: 0.5rem; border: 1px solid rgba(255,255,255,0.1); background: #0f172a; color: white;" placeholder="Votre projet..."></textarea>
            </div>
            <button type="submit" class="btn" style="width: 100%; border: none; cursor: pointer;">Envoyer le message</button>
        </form>
    </div>
</div>
@endsection
