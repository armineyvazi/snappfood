@component('mail::message')
# Introduction

please wait your order status waiting
<br>
Date:{{ date('Y-m-d H:i:s') }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
