<?php

namespace App\Http\Controllers;

use App\Models\Laptap;
use Illuminate\Http\Request;
use App\Http\Requests\SpecificationsInfoRequest;

class LaptapController extends Controller
{
    public function Specifications(SpecificationsInfoRequest $specificationsInfoRequest)
    {
        Laptap::created($specificationsInfoRequest->all());

    }
}
