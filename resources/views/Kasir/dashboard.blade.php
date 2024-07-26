@extends('layouts.sidebar')

@section('content')

<h1 class="font-medium text-2xl">Hello User,</h1>

{{-- Summary Report --}}
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-5">
    <!-- Card 1 -->
    <div class="bg-white rounded-xl shadow-lg p-6 ">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-gray-500 text-sm font-medium">Total Transaction</h2>
                <p class="text-3xl font-bold text-gray-900">40,689</p>
            </div>
            <div class="bg-purple-100 rounded-xl h-16 w-16 flex justify-center items-center">
                <i class="fa-solid fa-chart-line text-purple-600 text-3xl"></i>
            </div>
        </div>
        <div class="flex items-center mt-4 text-green-500">
            <i class="fa-solid fa-arrow-up text-lg"></i>
            <span class="text-sm font-medium ml-1">8.5% <span class="text-gray-500">Up from yesterday</span></span>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-xl shadow-lg p-6 ">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-gray-500 text-sm font-medium">Total Pemasukan</h2>
                <p class="text-3xl font-bold text-gray-900">Rp. 40.000</p>
            </div>
            <div class="bg-yellow-100 rounded-xl h-16 w-16 flex justify-center items-center">
                <i class="fa-solid fa-dollar-sign text-yellow-600 text-3xl"></i>
            </div>
        </div>
        <div class="flex items-center mt-4 text-green-500">
            <i class="fa-solid fa-arrow-up text-lg"></i>
            <span class="text-sm font-medium ml-1">1.3% <span class="text-gray-500">Up from past week</span></span>
        </div>
    </div>
@endsection


