@extends('layouts.app')

@section('title')
    {{ $article->title }}
@endsection

@section('content')
    Article n°{{ $article->id }}
    <x-article :title="$article->title" :description="$article->description" />
@endsection