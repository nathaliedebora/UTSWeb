@extends('layouts.layout')

@section('title', 'Publisher')
@section('section-name', 'Publisher')

@section('content')
  <p class="section-name bg-secondary">Publisher List</p>

  <div class="data-container">
    @foreach ($publishers as $p)
      <div class="data">
        <div class="data-info">
          <img src="{{ $p->image }}" alt="">
          <h6>{{ $p->name }}</h6>
          <p>{{ $p->address }}</p>
        </div>

        <button class="btn btn-primary align-bottom" onclick="location.href='{{ route('publisher.getDetail', ['id' => $p->id]) }}'">Detail</button>
      </div>
    @endforeach
  </div>
@endsection