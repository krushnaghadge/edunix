<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Institution;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //


    public function index()
    {

        return view('Landing/dashboard');
    }










    public function register()
    {
        return view('Landing/register');
    }

    public function registerUser(Request $data)
    {
        $newUser = new User();
        $newUser->fullname = $data->input('fullname');
        $newUser->email = $data->input('email');
        $newUser->password = $data->input('password'); // Plaintext (Not secure)

        $file = $data->file('file');
        $newUser->picture = $file->getClientOriginalName();
        $file->move('uploads/profiles/', $newUser->picture);

        $newUser->type = "Customer";

        if ($newUser->save()) {
            return view('Landing/login')->with('success', 'Your account is created. Please login.');
        }

        return redirect()->back()->with('error', 'Registration failed. Try again.');
    }





    public function login()
    {
        return view('singleProduct');
    }
    public function logout()
    {
        session()->flush(); // Clear all session data
        return redirect('Landing/login')->with('success', 'Logged out successfully.');
    }


    public function showLogin()
    {
        return view('Landing/login'); // contains form with action="/loginUser"
    }

    public function loginUser(Request $request)
    {
        $user = User::where('email', $request->input('email'))
            ->where('password', $request->input('password'))
            ->first();

        if ($user) {
            session()->put('id', $user->id);
            session()->put('type', $user->type);
            session()->put('role', $user->type);
            $institution = Institution::where('user_id', $user->id)->first();

            if ($institution) {
                session()->put('institute_id', $institution->id);
            }
            // dd(session()->all());

            if ($user->type == 'admin') {
                return redirect('/admin');
            } else if ($user->type == 'Customer') {
                return redirect('/');
            } else if ($user->type == 'super_admin') {
                return redirect('/admin');
            } else if ($user->type == 'admin_edunix') {
                return redirect('/admin_edunix');
            }
        } else {
            return redirect('Landing/login')->with('error', 'Invalid credentials');
        }
    }

    public function dashboard()
    {
        if (!session()->has('id')) {
            return redirect('Landing/login')->with('error', 'Please log in first.');
        }


        $allProduct = Product::all();
        $newArrival = Product::where('type', 'new-arrivals')->get();
        $hotSale = Product::where('type', 'hot-sales')->get();
        // dd($allProduct);

        return view('Landing/dashboard', compact('allProduct', 'newArrival', 'hotSale'));
    }
}
