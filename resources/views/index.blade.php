@extends('layouts.layout')
@section('titolo')
Prodotti
@endsection
@php

$database = config('products');

// dd($database);

$lunghe = [];
$corte = [];
$cortissime = [];

foreach ($database as $key => $prodotto) {
     if ($prodotto['tipo'] == 'lunga') {
          $lunghe[$key] = $prodotto;
     } elseif ($prodotto['tipo'] == 'corta') {
          $corte[$key] = $prodotto;
     } elseif ($prodotto['tipo'] == 'cortissima') {
          $cortissime[$key] = $prodotto;
     }
}

// dd($lunghe, $corte, $cortissime);



@endphp

@section('mainContent')
          @include('partials.main')
@endsection
