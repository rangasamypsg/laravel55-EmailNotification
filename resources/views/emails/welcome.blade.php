@component('mail::message')
# Introduction

The body of your message.

Title : {{ $postTitle }}

Description : {{ $postBody }}


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
