@component('mail::message')
# Introduction

Thanks for reporting the comment.
<br>
Date:{{ date('Y-m-d H:i:s') }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
