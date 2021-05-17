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
                "Sunrise" => '04:14 am',
                "Sunset" => '09:52 pm',
                "Daylight" => '17:38 h',
                "Name" => 'lappeenranta',
            ];
        }
        if (strtolower($request["name"]) == 'joensuu') {
            return $data = [
                "Sunrise" => '03:54 am',
                "Sunset" => '10:00 pm',
                "Daylight" => '18:06 h',
                "Name" => 'joensuu',
            ];
        }
        if (strtolower($request["name"]) == 'kuopio') {
            return $data = [
                "Sunrise" => '03:59 am',
                "Sunset" => '10:11 pm',
                "Daylight" => '18:12 h',
                "Name" => 'kuopio',
            ];
        }
        if (strtolower($request["name"]) == 'mikkeli') {
            return $data = [
                "Sunrise" => '04:13 am',
                "Sunset" => '10:01 pm',
                "Daylight" => '17:49 h',
                "Name" => 'mikkeli',
            ];
        }
        if (strtolower($request["name"]) == 'kotka') {
            return $data = [
                "Sunrise" => '04:24 am',
                "Sunset" => '09:52 pm',
                "Daylight" => '17:28 h',
                "Name" => 'kotka',
            ];
        }
        if (strtolower($request["name"]) == 'jyväskylä') {
            return $data = [
                "Sunrise" => '04:14 am',
                "Sunset" => '10:12 pm',
                "Daylight" => '17:59 h',
                "Name" => 'jyväskylä',
            ];
        }
        if (strtolower($request["name"]) == 'porvoo') {
            return $data = [
                "Sunrise" => '04:30 am',
                "Sunset" => '09:57 pm',
                "Daylight" => '17:27 h',
                "Name" => 'porvoo',
            ];
        }
        if (strtolower($request["name"]) == 'lahti') {
            return $data = [
                "Sunrise" => '04:25 am',
                "Sunset" => '10:01 pm',
                "Daylight" => '17:36 h',
                "Name" => 'lahti',
            ];
        }
        if (strtolower($request["name"]) == 'oulu') {
            return $data = [
                "Sunrise" => '03:43 am',
                "Sunset" => '10:45 pm',
                "Daylight" => '19:01 h',
                "Name" => 'oulu',
            ];
        }
        if (strtolower($request["name"]) == 'järvenpää') {
            return $data = [
                "Sunrise" => '04:32 am',
                "Sunset" => '10:00 pm',
                "Daylight" => '17:28 h',
                "Name" => 'järvenpää',
            ];
        }
        if (strtolower($request["name"]) == 'hyvinge') {
            return $data = [
                "Sunrise" => '04:31 am',
                "Sunset" => '10:02 pm',
                "Daylight" => '17:31 h',
                "Name" => 'hyvinge',
            ];
        }
        if (strtolower($request["name"]) == 'hämeenlinna') {
            return $data = [
                "Sunrise" => '04:30 am',
                "Sunset" => '10:06 pm',
                "Daylight" => '17:37 h',
                "Name" => 'hämeenlinna',
            ];
        }
        if (strtolower($request["name"]) == 'turku') {
            return $data = [
                "Sunrise" => '04:43 am',
                "Sunset" => '10:11 pm',
                "Daylight" => '17:28 h',
                "Name" => 'turku',
            ];
        }
        if (strtolower($request["name"]) == 'pori') {
            return $data = [
                "Sunrise" => '04:36 am',
                "Sunset" => '10:21 pm',
                "Daylight" => '17:45 h',
                "Name" => 'pori',
            ];
        }

        return response()->json($data, 200);
    }
}
