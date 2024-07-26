@extends('layouts.master')

@section('content')

<div class="overflow-x-auto bg-white rounded-lg shadow-lg mt-10">
    <table class="min-w-full leading-normal">
        <thead>
            <tr class="bg-[#272626] text-white">
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold  tracking-wider">No Transaction</th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold  tracking-wider">Products Name</th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold  tracking-wider">Brands</th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold  tracking-wider">Category</th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold  tracking-wider">Quantity Purchased</th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold  tracking-wider">Unit Price</th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold  tracking-wider">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200">
                <td class="px-5 py-5 bg-white text-sm">Data</td>
                <td class="px-5 py-5 bg-white text-sm">Data</td>
                <td class="px-5 py-5 bg-white text-sm">Data</td>
                <td class="px-5 py-5 bg-white text-sm">Data</td>
                <td class="px-5 py-5 bg-white text-sm">Data</td>
                <td class="px-5 py-5 bg-white text-sm">Data</td>
                <td class="px-5 py-5 bg-white text-sm">Data</td>               
            </tr>
        </tbody>
    </table>
</div>
<div class="flex justify-end mt-4">
    <nav aria-label="Page navigation">
        <ul class="inline-flex space-x-2">
            <li><a href="#" class="px-3 py-1 bg-gray-200 hover:bg-red-500 active:bg-red-400 rounded-lg"> <i class="fa-solid fa-chevron-left "></i></a></li>
            <li><a href="#" class="px-3 py-1 bg-red-600 text-white rounded-lg hover:bg-red-700">1</a></li>
            <li><a href="#" class="px-3 py-1 bg-gray-200 hover:bg-red-500 rounded-lg">2</a></li>
            <li><a href="#" class="px-3 py-1 bg-gray-200 hover:bg-red-500 rounded-lg">3</a></li>
            <li><a href="#" class="px-3 py-1 bg-gray-200 hover:bg-red-500 rounded-lg">4</a></li>
            <li><a href="#" class="px-3 py-1 bg-gray-200 hover:bg-red-500 rounded-lg">...</a></li>
            <li><a href="#" class="px-3 py-1 bg-gray-200 hover:bg-red-500 rounded-lg">40</a></li>
            <li><a href="#" class="px-3 py-1 bg-gray-200 hover:bg-red-500 rounded-lg"> <i class="fa-solid fa-chevron-right "></i></a></li>
        </ul>
    </nav>
</div>

@endsection