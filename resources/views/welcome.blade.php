@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h2>Bienvenue sur la page d’accueil</h2>

    @if (count($articles) > 0)
        @foreach ($articles as $article)
            <x-article
                :title="$article['title']"
                :description="$article['description']"
            />
        @endforeach
    @else
        <p>Aucun article a afficher pour le moment.</p>
    @endif
@endsection
