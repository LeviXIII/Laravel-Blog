@extends ('layouts/master')

@section('content')
  <section class="col-md-8 blog-main">
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->body }}</p>
  </section>
@endsection