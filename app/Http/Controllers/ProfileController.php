<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        if ($request->hasFile('profile_img')) {
            if ($request->user()->profile_img) {
                File::delete(public_path('user_uploads/'.$request->user()->profile_img));
            }
            $file = $request->file('profile_img');
            $file_name = 'profile_imgs/'.date('YmdHi').$request->user()->id.'.'.$request->file('profile_img')->extension();
            
            $file->move(public_path('user_uploads/profile_imgs'), $file_name);
            
        } else {
            $file_name = $request->user()->profile_img;
        }

        $request->user()->fill($request->validated());
        
        if ($request->hasFile('profile_img')) {
            $request->user()->profile_img = $file_name;
        }

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        
        $request->user()->save();

        dd($request->user());

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

}
