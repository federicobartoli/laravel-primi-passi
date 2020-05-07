@extends('layouts.layout')
@section('titolo')
Prodotti
@endsection
@php

$database = config('products');
$products = $database[$oggetto];

// dd($database);

$lunghe = [];
$corte = [];
$cortissime = [];




// dd($lunghe, $corte, $cortissime);



@endphp

@section('mainContent')
     @include('partials.main-prodotto')
@endsection
