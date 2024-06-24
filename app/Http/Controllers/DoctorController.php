<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function searchDoctor(Request $request)
    {
        $name = $request->name;
        $results = Doctor::where('name', 'like', '%' . $name . '%')->get();

        $results->transform(function ($doctor) {
            $doctor->timeSlots = unserialize($doctor->timeSlots);
            return $doctor;
        });

        return $results;
    }
    public function searchSpeciality(Request $request)
    {
        $speciality = $request->speciality;
        $results = Doctor::where('speciality', 'like', '%' . $speciality . '%')->get();

        $results->transform(function ($doctor) {
            $doctor->timeSlots = unserialize($doctor->timeSlots);
            return $doctor;
        });

        return $results;
    }
}
