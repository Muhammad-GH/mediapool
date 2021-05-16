<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    //
    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
        ]);

        $data = [];

        if (strtolower($request["name"]) == 'helsinki') {
            return $data = [
                "Sunrise" => '04:35 am',
                "Sunset" => '09:58 pm',
                "Daylight" => '17:23 h',
                "Name" => 'helsinki',
            ];
        }
        if (strtolower($request["name"]) == 'vantaa') {
            return $data = [
                "Sunrise" => '04:33 am',
                "Sunset" => '09:58 pm',
                "Daylight" => '17:25 h',
                "Name" => 'vantaa',
            ];
        }
        if (strtolower($request["name"]) == 'espoo') {
            return $data = [
                "Sunrise" => '04:35 am',
                "Sunset" => '09:59 pm',
                "Daylight" => '17:24 h',
                "Name" => 'espoo',
            ];
        }
        if (strtolower($request["name"]) == 'tampere') {
            return $data = [
                "Sunrise" => '04:28 am',
                "Sunset" => '10:13 pm',
                "Daylight" => '17:45 h',
                "Name" => 'tampere',
            ];
        }
        if (strtolower($request["name"]) == 'vaasa') {
            return $data = [
                "Sunrise" => '04:21 am',
                "Sunset" => '10:37 pm',
                "Daylight" => '18:16 h',
                "Name" => 'vaasa',
            ];
        }
        if (strtolower($request["name"]) == 'lappeenranta') {
            return $data = [
                "Sunrise" => '03:54 am',
                "Sunset" => '10:00 pm',
                "Daylight" => '18:06 h',
                "Name" => 'lappeenranta',
            ];
        }

        return response()->json($data, 200);
    }
}
