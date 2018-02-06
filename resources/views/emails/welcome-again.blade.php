@component('mail::message')
# Introduction

Thanks for registering!

@component('mail::button', ['url' => 'http://properBlog.test'])
  The Passenger
@endcomponent

@component('mail::panel', ['url' => ''])
  What's your story?
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
