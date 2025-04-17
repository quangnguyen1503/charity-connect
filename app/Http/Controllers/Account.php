<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Auth;



class Account extends Controller
{
    public function editvolunteerShow()
    {
        $volunteer = Auth::guard('volunteer')->user();

        if (!$volunteer) {
            return redirect()->route('login.form')->with('error', 'Bạn cần đăng nhập để truy cập trang này.');
        }
        return view('account.editvolunteer', compact('volunteer'));
    }

    public function editvolunteer(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'full_name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
        ]);

        $volunteer = Volunteer::findOrFail($id);
        $volunteer->update($request->all());

        return redirect()->route('account.editvolunteer', $id)->with('success', 'Cập nhật thành công!');
    }
}

