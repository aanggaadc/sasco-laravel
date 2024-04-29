<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

class ContactController extends Controller
{
    public function index()
    {
        $items = [
            [
                "icon" => "/icons/ic-pin.png",
                "title" => "Office",
                "description" =>
                "Ruko Grand Orchid Blok A4 No.2, Taman Baloi, Batam Kota, Kota Batam",
                "title2" => "Warehouse",
                "description2" =>
                "Jl. Pattimura RT.001 RW.002 Teluk Nipah, Telaga Punggur, Batam",
            ],
            [
                "icon" => "/icons/ic-phone.png",
                "title" => "Telp",
                "description" =>
                "0811-7708-820",

            ],
            [
                "icon" => "/icons/ic-email.png",
                "title" => "email",
                "description" =>
                "spn@sascopetroniaga.id",

            ],

        ];

        return view('contact', compact('items'));
    }

    public function send()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact_number' => ['required', 'regex:/^(\+62|0)[2-9]{1}[0-9]{7,11}$/'],
            'message' => 'required',
        ], [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'contact_number.required' => 'Nomor kontak harus diisi.',
            'contact_number.regex' => 'Format nomor kontak tidak valid.',
            'message.required' => 'Pesan harus diisi.',
        ]);
        Mail::to('spn@sascopetroniaga.id')->send(new ContactUs($data));

        return redirect()->back()->with('success', 'Thank you for your message. It has been sent.');
    }
}
