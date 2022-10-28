<x-mail::message>
# Introduction
<h1>User {{ $user->name }} has been created!</h1>

<x-mail::button :url="''">
Hello
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
