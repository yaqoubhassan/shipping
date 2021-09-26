@component('mail::message')
# New Contact Message from {{$name}}

# Message:
                 {{$message}}

Thanks,<br>
{{ config('project.appname') }}
@endcomponent
