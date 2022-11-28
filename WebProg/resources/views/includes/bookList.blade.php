<div class="data-container">
  @foreach ($books as $b)
    <div class="data">
      <div class="data-info">
        <img src="{{ $b->image }}" alt="">
        <h6>{{ $b->title }}</h6>
        <p>by</p>
        <p>{{ $b->author }}</p>
      </div>

      <button class="btn btn-primary align-bottom" onclick="location.href='{{ route('book.getDetail', ['id' => $b->id]) }}'">Detail</button>
    </div>
  @endforeach
</div>