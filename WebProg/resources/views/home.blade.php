@extends('layouts.layout')

@section('title', 'Home')

@section('content')
  <p class="section-name bg-secondary">Book List</p>

  @include('includes.bookList')
@endsection