@component('mail::message')
# Introduction

Hello,thanks to report this comment but there is no reason to delete this
comment
<br>
Date:{{ date('Y-m-d H:i:s') }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
