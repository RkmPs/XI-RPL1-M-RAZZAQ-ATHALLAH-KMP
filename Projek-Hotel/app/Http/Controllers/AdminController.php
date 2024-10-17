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
        $rooms = tabel_room::latest()->paginate(10);
        return view('admin.dashboard', compact('rooms'));
    }


}
