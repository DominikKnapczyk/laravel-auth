@extends('layouts.app')

@section('content')
  <section class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Titolo</th>
          <th scope="col">Abstract</th>
        </tr>
      </thead>
      <tbody>
        @forelse($posts as $post)
        <tr>
          <th scope="row">{{ $post->id }}</th>
          <td>{{ $post-> title }}</td>
          <td>{{ $post->getAbstract() }}</td>
          <td>
            <a href="{{ route('admin.posts.show', $post) }}">
              <i class="bi bi-eye"></i>
            </a>
          </td>
        </tr>
        @empty
        @endforelse
      </tbody>
    </table>

    <div class="row">
      <div class="col-10">
        {{ $posts->links() }}
      </div>
      <div class="col-2">
        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Nuovo post</a>
      </div>
    </div>
  </section>
@endsection