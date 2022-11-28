@extends('layouts.layout')

@section('title', $book->title)

@section('content')
  <p class="section-name bg-secondary">Book Detail</p>

  <div class="data-detail">
    <img src="{{ $book->image }}" alt="" class="img-fluid">
    <p>Title: {{ $book->title }}</p>
    <p>Author: {{$book->author}}</p>
    <p>Publisher: {{ $book->publisher->name }}</p>
    <p>Year: {{ $book->year }}</p>
    <p>Synopsis:</p>
    <p>{{ $book->synopsis }}</p>
  </div>
@endsection