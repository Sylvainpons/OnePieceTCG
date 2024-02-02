@extends('layouts.main')

@section('content')
<div class="container">
    <h1>{{ $card->nom }}</h1>
    <p>Number: {{ $card->numero }}</p>
    <p>Rarity: {{ $card->rarity->label ?? '-' }}</p>
    <!-- Ajoutez d'autres détails de la carte selon vos besoins -->

    <a href="{{ route('cards') }}" class="btn btn-primary">Back to All Cards</a>
</div>
@endsection
