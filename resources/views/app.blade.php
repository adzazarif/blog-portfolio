<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta title="Portfolio Adza Zarif">
    <title>Adza Zarif</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body class="overflow-x-hidden">
    {{-- <div class="w-full h-[100vh] bg-dark z-50 fixed inset-0 flex justify-center items-center" id="loader">
        <img src="{{ asset('image/bg-tp.png') }}" class="absolute animate-bounce top-[-100px] right-0" alt="">
        <img src="{{ asset('image/bg-tp.png') }}" class="absolute animate-bounce bottom-0 left-[-170px]" alt="">
        <div class="loader-text m-0 md:m-8">

        </div>
    </div> --}}

    @include('components.navbar')

    @yield('content')

    {{-- <script>
        const loaderTextWraper = document.querySelector('.loader-text');
        const loaderText = ['A', 'D', 'Z', 'A', '-', 'Z', 'A', 'R', 'I', 'F'];
        let delay = 0;
        if (loaderTextWraper) {
            for (let i = 0; i < loaderText.length; i++) {
                delay += 150;
                const span = document.createElement('span');
                span.textContent = loaderText[i];
                span.style.animationDelay = delay + 'ms';
                loaderTextWraper.append(span);
            }
            setTimeout(() => {
                const loader = document.querySelector('#loader');
                loader.remove();
            }, 2000);
        }
    </script> --}}
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    @vite('resources/js/app.js')
    @stack('scripts')
    
</body>

</html>