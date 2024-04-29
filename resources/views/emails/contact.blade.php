<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Message</title>
</head>

<body>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td style="padding: 20px; background-color: #f4f4f4; font-family: Arial, sans-serif;">
                <table align="center" width="600" border="0" cellspacing="0" cellpadding="0"
                    style="background-color: #ffffff; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                    <tr>
                        <td style="padding: 20px;">
                            <h2 style="font-size: 20px; font-weight: bold;">Hello, you've got a new message from your
                                website contact form.</h2>
                            <hr style="margin-top: 10px; margin-bottom: 20px; border: 0; border-top: 1px solid #ccc;">
                            <h3 style="font-size: 16px; font-weight: bold; margin: 5px 0;">Name:</h3>
                            <p style="font-size: 16px; margin: 0; margin-bottom: 20px;">{{ $data['name'] }}</p>
                            <h3 style="font-size: 16px; font-weight: bold; margin: 5px 0;">Number:</h3>
                            <p style="font-size: 16px; margin: 0; margin-bottom: 20px;">{{ $data['contact_number'] }}
                            </p>
                            <h3 style="font-size: 16px; font-weight: bold; margin: 5px 0;">Email:</h3>
                            <p style="font-size: 16px; margin: 0; margin-bottom: 20px;">{{ $data['email'] }}</p>
                            <h3 style="font-size: 16px; font-weight: bold; margin: 5px 0;">Message:</h3>
                            <p style="font-size: 16px; margin: 0; margin-bottom: 20px;">{{ $data['message'] }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>



{{-- <x-mail::message>
    # Hello you've got a new message from your website contact form.

    <h3>Name: {{ $data['name'] }}</h3>
    <h3>Number: {{ $data['contact_number'] }}</h3>
    <h3>Email: {{ $data['email'] }}</h3>
    <h3>message: {{ $data['message'] }}</h3>

</x-mail::message> --}}
