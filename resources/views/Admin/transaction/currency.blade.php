@extends('layouts.master')

@section('content')
<div class="flex justify-center items-center">
    <div class="text-center">
        <h1 class="text-black mt-16 font-semibold text-3xl mb-4">Currency Settings</h1>
        <label for="currency" class="text-base font-medium">Select Currency</label>
        <div class="block mt-4">
            <select name="currency" id="" class="rounded w-36 h-10 border-red-700 focus:border-red-600 focus:ring-0">
                <option value="IDR">IDR</option>
                <option value="USD">USD</option>
                <option value="MYR">MYR</option>
            </select>

            <span class="ml-4">
                <input type="text" name="currency" class="w-50 rounded border-red-700" disabled>
            </span>
        </div>
    </div>
</div>
@endsection
