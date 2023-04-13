@extends('layouts.app')

@section('content')
  <section class="container">
    @dump($posts)

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
          <td>{{ $post->title }}</td>
          <td>{{ $post->getAbstract() }}</td>
          <td></td>
        </tr>
        @empty
        @endforelse
      </tbody>
    </table>
  </section>
@endsection