<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
            return [
                'NIS' => 3103120134,
                'Name' => 'Mellafesa Rofida',
                'Phone' => '0895422928148',
                'Class' => 'XII RPL 4'
            ];
    }
}
