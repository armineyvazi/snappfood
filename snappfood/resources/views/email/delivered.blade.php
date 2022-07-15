@component('mail::message')
# Introduction

Your orders is  Delivered
<br>
Date:{{ date('Y-m-d H:i:s') }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
