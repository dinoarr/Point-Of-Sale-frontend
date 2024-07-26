@extends('layouts.master')

@section('content')

<h1 class="font-medium text-2xl">Hello User 👋🏼,</h1>

{{-- Summary Report --}}
<div class="bg-white h-[151px] shadow-none drop-shadow-lg rounded-3xl mt-10 p-6 flex space-x-16">

    <div class="flex items-center space-x-4">
        <div class="bg-gradient-to-b from-green-200 to-green-50  rounded-full w-16 h-16 flex items-center justify-center">
            <i class="fas fa-box fa-2x text-green-500"></i>
        </div>
        <div>
            <div class="text-gray-500">Total Barang</div>
            <div class="text-2xl font-bold text-gray-800">5,423</div>
        </div>
    </div>


    <div class="border-r border-gray-200"></div>
    <div class="flex items-center space-x-4">
        <div class="bg-gradient-to-b from-green-200 to-green-50  rounded-full w-16 h-16 flex items-center justify-center">
            <i class="fa-solid fa-chart-line fa-2x text-green-600"></i>
        </div>
        <div>
            <div class="text-[#acacac] font-light text-[14px]">Total Penjualan</div>
            <div class="text-2xl font-semibold text-gray-800">Rp. 1,893</div>
        </div>
    </div>

    <div class="border-r border-gray-200"></div>

    <div class="flex items-center space-x-4">
        <div class="bg-gradient-to-b from-green-200 to-green-50  rounded-full w-16 h-16 flex items-center justify-center">
            <i class="fa-solid fa-dollar-sign fa-2x text-green-600"></i>
        </div>
        <div>
            <div class="text-[#acacac] font-light text-[14px]">Total Profit</div>
            <div class="text-2xl font-bold text-gray-800">Rp. 189</div>
        </div>
    </div>
</div>


{{--Chart--}}
<div class="bg-white h-[400px] shadow-none drop-shadow-lg rounded-xl mt-5">

@endsection


