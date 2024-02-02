@extends('layouts.main')

@section('content')
<div class="container">
    <h1>All Cards</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Number</th>
                <th scope="col">Name</th>
                <th scope="col">Rarity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cards as $card)
                <tr>
                    <td>{{ $card->numero }}</td>
                    <td><a href="{{ route('cards.show', $card->id) }}">{{ $card->nom }}</a></td>
                    <td>{{ $card->rarity->label }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection