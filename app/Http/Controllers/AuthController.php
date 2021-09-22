<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return [
            'NIS' => 3103119107,
            'Name' => 'Matahari',
            'Gender' => 'Male',
            'Phone' => '081326007120',
            'Class' => 'XII RPL 5'
        ];
    }
}