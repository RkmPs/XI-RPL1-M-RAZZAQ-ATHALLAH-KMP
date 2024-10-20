<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabel_room;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


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
            'image' => 'required|image|max:2048',
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

        return redirect()->route('admin.dashboard')->with(['success' => 'Room added']);
    }

    public function show(string $id): View {
        $rooms = tabel_room::findOrFail($id);
        return view('admin.show', compact('rooms'));
    }

    public function edit(string $id): View {
        $rooms = tabel_room::findOrFail($id);
        return view('admin.edit', compact('rooms'));
    }

    public function update(Request $request, $id): RedirectResponse{

        //validate form
        $request->validate([
            'image' => 'image|max:2048',
            'status' => 'required',
            'roomType' => 'required',
            'pricePerNights' => 'required|numeric'

        ]);

        $rooms = tabel_room::findOrFail($id);

        //jika update image
        if($request->hasFile('image')){


            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/rooms', $image->hashName());

            //delete old image
            Storage::delete('public/rooms/'.$rooms->image);

            //update product with new image
            $rooms->update([
                'image'         => $image->hashName(),
                'roomType'         => $request->roomType,
                'pricePerNights'   => $request->pricePerNights,
                'status'         => $request->status
            ]);
        }
        //edit tanpa image
        else{
            $rooms->update([
                'roomType' => $request->roomType,
                'pricePerNights' => $request->pricePerNights,
                'status' => $request->status
            ]); 
        }
        return redirect()->route('admin.dashboard')->with(['success' => 'Room update']);
    }
    public function destroy($id): RedirectResponse
    {
        //get product by ID
        $rooms = tabel_room::findOrFail($id);

        //delete image
        Storage::delete('public/rooms/'. $rooms->image);

        //delete product
        $rooms->delete();

        //redirect to index
        return redirect()->route('admin.dashboard')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
