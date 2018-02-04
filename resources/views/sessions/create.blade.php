@extends('layouts/master')

@section('content')
  <section class="col-sm-8">
    <h1>Sign In</h1>

    <form method="POST" action="/login">
      {{ csrf_field() }}

      <section class="form-group">
        <label for="email">Email Address:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </section>

      <section class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </section>

      <section class="form-group">
        <button type="submit" class="btn btn-primary">Sign In</button>
      </section>

      @include('layouts/errors')
    </form>

    @include('layouts/errors')
  </section>
@endsection