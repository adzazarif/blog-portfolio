@extends('app')

@section('content')

<div class="w-full h-[300px] text-center pt-[150px] bg-dark">
    <h1 class="font-bold mx-36 text-[30px] text-white">{{ $project->title }}</h1>
    <p class="text-white ">{{ $project->slug }}</p>
</div>

<div class="w-full bg-[#242532] p-20">
    <div class="swiper w-full md:w-3/4 mx-auto mySwiper">
        <div class="swiper-wrapper">
            @php
            $images = explode(',', $project->image);
        @endphp
            @for ($i = 0; $i < count($images); $i++)
            <div class="swiper-slide">
                <img src="{{ asset("images-project/$images[$i]") }}" alt="">
            </div>
            @endfor
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="text-white mt-8">
        <h1 class="mb-3 text-[25px]">Deskripsi Project:</h1>
        {!! $project->description !!}

        <h1 class="mb-3 mt-5 text-[25px]">Tech</h1>
        <div class="flex gap-5">
            @foreach ($project->assignTool as $assign)
                <div class="border rounded-[20px] p-3">
                    <p>{!! $assign->tool->image !!}  {{ $assign->tool->name }}</p>
                </div>
                @endforeach
        </div>
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