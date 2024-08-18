@extends('common.layout')

@section('title', 'Edit pal \'' . $pal->name . '\'')

@section('content')

    <form action='/pals/{{ $pal->id }}' method='POST'>
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Name
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="name" type="text" placeholder="Full name" name="name" value="{{ $pal->name }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone_number">
                Phone number
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="phone_number" type="text" placeholder="+316 123 457 678" name="phone_number"
                value='{{ $pal->phone_number }}'>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="status">
                Status
            </label>
            <select
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="status" name="status">
                <option value="concept" @if ($pal->status == 'concept') selected @endif>Concept</option>
                <option value="prefer" @if ($pal->status == 'prefer') selected @endif>Prefer</option>
                <option value="avoid" @if ($pal->status == 'avoid') selected @endif>Avoid</option>
                <option value="need more information" @if ($pal->status == 'need more information') selected @endif>Need more
                    information</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="level">
                Level
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="level" name="level" type="text" placeholder="8.5" value="{{ $pal->level }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">
                Gender
            </label>
            <select
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="gender" name="gender">
                <option value="unknown" @if ($pal->gender == 'unknown') selected @endif>Unknown</option>
                <option value="male" @if ($pal->gender == 'male') selected @endif>Male</option>
                <option value="female" @if ($pal->gender == 'female') selected @endif>Female</option>
                <option value="other" @if ($pal->gender == 'other') selected @endif>Other</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="fun_score">
                Fun-score
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="fun_score" name="fun_score" type="text" placeholder="8.5" value="{{ $pal->fun_score }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="attraction_score">
                Attraction-score
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="attraction_score" name="attraction_score" type="text" placeholder="8.5"
                value="{{ $pal->attraction_score }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="custom_multiplier">
                Custom multiplier
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="custom_multiplier" name="custom_multiplier" type="text" placeholder="8.5"
                value="{{ $pal->custom_multiplier }}">
        </div>


        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="notes">
                Notes
            </label>
            <textarea
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="notes" name="notes">{{ $pal->notes }}</textarea>
        </div>

        <div class="flex items-center justify-between">
            <button
                class="bg-slate-950 hover:bg-slate-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                Save
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="/pals">
                Cancel
            </a>
        </div>
    </form>

@endsection
