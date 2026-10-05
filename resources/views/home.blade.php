@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
<h1 class="text-center mb-4">Treni in partenza da oggi</h1>
@include('includes.trains.table')
@endsection
