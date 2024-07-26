@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="bg-[#F5f5f5] w-[427px] h-auto p-6 rounded-lg border-[0.79px] border-[#c4c4c4]">
        <div class="text-center mb-6">
            <h2 class="font-semibold text-3xl leading-10">Kata Sandi Baru</h2>
        </div>
        <div class="space-y-6">
            <p class="text-center text-base font-normal">Silahkan masukkan kata sandi baru anda</p>
            <div class="relative">
                <input type="password" name="password" id="password" placeholder="Kata sandi baru" class="w-full p-3 border-[#c4c4c4] border-[0.6px] rounded-xl focus:outline-none focus:ring-2 focus:ring-slate-400">
                <span class="absolute inset-y-0 right-3 flex items-center">
                    <i class="far fa-eye cursor-pointer" id="togglePassword" onclick="togglePasswordVisibility('password')"></i>
                </span>
            </div>
            <div class="relative">
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi kata sandi baru" class="w-full p-3 border-[#c4c4c4] border-[0.6px] rounded-xl focus:outline-none focus:ring-2 focus:ring-slate-400">
                <span class="absolute inset-y-0 right-3 flex items-center">
                    <i class="far fa-eye cursor-pointer" id="togglePasswordConfirmation" onclick="togglePasswordVisibility('password_confirmation')"></i>
                </span>
            </div>  
            <button class="w-full h-[48px] bg-[#eb2929] text-white py-[8px] px-[24px] rounded-xl hover:bg-red-500 -tracking-tighter">Ganti</button>
            <a href="{{ url('/') }}" class="block text-center mx-auto text-sm font-normal -tracking-tighter">Kembali Ke <span class=" text-[#eb2929] font-semibold -tracking-normal">Login</span></a>
        </div>
    </div>
</div>

<script>
    function togglePasswordVisibility(id) {
        const input = document.getElementById(id);
        const icon = input.nextElementSibling.querySelector('i');
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>
@endsection
