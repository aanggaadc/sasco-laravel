<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Message</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 font-poppins">
    <div class="mx-auto mt-10 max-w-md rounded-md bg-white p-6 shadow-md">
        <h2 class="mb-4 text-xl font-bold">There's new message from website contact form.</h2>
        <hr class="mb-4">
        <h3 class="mb-1 text-lg font-semibold">Name:</h3>
        <p class="mb-4">{{ $data['name'] }}</p>
        <h3 class="mb-1 text-lg font-semibold">Number:</h3>
        <p class="mb-4">{{ $data['contact_number'] }}</p>
        <h3 class="mb-1 text-lg font-semibold">Email:</h3>
        <p class="mb-4">{{ $data['email'] }}</p>
        <h3 class="mb-1 text-lg font-semibold">Message:</h3>
        <p class="mb-4">{{ $data['message'] }}</p>
    </div>
</body>

</html>


{{-- <x-mail::message>
    # Hello you've got a new message from your website contact form.

    <h3>Name: {{ $data['name'] }}</h3>
    <h3>Number: {{ $data['contact_number'] }}</h3>
    <h3>Email: {{ $data['email'] }}</h3>
    <h3>message: {{ $data['message'] }}</h3>

</x-mail::message> --}}
