<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => ['required']
        ]);


        $subscription = Subscription::create($data);

        return redirect()->back();
    }
}
