@if (count($errors))
  <section class="form-group">
    <section class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </section>
  </section>
@endif
