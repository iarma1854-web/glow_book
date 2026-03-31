<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use App\Models\Service;
use App\Models\Specialist;

class HomeController extends Controller
{
    public function index()
    {
        $salons = Salon::with('specialists')->get();
        $services = Service::with('salon')->take(6)->get();
        return view('home', compact('salons', 'services'));
    }

    public function salons()
    {
        $salons = Salon::with('specialists', 'services')->get();
        return view('salons.index', compact('salons'));
    }

    public function showSalon(Salon $salon)
    {
        $salon->load(['specialists.user', 'specialists.services', 'specialists.reviews', 'services']);
        $reviews = \App\Models\Review::whereIn('specialist_id', $salon->specialists->pluck('id'))->with(['client', 'specialist.user'])->latest()->take(6)->get();
        return view('salons.show', compact('salon', 'reviews'));
    }

    public function services()
    {
        $services = Service::with('salon')->get();
        return view('services.index', compact('services'));
    }

    public function specialists()
    {
        $specialists = Specialist::with(['user', 'salon', 'services', 'reviews'])->get();
        return view('specialists.index', compact('specialists'));
    }
}
