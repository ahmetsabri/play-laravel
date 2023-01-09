<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAppointmentRequest;

class AppointmentController extends Controller
{

    public function store(CreateAppointmentRequest $request)
    {
        dd('You are in Controller' , $request->all());
    }

}
