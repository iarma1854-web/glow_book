@extends('layouts.app')
@section('title', 'Salon Dashboard')
@section('content')
<div class="bg-brown py-10">
    <div class="max-w-7xl mx-auto px-4">
        <h1 class="text-2xl md:text-3xl font-bold text-white">Salon Owner Dashboard</h1>
        <p class="text-stone-400 mt-1">Welcome, {{ auth()->user()->name }}</p>
    </div>
</div>
<div class="max-w-3xl mx-auto px-4 py-16">
    <div class="bg-white rounded-2xl shadow-sm border border-stone-200 p-10 text-center">
        <div class="w-16 h-16 bg-gold/10 rounded-full flex items-center justify-center mx-auto mb-5">
            <svg class="w-8 h-8 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
        </div>
        <h2 class="text-xl font-bold text-brown">No Salon Assigned Yet</h2>
        <p class="text-stone-500 mt-2 max-w-md mx-auto">Your account is set up as a salon owner, but you don't have a salon assigned to you yet. Please contact the platform administrator to create and assign a salon to your account.</p>
        <div class="mt-6 p-4 bg-cream rounded-2xl text-sm text-stone-600">
            <p class="font-medium text-brown mb-1">What happens next?</p>
            <p>The admin will create a salon and assign you as the owner. Once that's done, you'll be able to manage specialists, services, and view appointments right from this dashboard.</p>
        </div>
    </div>
</div>
@endsection
