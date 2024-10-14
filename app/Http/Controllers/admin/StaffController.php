<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Staff;

class StaffController extends Controller
{
    public function create()
    {
        return view('admin.staffs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'role' => ['required'],
            'profile_img' => ['required'],
        ]);

        $profile_path = $request->file('profile_img')->store('staff', 'public');
        $data['profile_img'] = $profile_path;
        $staff = Staff::create($data);

        return redirect(route('staffs.show', $staff));
    }

    public function show(Staff $staff)
    {
        return view('staff_show', compact('staff'));
    }
}
