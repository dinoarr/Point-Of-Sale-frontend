@extends('layouts.master')

@section('content')

<div class="flex justify-end mb-4 mt-10">
    <a href="#" class="bg-red-600 text-white px-4 font-medium text-base py-2 rounded-lg shadow-lg" data-modal-target="add" data-modal-toggle="add" >Add User 
        <span>
        <i class="fa-solid fa-chevron-right"></i>
    </span> 
</a>
</div>

<div class="overflow-x-auto bg-white rounded-lg shadow-lg">
    <table class="min-w-full leading-normal">
        <thead>
            <tr class="bg-[#272626] text-white">
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold tracking-wider">No</th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold tracking-wider">Username</th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold tracking-wider">Email</th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold tracking-wider">Password</th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold tracking-wider">Role</th>
                <th class="px-5 py-3 border-b border-gray-200 text-left text-xs font-semibold tracking-wider">Tools</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200">
                <td class="px-5 py-5 bg-white text-sm">Data</td>
                <td class="px-5 py-5 bg-white text-sm">Data</td>
                <td class="px-5 py-5 bg-white text-sm">Data</td>
                <td class="px-5 py-5 bg-white text-sm">Data</td>
                <td class="px-5 py-5 bg-white text-sm">Data</td>
                <td class="px-5 py-5  bg-white text-sm flex space-x-2 items-center">
                    <a href="#" class="text-blue-500 hover:text-blue-700 text-lg" data-modal-target="info" data-modal-toggle="info"><i class="fas fa-info-circle"></i></a>
                    <a href="#" class="text-green-500 hover:text-green-700 text-base" 
                    data-modal-target="edit" data-modal-toggle="edit"><i class="fas fa-pen"></i></a>
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

  

<!--modal info-->
  <div id="info" tabindex="-1"  aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-md max-h-full">
          <div class="relative bg-[#272626] rounded-2xl shadow">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-2 md:p-5 rounded-t border-gray-600">
                  <h3 class="text-lg font-semibold text-white">
                     Product detail
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="info">
                    <i class="fa-solid fa-x"></i>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <form class="p-2 md:p-5">
                  <hr class="mb-3">
                  <div class="grid gap-4 mb-4 grid-cols-2">
                      <div class="col-span-2">
                        <img class="w-32 h-32 " src="https://static-00.iconduck.com/assets.00/no-image-icon-512x512-lfoanl0w.png" alt="image description">
                      </div>
                      <div class="col-span-2 sm:col-span-1">
                          <label for="username" class="block mb-2 text-sm font-normal text-white">Username</label>
                          <input type="text" name="username" id="username" class="bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full p-2.5" placeholder="Username" required="">
                      </div>
                      <div class="col-span-2 sm:col-span-1">
                          <label for="Email" class="block mb-2 text-sm font-normal text-white">Email</label>
                          <input type="email" name="email" id="email" class="bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full p-2.5" placeholder="Email" required="">
                      </div>
                      <div class="col-span-2 sm:col-span-1 relative">
                        <label for="Password" class="block mb-2 text-sm font-normal text-white">Password</label>
                        <input type="password" name="password" id="password" class="bg-[#3D4142] text-white text-sm focus:ring-slate-400 rounded-lg border-none block w-full p-2.5" placeholder="Password" required="">
                        <i id="toggle-password" class="fa fa-eye absolute right-3 top-10 cursor-pointer text-white"></i>
                    </div>
                      <div class="col-span-2 sm:col-span-1">
                        <label for="role" class="block mb-2 text-sm font-normal text-white">Role</label>
                        <select id="role" class="bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full p-2.5">
                          <option selected disabled hidden>Select Role</option>
                          <option value="">Admin</option>
                          <option value="">Kasir</option>
                      </select>
                     </div>
                     <div class="col-span-2">
                        <label for="price" class="block mb-2 text-sm font-normal text-white">Address</label>
                        <textarea name="price" id="price" class="bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full p-2.5" placeholder="Unit Price" required=""></textarea>
                     </div>
                    </div>
                </div>
              </form>
          </div>
      </div>
<!--modal info end-->



<!--modal add-->
<div id="add" tabindex="-1"  aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-5 w-full max-w-md max-h-full">
        <div class="relative bg-[#272626]  rounded-2xl shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-2 md:p-5 rounded-t border-gray-600">
                <h3 class="text-lg font-semibold text-white">
                   Add User 
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
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-32 h-32 border-2 border-gray-300 border-collapse rounded-lg cursor-pointer bg-[#3D4142] hover:bg-gray-700">
                                <div id="file-info" class="flex flex-col items-center justify-center">
                                    <img id="preview-image" width="80" height="80" src="https://static-00.iconduck.com/assets.00/no-image-icon-512x512-lfoanl0w.png" alt="Uploaded Image">
                                    <p class="mb-2 text-xs text-gray-500 dark:text-gray-400"><span class="font-light">Add User Image</span></p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" accept="image/*" />
                            </label>
                            </div>  
                        <div class="col-span-2 sm:col-span-1">
                            <label for="username" class="block mb-2 text-sm font-normal text-white">Username</label>
                            <input type="text" name="username" id="username" class="bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full p-2.5" placeholder="Username" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="Email" class="block mb-2 text-sm font-normal text-white">Email</label>
                            <input type="email" name="email" id="email" class="bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full p-2.5" placeholder="Email" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1 relative">
                          <label for="Password" class="block mb-2 text-sm font-normal text-white">Password</label>
                          <input type="password" name="password" id="password" class="bg-[#3D4142] text-white text-sm focus:ring-slate-400 rounded-lg border-none block w-full p-2.5" placeholder="Password" required="">
                          <i id="toggle-password" class="fa fa-eye absolute right-3 top-10 cursor-pointer text-white"></i>
                      </div>
                        <div class="col-span-2 sm:col-span-1">
                          <label for="role" class="block mb-2 text-sm font-normal text-white">Role</label>
                          <select id="role" class="bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full p-2.5">
                            <option selected disabled hidden>Select Role</option>
                            <option value="">Admin</option>
                            <option value="">Kasir</option>
                        </select>
                       </div>
                       <div class="col-span-2">
                          <label for="price" class="block mb-2 text-sm font-normal text-white">Address</label>
                          <textarea name="price" id="price" class="resize-none bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full  p-2.5" placeholder="Unit Price" required=""></textarea>
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




<!--modal edit-->
<div id="edit" tabindex="-1"  aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-5 w-full max-w-md max-h-full">
        <div class="relative bg-[#272626]  rounded-2xl shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-2 md:p-5 rounded-t border-gray-600">
                <h3 class="text-lg font-semibold text-white">
                   Edit User 
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="edit">
                  <i class="fa-solid fa-x"></i>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-2 md:p-5">
                     <div class="grid gap-4 mb-4 grid-cols-2">
                         <div class="col-span-2">
                             <label for="dropzone-file" class="flex flex-col items-center justify-center w-32 h-32 border-2 border-gray-300 border-collapse rounded-lg cursor-pointer bg-[#3D4142] hover:bg-gray-700">
                                 <div id="file-info" class="flex flex-col items-center justify-center">
                                     <img id="preview-image" width="80" height="80" src="https://static-00.iconduck.com/assets.00/no-image-icon-512x512-lfoanl0w.png" alt="Uploaded Image">
                                     <p class="mb-2 text-xs text-gray-500 dark:text-gray-400"><span class="font-light">Edit User Image</span></p>
                                 </div>
                                 <input id="dropzone-file" type="file" class="hidden" accept="image/*" />
                             </label>
                             </div>  
                         <div class="col-span-2 sm:col-span-1">
                             <label for="username" class="block mb-2 text-sm font-normal text-white">Username</label>
                             <input type="text" name="username" id="username" class="bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full p-2.5" placeholder="Username" required="">
                         </div>
                         <div class="col-span-2 sm:col-span-1">
                             <label for="Email" class="block mb-2 text-sm font-normal text-white">Email</label>
                             <input type="email" name="email" id="email" class="bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full p-2.5" placeholder="Email" required="">
                         </div>
                         <div class="col-span-2 sm:col-span-1 relative">
                           <label for="Password" class="block mb-2 text-sm font-normal text-white">Password</label>
                           <input type="password" name="password" id="password" class="bg-[#3D4142] text-white text-sm focus:ring-slate-400 rounded-lg border-none block w-full p-2.5" placeholder="Password" required="">
                           <i id="toggle-password" class="fa fa-eye absolute right-3 top-10 cursor-pointer text-white"></i>
                       </div>
                         <div class="col-span-2 sm:col-span-1">
                           <label for="role" class="block mb-2 text-sm font-normal text-white">Role</label>
                           <select id="role" class="bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full p-2.5">
                             <option selected disabled hidden>Select Role</option>
                             <option value="">Admin</option>
                             <option value="">Kasir</option>
                         </select>
                        </div>
                        <div class="col-span-2">
                           <label for="price" class="block mb-2 text-sm font-normal text-white">Address</label>
                           <textarea name="price" id="price" class="resize-none bg-[#3D4142]  text-white text-sm focus:ring-slate-400 rounded-lg  border-none block w-full  p-2.5" placeholder="Unit Price" required=""></textarea>
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
 <!--offcanvas edit end-->




<!--script tampil gambar-->
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


<!--script password-->
<script>
document.getElementById('toggle-password').addEventListener('click', function() {
    var passwordInput = document.getElementById('password');
    var icon = this;
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
});
</script>
    
@endsection