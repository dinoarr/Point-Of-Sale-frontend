@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="bg-[#F5f5f5] w-[427px] h-[394px] p-6 rounded-lg border-[0.79px] border-[#c4c4c4]">
        <div class="text-center mb-6">
            <h2 class="font-semibold text-3xl leading-10">Lupa Kata Sandi</h2>
        </div>
        <div class="space-y-6">
            <p class="text-center text-base font-normal">Masukan Email atau No.Handphone untuk membuat kata sandi baru</p>
            <input type="text" name="email or phone number" id="email or phone number" placeholder="Email atau No.Handphone" class="w-full p-3 border[#c4c4c4] border-[0.6px] rounded-xl focus:outline-none focus:ring-2 focus:ring-slate-400">
            <button class="w-full h-[48px] bg-[#eb2929] text-white py-[8px] px-[24px] rounded-xl hover:bg-red-500 -tracking-tighter">Kirim</button>
            <a href="{{ url('/') }}" class="block text-center mx-auto text-sm font-normal -tracking-tighter">Kembali Ke <span class=" text-[#eb2929] font-semibold -tracking-normal">Login</span></a>
        </div>
    </div>
</div>
@endsection
