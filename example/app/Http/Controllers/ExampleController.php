<?php

namespace App\Http\Controllers;

use App\Models\User;

class ExampleController extends Controller
{
    public function index() {
        User::query()->first()?->translate('en')->name;
    }

}
