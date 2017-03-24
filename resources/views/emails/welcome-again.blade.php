@component('mail::message')
# Introduction

Thank You so much for Registering!
@component('mail::button', ['url' => 'https://laracasts.com'])
Start Browsing
@endcomponent


@component('mail::panel', ['url' => 'https://www.nasa.gov/feature/top-15-earth-images-of-2015/'])
Some amazing NASA Images to go here:) 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
