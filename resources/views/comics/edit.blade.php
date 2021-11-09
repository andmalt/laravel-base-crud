@extends('layouts.main')

@section('title', 'modifica di {{$comic->name}}')

@section('content')
    @include('partials.editCreate')
@endsection