@component('mail::message')
# Introduction

# New Project: {{ $project->title }}

{{ $project->description }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
