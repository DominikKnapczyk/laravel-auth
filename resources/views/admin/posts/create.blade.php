@extends('layouts.app')

@section('content')
  <section class="container">
    <form action="{{ route('admin.posts.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Testo</label>
        <textarea class="form-control" id="text" name="text" rows="5" required></textarea>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" required>
      </div>
      <button type="submit" class="btn btn-primary">Pubblica</button>
    </form>
  </section>
@endsection