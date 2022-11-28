@extends('layouts.layout')

@section('title', $categoryName)

@section('content')
  <p class="section-name bg-secondary">{{ $categoryName }}</p>
  
  @if (count($books) > 0)
    @include('includes.bookList')
  @else
    <p>There are no books in this category.</p>
  @endif
@endsection