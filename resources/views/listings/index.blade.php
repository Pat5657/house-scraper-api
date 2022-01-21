@extends('layouts.app')

@section('content')

    <div class="flex justify-between bg-lighter rounded p-6">
        <h1 class="text-2xl font-bold text-secondary">Listings</h1>
    </div>

    @if ($listings->count())

        <div class="flex flex-col gap-4 text-white">
            @foreach ($listings as $listing)
                <div class="flex justify-between bg-lighter rounded p-4">
                    <div class="flex flex-row gap-2">
                        <img src="{{ $listing->image }}" alt="{{ $listing->name }} image" class="w-40">

                        <div>
                            <p class="text-lg">{{ $listing->name }}</p>
    
                            <div class="inline-flex gap-2">
                                <p class="text-primary">@convert($listing->price)</p>
    
                                <span><i class="fas fa-bed"></i> {{ $listing->beds }}</span>
    
                                <span><i class="fas fa-bath"></i> {{ $listing->baths }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="inline-flex gap-2">
                        {{-- <button class="btn-secondary">
                            Shortlist
                        </button> --}}
                        <a href="{{ $listing->link }}" target="_blank" class="btn-primary">
                            View
                        </a>
                    </div>
                </div>
            @endforeach

            {{ $listings->links() }}
        </div>
    
    @else
        <div class="bg-lighter p-4 rounded">
            <p class="text-white text-2xl font-bold">No listings 😕</p>
        </div>
    @endif

@endsection