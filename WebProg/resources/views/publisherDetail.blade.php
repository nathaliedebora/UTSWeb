@extends('layouts.layout')

@section('title', $publisher->name)

@section('content')
  <div class="section-name bg-secondary">
    <p>{{ $publisher->name }}</p>
    <p>Address - {{ $publisher->address }}</p>
    <p>Phone - {{ $publisher->phone }}</p>
    <p>Email - {{ $publisher->email }}</p>
  </div>
  
  @if (count($books) > 0)
    @include('includes.bookList')
  @else
    <p>No books have been published by this publisher.</p>
  @endif
@endsection