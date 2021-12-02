@component('mail::message')
# Introduction

This is an email Notification with {{$title}}

@component('mail::button', ['url' => route('stories.index')])
View Story
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
