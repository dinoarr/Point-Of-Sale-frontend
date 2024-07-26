@extends('layouts.master')

@section('content')


<div class="flex justify-end mb-4 mt-10">
    <a href="#" class="bg-red-600 text-white px-4 font-medium text-base py-2 rounded-lg drop-shadow-lg"  data-modal-target="add" data-modal-toggle="add">Add Brand</a>
</div>

<div class="overflow-x-auto bg-white rounded-lg shadow-lg">
    <table class="min-w-full leading-normal">
        <thead>
            <tr class="bg-[#272626] text-white">
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold tracking-wider">No</th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold tracking-wider">Brand Name</th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold tracking-wider">Tools</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200">
                <td class="px-5 py-5 bg-white text-sm">Data</td>
                <td class="px-5 py-5 bg-white text-sm">Data</td>
                <td class="px-5 py-5  bg-white text-sm flex space-x-2 items-center">
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
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-[#272626] rounded-2xl shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-center p-1 md:p-0 rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-white mt-5">
                      Add New Brand
                    </h3>
                   
                </div>
                <!-- Modal body -->
                <form class="p-2 md:p-5">
                    <hr class="mb-3">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center mx-auto w-32 h-32 border-2 border-gray-300 border-collapse rounded-lg cursor-pointer bg-[#3D4142] hover:bg-gray-700">
                                <div id="file-info" class="flex flex-col items-center justify-center">
                                    <img id="preview-image" width="80" height="80" src="https://static-00.iconduck.com/assets.00/no-image-icon-512x512-lfoanl0w.png" alt="Uploaded Image">
                                    <p class="mb-2 text-xs text-gray-500 dark:text-gray-400"><span class="font-light">Add Brand Image</span></p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" accept="image/*" />
                            </label>
                            </div>  
                        <div class="col-span-2 text-white font-semibold">
                            <h2>Brand Details</h2>
                        </div>                      
                        <div class="col-span-2 sm:col-span-1">
                            <label for="brand_id" class="block mb-2 text-sm font-normal text-white">Brand ID</label>
                            <input type="text" name="brand_id" id="brand_id" class="bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full p-2.5" placeholder="Brand ID" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="brand_name" class="block mb-2 text-sm font-normal text-white">Brand Name</label>
                            <input type="text" name="brand_name" id="brand_name" class="bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full p-2.5" placeholder="Brand Name" required="">
                        </div>
                      </div>
                      <hr class="mb-7">
                      <div class="col-span-2 mb-2 text-center">
                      <button type="button" class="text-white bg-transparent hover:bg-red-700 text-sm px-5 py-2.5 rounded-lg ms-auto inline-flex justify-center items-center " data-modal-toggle="add">
                        Cancel
                          <span class="sr-only">Close modal</span>
                      </button>
                      <button type="submit" class="text-white inline-flex  justify-end items-center bg-[#EB2929] hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Add Brand
                     </button>
                      </div>
                  </div>
                </form>
            </div>
        </div>
<!--modal add end-->


<!--modal edit-->
<div id="edit" tabindex="-1"  aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-[#272626] rounded-2xl shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-center p-1 md:p-0 rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-white mt-5">
                  Edit Brand
                </h3>
               
            </div>
            <!-- Modal body -->
            <form class="p-2 md:p-5">
                <hr class="mb-3">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center mx-auto w-32 h-32 border-2 border-gray-300 border-collapse rounded-lg cursor-pointer bg-[#3D4142] hover:bg-gray-700">
                            <div id="file-info" class="flex flex-col items-center justify-center">
                                <img id="preview-image" width="80" height="80" src="https://static-00.iconduck.com/assets.00/no-image-icon-512x512-lfoanl0w.png" alt="Uploaded Image">
                                <p class="mb-2 text-xs text-gray-500 dark:text-gray-400 text-center"><span class="font-light">Change Brand Image</span></p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" accept="image/*" />
                        </label>
                        </div>  
                    <div class="col-span-2 text-white font-semibold">
                        <h2>Brand Details</h2>
                    </div>                      
                    <div class="col-span-2 sm:col-span-1">
                        <label for="brand_id" class="block mb-2 text-sm font-normal text-white">Brand ID</label>
                        <input type="text" name="brand_id" id="brand_id" class="bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full p-2.5" placeholder="Brand ID" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="brand_name" class="block mb-2 text-sm font-normal text-white">Brand Name</label>
                        <input type="text" name="brand_name" id="brand_name" class="bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full p-2.5" placeholder="Brand Name" required="">
                    </div>
                  </div>
                  <hr class="mb-7">
                  <div class="col-span-2 mb-2 text-center">
                  <button type="button" class="text-white bg-transparent hover:bg-red-700 text-sm px-5 py-2.5 rounded-lg ms-auto inline-flex justify-center items-center " data-modal-toggle="edit">
                    Cancel
                      <span class="sr-only">Close modal</span>
                  </button>
                  <button type="submit" class="text-white inline-flex  justify-end items-center bg-[#EB2929] hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Add Brand
                 </button>
                  </div>
              </div>
            </form>
        </div>
    </div>
<!--modal edit end-->

        <script>
            document.getElementById('dropzone-file').addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
    
                    reader.onload = function(e) {
                        document.getElementById('preview-image').src = e.target.result;
                    }
    
                    reader.readAsDataURL(file);
    
                    document.getElementById('file-name').innerText = `File: ${file.name}`;
                }
            });
        </script>
    
@endsection