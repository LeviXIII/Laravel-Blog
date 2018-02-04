@extends ('layouts/master')

@section('content')
  <section class="col-md-8 blog-main">
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->body }}</p>

    <hr>

    <section class="comments">
      <ul class="list-group">
        @foreach ($post->comments as $comment)
          <li class="list-group-item">
            <strong>
              {{ $comment->created_at->diffForHumans() }}: &nbsp;
            </strong>
            {{ $comment->body }}
          </li>
        @endforeach
      </ul>
    </section>

    {{-- Add a comment --}}
    <section class="card">
      <section class="card-block">
        <form method="POST" action="/posts/{{ $post->id }}/comments">
          {{ csrf_field() }}
          
          <section class="form-group">
            <textarea name="body" placeholder="Write your comment here." class="form-control" required></textarea>
          </section>

          <section class="form-group">
            <button type="submit" class="btn btn-primary">Add Comment</button>
          </section>
        </form>

        @include('layouts/errors')
      </section>
    </section>
  </section>

@endsection