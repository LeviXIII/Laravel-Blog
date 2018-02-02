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
  </section>

@endsection