<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    private $img_user = "image/user/";
    private $logo = "image/logo/";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cmonth = date('m');
        $current_complete = Survey::where('status', 'complete')->whereMonth('created_at', '=', $cmonth)->count();
        $total_complete = Survey::where('status', 'complete')->count();

        $current_quotafull = Survey::where('status', 'quotafull')->whereMonth('created_at', '=', $cmonth)->count();
        $total_quotafull = Survey::where('status', 'quotafull')->count();
        $current_terminate = Survey::where('status', 'terminate')->whereMonth('created_at', '=', $cmonth)->count();
        $total_terminate = Survey::where('status', 'terminate')->count();




        $data = compact('current_complete', 'total_complete', 'current_quotafull', 'total_quotafull', 'current_terminate', 'total_terminate');
        return view('admin.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $adminuser = User::orderby('id', 'DESC')->get();
        $data = compact('adminuser');
        return view('admin.admin-user.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'img_user' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'website' => 'nullable',
            'address' => 'nullable',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->website = $request->website;
        $user->address = $request->address;

        if ($img_user = $request->file('user_img')) {
            $user->user_img = $this->imgUpload($img_user, $this->img_user);
        }
        if ($logo = $request->file('logo')) {
            $user->logo = $this->imgUpload($logo, $this->logo);
        }

        $user->save();

        return redirect('admin/admin-user')->with('success', "submit data");
    }

    public function edit(string $id)
    {
        $adminuser = User::find($id);
        $data = compact('adminuser');
        return view('admin.admin-user.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
            'img_user' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'website' => 'nullable',
            'address' => 'nullable',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->website = $request->website;
        $user->address = $request->address;
        if ($img_user = $request->file('user_img')) {
            $user->user_img = $this->imgUpload($img_user, $this->img_user, $user->user_img);
        }
        if ($logo = $request->file('logo')) {
            $user->logo = $this->imgUpload($logo, $this->logo, $user->logo);
        }
        $user->save();

        return redirect('admin/admin-user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::find(1)->delete();
        return redirect('admin/admin-user');
    }
    public function changePassword()
    {

        return view('admin.password');
    }

    public function storePassword(Request $request)
    {

        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($request->password);
        $user->save();
        Auth::logout();
        return redirect('/login');
        // return Redirect("/dashboard");
    }
}
