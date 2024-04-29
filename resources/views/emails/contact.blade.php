<x-mail::message>
    # Hello you've got a new message from your website contact form.

    <h3>Name: {{ $data['name'] }}</h3>
    <h3>Number: {{ $data['contact_number'] }}</h3>
    <h3>Email: {{ $data['email'] }}</h3>
    <h3>message: {{ $data['message'] }}</h3>


    {{-- <x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }} --}}
</x-mail::message>
