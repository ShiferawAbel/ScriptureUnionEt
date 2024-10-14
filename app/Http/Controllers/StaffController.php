<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function show(Staff $staff)
    {
        return view('staff_show', compact('staff'));
    }
}
