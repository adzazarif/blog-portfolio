@extends('admin.template')
@section('content')
<div class="flex gap-4 mb-4">
    <div class="flex justify-between w-[760px] p-5 h-40 rounded bg-white">
        <div>
            <p class="text font-bold text-[25px]">Selamat Datang Adza Zarif Nur Iskandar</p>
            <p class="text text-[13px]">"Rasa ingin tahu adalah akar dari setiap keterampilan. Saat kita bertanya, belajar, dan mengeksplorasi, kemampuan kita tumbuh. Setiap keterampilan dimulai dari keinginan untuk tahu lebih banyak, untuk memahami lebih dalam."</p>
        </div>
        <img src="{{ asset('image/icon_dashboard.png') }}" alt="">
    </div>

    <div class="flex items-center justify-center h-40 w-80 rounded bg-gray-50 dark:bg-gray-800">
       
    </div>
 </div>
 <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
    <p class="text-2xl text-gray-400 dark:text-gray-500">
       <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
       </svg>
    </p>
 </div>



 @endsection