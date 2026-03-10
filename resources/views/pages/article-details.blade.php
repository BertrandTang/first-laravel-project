@extends('layouts.app')

@section('title')
    Article n°{{ $id }}
@endsection

@section('content')
    <h2>Article n°{{ $id }}</h2>
    <p>Tu consultes les details de l'article avec l'identifiant {{ $id }}.</p>
@endsection