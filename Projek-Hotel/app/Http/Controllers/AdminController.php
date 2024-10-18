<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabel_room;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): view{
        $rooms = tabel_room::orderBy('id','asc')->paginate(10);
        return view('admin.dashboard', compact('rooms'));
    }

    public function create(): View
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        //validate form
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'status' => 'required',
            'roomType' => 'required',
            'pricePerNights' => 'required|numeric'

        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/rooms', $image->hashName());

         //create product
        tabel_room::create([
            'image' => $image->hashName(),
            'status' => $request->status,
            'roomType' => $request->roomType,
            'pricePerNights' => $request->pricePerNights
        ]);

        return redirect()->route('admin.dashboard')->with(['success' => 'Product Created']);
    }


}
