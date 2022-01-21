@extends('layouts.app')

@section('content')

    <div class="flex justify-between bg-lighter rounded p-6">
        <h1 class="text-2xl font-bold text-secondary">Tarets</h1>

        <div class="pt-1">
            <a href="{{ route('targets.form') }}" class="btn-primary">Add target</a>
        </div>
    </div>

    @if ($targets->count())

        <div class="flex flex-col gap-4">
            @foreach ($targets as $listing)
                <div class="flex justify-between bg-lighter rounded p-4">
                    <div class="w-1/2">
                        <p class="font-bold">{{ $listing->name }}</p>
                        <p class="truncate" title="{{ $listing->url }}">{{ $listing->url }}</p>
                    </div>

                    <div class="inline-flex gap-2">
                        <a href="{{ route('targets.delete', $listing->id) }}" class="btn-danger">
                            Delete
                        </a>
                        <a href="{{ $listing->url }}" target="_blank" class="btn-primary">
                            Go to link
                        </a>
                    </div>
                </div>
            @endforeach

            {{ $targets->links() }}
        </div>

    @else
        <div class="bg-lighter p-4 rounded">
            <p class="text-white text-2xl font-bold">No targets 😕</p>
        </div>
    @endif

@endsection