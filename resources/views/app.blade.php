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
    <div class="w-full h-[100vh] bg-dark z-50 fixed inset-0 flex justify-center items-center" id="loader">
        <img src="{{ asset('image/bg-tp.png') }}" class="absolute animate-bounce top-[-100px] right-0" alt="">
        <img src="{{ asset('image/bg-tp.png') }}" class="absolute animate-bounce bottom-0 left-[-170px]" alt="">
        <div class="loader-text m-0 md:m-8">

        </div>
    </div>

    <div id="playButton" class="fixed bottom-7 left-7 z-40 bg-[#242532] flex items-center justify-center rounded-[20px]  shadow-md shadow-slate-600 border border-slate-600 w-[100px] h-[50px] cursor-pointer">
        <p id="playText" class="text-white"><i class="fa-solid fa-play"></i> Play</p>
    </div>
    <div id="upButton" class="opacity-0 duration-300 fixed bottom-7 z-40 right-0 left-0 m-auto flex items-center justify-center rounded-full border shadow-md shadow-slate-600 border-slate-600 w-[50px] h-[50px] cursor-pointer bg-gray-800">
        <p class="text-white"><i class="fa-solid fa-upload"></i></p>
    </div>
    <div class="fixed bottom-7 right-7 z-40 bg-[#242532] flex items-center justify-center rounded-full  shadow-md shadow-slate-600 border border-slate-600 w-[50px] h-[50px] cursor-pointer">
        <a href="https://wa.me/6285942972801" target="_blank" class="text-white text-[25px]"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
    <audio id="audio" autoplay loop>
        <source src="{{ asset('bs.mp3') }}" type="audio/mpeg">
      </audio>



    @include('components.navbar')


    @yield('content')
    <script>
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
    </script>
    <script>
        let audio = document.getElementById('audio');
        let playButton = document.getElementById('playButton');
        let playText = document.getElementById('playText');
    
        playButton.addEventListener('click', function() {
            if (audio.paused) {
                audio.play().then(() => {
                    playText.innerHTML = "<i class='fa-solid fa-circle-pause'></i> Pause"; // Ubah teks jadi "Pause"
                }).catch(error => console.log('Autoplay gagal:', error));
            } else {
                audio.pause();
                playText.innerHTML = "<i class='fa-solid fa-play'></i> Play"; // Ubah teks jadi "Play"
            }
        });

        let upButton = document.getElementById("upButton");

// Event saat scroll
window.addEventListener("scroll", function () {
    if (window.scrollY > 200) {
        upButton.classList.remove("opacity-0"); 
        upButton.classList.add("opacity-100"); 
    } else {
        upButton.classList.remove("opacity-100"); 
        upButton.classList.add("opacity-0"); 
    }
});

// Event klik untuk kembali ke atas dengan efek smooth scroll
upButton.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
});
    </script>
     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    @vite('resources/js/app.js')
    @stack('scripts')
    
</body>

</html>