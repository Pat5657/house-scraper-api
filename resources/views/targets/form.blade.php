@extends('layouts.app')

@section('content')

    <div class="flex justify-between bg-lighter rounded p-6">
        <h1 class="text-2xl font-bold text-secondary">New target</h1>
    </div>

    <div class="flex justify-center p-4">
        <form action="{{ route('targets.store', $id) }}" method="post" class="form">
            @csrf
            <label for="name" class="{{ $errors->has('name') ? 'field-error' : '' }}">
                <span>Name</span>
                <input type="text" name="name" placeholder="Target name/description">
                <span>{{ $errors->first('name') }}</span>
            </label>

            <label for="url" class="{{ $errors->has('url') ? 'field-error' : '' }}">
                <span>Link</span>
                <input type="text" name="url" placeholder="URL to the target search result">
                <span>{{ $errors->first('url') }}</span>
            </label>
    
            <div class="form-buttons">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

@endsection