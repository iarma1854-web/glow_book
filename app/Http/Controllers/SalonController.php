<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    public function index(Request $request)
    {
        $query = Salon::query();

       
        if ($request->has('search') && $request->search != '') {
            $query->search($request->search);
        }

        if ($request->has('category') && $request->category != 'all') {
            $query->byCategory($request->category);
        }

       
        if ($request->sort == 'top') {
            $query->bestRated();
        }

        $salons = $query->get();

        return view('salons', compact('salons'));
    }
}
