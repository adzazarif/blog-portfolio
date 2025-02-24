@extends('app')

@section('content')

<div class="w-full h-[300px] text-center pt-[150px] bg-dark">
    <h1 class="font-bold mx-36 text-[30px] text-white">asdhbahbdahb asdasdbah ahsbdhjsbdhj sbdhabasd asdjasndj ashdbsd{{ $project->title }}</h1>
    <p class="text-white ">{{ $project->slug }}</p>
</div>

<div class="w-full bg-[#242532] p-20">
    <div class="swiper w-full md:w-3/4 mx-auto mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('image/sertifikat/polinema.png') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('image/lomba/polinema.jpg') }}" alt="">
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="text-white mt-8">
        <h1 class="mb-3 text-[25px]">Deskripsi Project:</h1>
        {!! $project->description !!}
    </div>

</div>

@push('scripts')
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
@endpush

@include('components.footer')
@endsection