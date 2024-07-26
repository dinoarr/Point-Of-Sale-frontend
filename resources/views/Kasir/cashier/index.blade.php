@extends('layouts.sidebar')

@section('content')

<div class="flex justify-end mb-4 mt-10">
    <a href="#" class="bg-red-600 text-white px-4 font-medium text-base py-2 rounded-lg shadow-lg"  data-modal-target="add" data-modal-toggle="add">Add Product</a>
</div>
<div class="overflow-x-auto bg-white rounded-lg shadow-lg">
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
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold  tracking-wider">Tools</th>
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
                <td class="px-5 py-5  bg-white text-sm flex space-x-2 items-center">
                    <a href="#" class="text-blue-500 hover:text-blue-700 text-lg" data-modal-target="info" data-modal-toggle="info"><i class="fas fa-info-circle"></i></a>
                    <a href="#" class="text-green-500 hover:text-green-700 text-base" data-modal-target="edit" data-modal-toggle="edit"><i class="fas fa-pen"></i></a>
                    <a href="#" class="text-red-500 hover:text-red-700 text-lg"><i class="fas fa-trash-alt"></i></a>
                </td>           
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


<!--modal add-->
<div id="add" tabindex="-1"  aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-5 w-full max-w-md max-h-full">
        <div class="relative bg-[#272626]  rounded-2xl shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-2 md:p-5 rounded-t border-gray-600">
                <h3 class="text-lg font-semibold text-white">
                   Add Transaction
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="add">
                  <i class="fa-solid fa-x"></i>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-2 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="product" class="block mb-2 text-sm font-normal text-white">Product</label>
                            <input type="text" name="product" id="product" class="bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full p-2.5" placeholder="product" readonly>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="brand" class="block mb-2 text-sm font-normal text-white">Brand</label>
                            <input type="text" name="brand" id="brand" class="bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full p-2.5" placeholder="brand" readonly>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                          <label for="category" class="block mb-2 text-sm font-normal text-white">Category</label>
                          <input type="text" name="category" id="category" class="bg-[#3D4142] text-white text-sm focus:ring-slate-400 rounded-lg border-none block w-full p-2.5" placeholder="category" readonly>
                      </div>
                        <div class="col-span-2 sm:col-span-1">
                          <label for="price" class="block mb-2 text-sm font-normal text-white">Unit Price</label>
                          <input type="text" name="price" id="price" class="bg-[#3D4142] text-white text-sm focus:ring-slate-400 rounded-lg border-none block w-full p-2.5" placeholder="price" readonly>
                       </div>
                       <div class="col-span-2 sm:col-span-1">
                        <label for="qty" class="block mb-2 text-sm font-normal text-white">Quantity</label>
                        <input type="number" name="qty" id="qty" class="bg-[#3D4142] text-white text-sm focus:ring-slate-400 rounded-lg border-none block w-full p-2.5" placeholder="Quantity" required>
                     </div>
                       <div class="col-span-2">
                          <label for="total" class="block mb-2 text-sm font-normal text-white">Total</label>
                          <textarea name="total" id="total" class="resize-none bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full  p-2.5" placeholder="Total" required=""></textarea>
                       </div>
                       <div class="col-span-2 flex justify-end">
                       <button type="submit" class="text-white  bg-[#EB2929] hover:bg-red-700 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                         Save
                      </button>
                       </div>
                      </div>
                  </div>
        </form>
   </div>
</div>
<!--modal add end--> 

@endsection