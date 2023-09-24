<x-mail::message>
# Contact from {{ $name }}

{{ $content }}

<x-mail::button :url="'http://example.com'">
Visit us
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
