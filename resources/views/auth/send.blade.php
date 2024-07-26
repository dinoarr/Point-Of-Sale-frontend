@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="bg-[#F5f5f5] w-[427px] h-[304px] p-6 rounded-lg border-[0.79px] border-[#c4c4c4]">
        <div class="text-center mb-6">
            <h2 class="font-semibold text-3xl leading-10">Silahkan Cek Email Anda</h2>
        </div>
        <div class="space-y-6">
            <p class="text-center text-base font-normal">Tautan untuk membuat kata sandi baru telah terkirim</p>
            <button onclick="window.location.href='{{ url('/') }}'" class="w-full h-[48px] bg-[#eb2929] text-white py-[8px] px-[24px] rounded-xl hover:bg-red-500 -tracking-tighter">Kembali ke Login</button>
        </div>
    </div>
</div>
@endsection
