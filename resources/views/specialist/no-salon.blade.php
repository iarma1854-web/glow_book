@extends('layouts.app')
@section('title', 'Specialist Dashboard')
@section('content')
<div class="bg-brown py-10">
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-2xl md:text-3xl font-bold text-white">Specialist Dashboard</h1>
        <p class="text-stone-400 mt-1">Welcome, {{ auth()->user()->name }}</p>
    </div>
</div>
<div class="max-w-3xl mx-auto px-4 py-16">
    <div class="bg-white rounded-2xl shadow-sm border border-stone-200 p-10 text-center">
        <div class="w-16 h-16 bg-gold/10 rounded-full flex items-center justify-center mx-auto mb-5">
            <svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
        </div>
        <h2 class="text-xl font-bold text-brown">Not Assigned to a Salon Yet</h2>
        <p class="text-stone-500 mt-2 max-w-md mx-auto">Your account is registered as a specialist, but a salon owner hasn't added you to their team yet. Once a salon owner adds you, your schedule and appointments will appear here.</p>
        <div class="mt-6 p-4 bg-cream rounded-2xl text-sm text-stone-600">
            <p class="font-medium text-brown mb-1">What happens next?</p>
            <p>A salon owner will find your account and add you as a specialist to their salon. You'll then be able to see appointments and manage your schedule.</p>
        </div>
    </div>
</div>
@endsection
