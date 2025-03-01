@extends('app')
@section('content')

   <section id="home">
        <div
            class="flex items-center relative gap-5 w-100 py-52 px-5 md:px-24 justify-between bg-dark flex-col md:flex-row ">
            <img src="{{ asset('image/bg-tp.png') }}" class="absolute top-[-100px] animate-bounce-slow right-0" alt="">
            <img src="{{ asset('image/bg-tp.png') }}" class="absolute animate-pulse bottom-0 left-[-170px]" alt="">
            <div data-aos="fade-up-right" data-aos-delay="2000" data-aos-once="true" class="z-30">
                <h1 class="text-[45px] text-white font-bold md:w-[500px]">Adza Zarif Nur Iskandar.</h1>
                <div class="w-12 my-10 h-[5px] bg-yellow"></div>
                <div class="flex gap-5">
                    <a target="_blank" href="https://www.instagram.com/adzazarifnur/"><i class="text-[35px] text-white fa-brands fa-instagram hover:text-yellow hover:animate-bounce"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/in/adzazarif/"><i class="text-[35px] text-white fa-brands fa-linkedin hover:text-yellow hover:animate-bounce"></i></a>
                    <a target="_blank" href="https://github.com/Adzazarif"><i class="text-[35px] text-white fa-brands fa-github hover:text-yellow hover:animate-bounce"></i></a>
                    
                </div>
            </div>
            <div class="text-white z-30" data-aos="fade-up-left" data-aos-delay="2000" data-aos-once="true">
                <p class="text-[22px]">- Introduction</p>
                <p class="text-[28px] font-bold md:w-[500px] mt-5">Software Developer, IoT Enginer, AI Enginer.</p>
                <p class="text-[17px] md:w-[500px] mt-3">Mampu membuat aplikasi untuk kebutuhan dan fungsionalitas
                    pengguna
                    untuk meningkatkan produktifitas.</p>
                <a class="text-[17px] mt-3 inline-block text-yellow" href="#about">Lebih lengkap -></a>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="bg-[#242532] py-12">
            <div class="flex bg-[#242532] items-center justify-center">
                <span data-aos="zoom-in" data-aos-delay="2000" data-aos-once="true" class="w-64 h-[2px] bg-white"></span>
                <div data-aos="zoom-in" data-aos-delay="2000" data-aos-once="true" class="bg-[#242532] text-center p-5">
                    <h1 class="text-[45px] font-bold text-white">About Me</h1>
                    <p class="text-white mx-auto text-[17px] md:w-[700px]">Berikut adalah tentang diri saya mulai dari
                        profil, skill, pengalaman yang saya miliki</p>
                </div>
                <span data-aos="zoom-in" data-aos-delay="2000" data-aos-once="true" class="w-64 h-[2px] bg-white"></span>
            </div>
            <div class="flex gap-7 md:mx-24 p-7 flex-col md:flex-row rounded-[20px] shadow-lg shadow-gray-800 bg-[#090C11]"
                data-aos="zoom-in" data-aos-delay="2000" data-aos-once="true">
                <div class="md:w-1/3 pr-7 border-r-2">
                    <div class="flex items-center ">
                        <i class="fa-solid text-[32px] text-yellow fa-folder-open"></i>
                        <p class="text-white text-[20px] ml-3">About Me</p>
                    </div>

                    <div id="btnAboutme" class="flex items-center ms-3 my-5 hover:cursor-pointer rounded p-2">
                        <p class="text-white text-[20px] mr-3">></p>
                        <img src="{{ asset('image/logo/js.png') }}" class="w-[33px]" alt="">
                        <p class="text-white text-[20px] ml-3">index.js</p>
                    </div>
                    <div id="btnPengalaman" class="flex items-center ms-3 my-5 hover:cursor-pointer rounded p-2">
                        <p class="text-white text-[20px] mr-3">></p>
                        {{-- <img src="{{ asset('image/logo/js.png') }}" class="w-[33px]" alt=""> --}}
                        <i class="fa-solid fa-image text-white text-[32px]"></i>
                        <p class="text-white text-[20px] ml-3">pengalaman.jpg</p>
                    </div>
                    <div id="btnSkill" class="flex items-center ms-3 my-5 hover:cursor-pointer rounded p-2">
                        <p class="text-white text-[20px] mr-3">></p>
                        <img src="{{ asset('image/logo/js.png') }}" class="w-[33px]" alt="">
                        <p class="text-white text-[20px] ml-3">skill.js</p>
                    </div>

                </div>
                <div class="w-2/3">
                    <div class="flex justify-between">
                        <div class="flex items-center gap-3 mb-7">
                            <div class="w-[20px] h-[20px] rounded-full bg-[#ED6A5D]"></div>
                            <div class="w-[20px] h-[20px] rounded-full bg-[#F5C04F]"></div>
                            <div class="w-[20px] h-[20px] rounded-full bg-[#61C654]"></div>
                        </div>
                        <p id="lblFile" class="text-white text-[17px]"></p>
                    </div>
                    <div id="aboutme">
                        <p class="text-white mb-3"><span class="text-yellow">const </span>nama = “Adza Zarif Nur
                            Iskandar”;</p>
                        <p class="text-white mb-3"><span class="text-yellow">const </span>ttl = “Blitar, 14 Februari
                            2003”;</p>
                        <p class="text-white mb-3"><span class="text-yellow">const </span>jenisKelamin = “laki -
                            laki”;
                        </p>
                        <p class="text-white mb-3"><span class="text-yellow">var </span>hobi =
                            [“traveling”,”membaca”,”bermain game”];</p>
                        <p class="text-white mb-3"><span class="text-yellow">var </span>deskripsi = “Saya adalah
                            seorang Software Developer dengan pengalaman 3+ tahun di bidang IT. dan saya merupakan
                            mahasiswa Teknologi Informasi di Politeknik Negeri Jember. Kecintaan saya pada
                            perangkat lunak menjadi bahan bakar semangat untuk terus belajar dan berkembang. Saya
                            menyukai pemrograman, bepergian, dan fotografi. Selain itu, saya suka mencoba hal-hal baru,
                            yang membuat saya terus memperluas wawasan dan keterampilan. Saya juga memiliki bakat di
                            bidang perangkat lunak, perangkat keras, serta kecerdasan buatan (AI).”;</p>
                    </div>
                    <div id="skill">
                        <p class="text-white mb-3"><span class="text-yellow">var </span>front-end = ["html", "css",
                            "js","tailwind", "jquery", "react"];</p>
                        <p class="text-white mb-3"><span class="text-yellow">var </span>back-end =
                            ["php","nodejs","laravel","java", "python","c++"];</p>
                        <p class="text-white mb-3"><span class="text-yellow">var </span>database =
                            ["mysql","mongodb"];</p>
                        <p class="text-white mb-3"><span class="text-yellow">var </span>tool =
                            ["git","github","figma", "dbdiagram", "visual studio code" ,"arduino"];</p>
                    </div>
                    <div id="pengalaman">
                        <div
                            class="flex flex-col items-center w-[350px] md:w-full space-y-8 bg-gradient-to-b from-gray-900 to-gray-800 text-white md:py-12 md:px-6">
                            <!-- Timeline Container -->
                            <div class="relative w-full max-w-xl">
                                <!-- Timeline Line -->
                                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gray-600"></div>

                                <!-- Timeline Item -->
                                <div class="relative flex items-center space-x-6">
                                    <!-- Circle Indicator -->
                                    <div
                                        class="absolute left-1/2 transform -translate-x-1/2 bg-white h-4 w-4 rounded-full border-4 border-gray-900">
                                    </div>
                                    <!-- Content Left -->
                                    <div class="w-1/2 text-right pr-6">
                                        <h3 class="font-bold text-lg">Fullstack Web Developer</h3>
                                        <p class="text-sm text-gray-400">Upylon/Proform (2024 - Now)</p>
                                        <p class="text-sm">Mengembangkan bisnis jasa software development bersama tim
                                            berpengalaman</p>
                                    </div>
                                    <!-- Empty Right -->
                                    <div class="w-1/2"></div>
                                </div>

                                <!-- Timeline Item -->
                                <div class="relative flex items-center space-x-6 mt-12">
                                    <!-- Circle Indicator -->
                                    <div
                                        class="absolute left-1/2 transform -translate-x-1/2 bg-white h-4 w-4 rounded-full border-4 border-gray-900">
                                    </div>
                                    <!-- Empty Left -->
                                    <div class="w-1/2"></div>
                                    <!-- Content Right -->
                                    <div class="w-1/2 text-left pl-6">
                                        <h3 class="font-bold text-lg">Fullstack Web Developer</h3>
                                        <p class="text-sm text-gray-400">Thalassa Blue (2024 - Now)</p>
                                        <p class="text-sm">Membuat aplilasi pemesanan boat dan trip untuk perusahaan
                                            Thalassa Blue</p>
                                    </div>
                                </div>

                                <!-- Timeline Item -->
                                <div class="relative flex items-center space-x-6 mt-12">
                                    <!-- Circle Indicator -->
                                    <div
                                        class="absolute left-1/2 transform -translate-x-1/2 bg-white h-4 w-4 rounded-full border-4 border-gray-900">
                                    </div>
                                    <!-- Content Left -->

                                    <div class="w-1/2 text-right pr-6">
                                        <h3 class="font-bold text-lg">Front End Web Developer</h3>
                                        <p class="text-sm text-gray-400">Kilau Sri Purnama (2022)</p>
                                        <p class="text-sm">Membuat website portfolio yang bergerak di bidang
                                            transportasi perusahaan Kilau Sri Purnama</p>
                                    </div>
                                    <!-- Empty Right -->
                                    <div class="w-1/2"></div>
                                </div>

                                <!-- Timeline Item -->
                                <div class="relative flex items-center space-x-6 mt-12">
                                    <!-- Circle Indicator -->
                                    <div
                                        class="absolute left-1/2 transform -translate-x-1/2 bg-white h-4 w-4 rounded-full border-4 border-gray-900">
                                    </div>
                                    <!-- Empty Left -->
                                    <div class="w-1/2"></div>
                                    <!-- Content Right -->
                                    <div class="w-1/2 text-left pl-6">
                                        <h3 class="font-bold text-lg">Front End Web Developer</h3>
                                        <p class="text-sm text-gray-400">Akasha Shatya Wibawa (2021)</p>
                                        <p class="text-sm">Membuat website portfolio perusahaan Akasha Shatya Wibawa
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="achievements">
        <div class="bg-dark py-12">
            <div class="flex mb-5 bg-dark items-center justify-center">
                <span data-aos="zoom-in" data-aos-once="true" data-aos-offset="-500"
                    class="w-64 h-[2px] bg-white"></span>
                <div data-aos="zoom-in" data-aos-once="true" data-aos-offset="-500" class="bg-dark text-center p-5">
                    <h1 class="text-[45px] font-bold text-white">My Achievements
                    </h1>
                    <p class="text-white mx-auto text-[17px] md:w-[700px]">Penghargaan yang saya miliki ketika
                        mengikuti
                        lomba lomba Nasional. dan beberapa Sertifikat yang saya miliki</p>
                </div>
                <span data-aos="zoom-in" data-aos-once="true" data-aos-offset="-500"
                    class="w-64 h-[2px] bg-white"></span>
            </div>

            <div class="text-center mb-7">
                <button type="button" class="text-white border border-white px-7 py-3 rounded-[20px] " id="btnPerlombaan">Perlombaan</button>
                <button type="button" class="text-white border border-white px-7 py-3 rounded-[20px]" id="btnSertifikat">Sertifikat</button>
            </div>
            

            <div class="flex flex-col px-5 gap-5 items-center justify-center" id="contentPerlombaan">
                <!-- Card Content -->
                <div data-aos="zoom-in" data-aos-once="true" data-aos-offset="-500"
                    class="relative pb-8 px-8 pt-28 md:w-[900px] w-full bg-[#242532] rounded-[20px]">
                    <div class="absolute top-[-3px] z-10 left-1/2 transform -translate-x-1/2 -translate-y-1/2]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 128 128">
                            <path fill="#176cc7"
                                d="M69.09 4.24c-1.08.96-9.48 17.63-9.48 17.63l-6.25 25.21l24.32-2.23S97.91 7.23 98.32 6.36c.73-1.58 1.12-2.23-1.67-2.23c-2.79-.01-26.55-.79-27.56.11" />
                            <path fill="#fcc417"
                                d="M81.68 43.29c-1.21-.65-36.85-1.21-37.69 0c-.76 1.1-.65 6.13-.28 6.78s12.35 6.22 12.35 6.22l-.01 2.03s.66 1.59 7.34 1.59s7.37-1.35 7.37-1.35l.06-2.05s10.49-5.24 11.04-5.7c.56-.47 1.03-6.87-.18-7.52M70.7 51.62s-.03-1.4-.72-1.75s-11.8-.29-12.74-.24s-.94 1.73-.94 1.73l-7.6-3.7v-.74l28.3.2l.05.84z" />
                            <path fill="#fdffff"
                                d="M59.26 51.17c-.94 0-1.48.98-1.48 2.67c0 1.58.54 2.91 1.73 2.81c.98-.08 1.32-1.58 1.23-2.91c-.09-1.58-.29-2.57-1.48-2.57" />
                            <path fill="#fcc417"
                                d="M28.98 90.72c0 23.96 21.66 34.63 36.06 34.12c15.88-.57 34.9-12.95 33.75-35.81C97.7 67.37 79.48 57.1 63.7 57.21c-18.34.13-34.72 12.58-34.72 33.51" />
                            <path fill="#fa912c"
                                d="M64.53 120.67c-.25 0-.51 0-.76-.01c-7.5-.25-14.91-3.41-20.33-8.66c-5.8-5.62-8.98-13.22-8.94-21.39c.09-19.95 17.53-29.2 29.36-29.2h.1c16.03.07 29.19 12.53 29.56 29.42c.16 7.52-2.92 15.41-8.96 21.35c-5.64 5.53-13.12 8.49-20.03 8.49m-.69-55.94c-10.61 0-26.3 8.68-26.34 25.88c-.03 12.86 9.93 26.08 26.52 26.64c6.32.2 12.83-2.22 18.09-7.39c5.46-5.37 8.53-12.29 8.42-18.99c-.24-14.53-12.12-26.09-26.54-26.15c-.04 0-.12.01-.15.01" />
                            <path fill="#fefffa"
                                d="M57.82 60.61c-.69-.95-8.51-.77-15.9 6.45c-7.13 6.97-7.9 13.54-6.53 13.92c1.55.43 3.44-6.53 9.97-12.38c6-5.36 13.84-6.1 12.46-7.99m30.25 25.87c-2.41.34.09 7.56-5.5 15.64c-4.85 7.01-10.35 9.55-9.71 11.09c.86 2.06 9.67-3.07 13.75-11.43c3.7-7.57 3.26-15.56 1.46-15.3" />
                            <path fill="#fa912c"
                                d="M55.85 77.02c-.52.77-.05 7.52.26 7.82c.6.6 5.16-1.55 5.16-1.55l-.17 18.05s-3.35-.04-3.7.09c-.69.26-.6 7.22-.09 7.56s14.18.52 14.7-.17s.39-6.78.15-7.06c-.43-.52-3.7-.31-3.7-.31s.28-26.58.19-27.43s-1.03-1.38-2.15-1.12s-10.32 3.62-10.65 4.12" />
                            <path fill="#2e9df4"
                                d="M25.51 3.72c-.63.58 23.46 43.48 23.46 43.48s4.04.52 13.06.6s13.49-.52 13.49-.52S56.79 4.15 55.67 3.72c-.55-.22-7.97-.3-15.22-.38c-7.26-.09-14.34-.18-14.94.38" />
                        </svg>
                    </div>

                    <h1 class="text-white text-[25px] text-center font-semibold">
                        1st Winner Governance Category - UM SDGs Hackathon National Competition 2024</h1>

                    <div class="flex gap-5 flex-col md:flex-row mt-5 justify-center">
                        <div class="swiper w-full md:w-1/2  mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('image/sertifikat/um.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('image/lomba/um.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <div class="w-full md:w-1/2">
                            <p class="text-white">Kompetisi ini terdiri dari bebrapa bagian, yaitu:</p>
                            <ul class="text-white">
                                <li>1. Membuat software yang mendukung keberhasilan SDGs dalam waktu 24 jam full</li>
                                <li>2. Membuat Sistem Pendukung Keputusan (SPK)</li>
                                <li>3. Membuat sistem donasi menggunakan payment gateway (menggunakan midtrans)</li>
                                <li>4. Server Side website (menggunakan laravel)</li>
                                <li>5. Frontend website (menggunakan tailwind, jquery)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in" data-aos-once="true" data-aos-offset="-500"
                    class="relative pb-8 px-8 pt-28 w-full md:w-[900px] bg-[#242532] rounded-[20px]">
                    <div class="absolute top-[-3px] z-10 left-1/2 transform -translate-x-1/2 -translate-y-1/2]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 128 128">
                            <path fill="#176cc7"
                                d="M69.09 4.24c-1.08.96-9.48 17.63-9.48 17.63l-6.25 25.21l24.32-2.23S97.91 7.23 98.32 6.36c.73-1.58 1.12-2.23-1.67-2.23c-2.79-.01-26.55-.79-27.56.11" />
                            <path fill="#f79429"
                                d="M81.68 43.29c-1.21-.65-36.85-1.21-37.69 0c-.76 1.1-.33 6.87-.04 7.56c.52 1.2 12.03 6.43 12.03 6.43l-.22 2.38s.94.24 7.63.24s8.01-.34 8.01-.34l.02-2.15s10.36-5.04 10.88-5.74c.44-.58.59-7.73-.62-8.38m-10.61 9.12s.33-1.47-.36-1.81c-.69-.35-12.53-.19-13.47-.14s-.94 1.73-.94 1.73l-7.46-3.84l-.14-1.43l28.3.2l-.1 1.35z" />
                            <path fill="#fdffff"
                                d="M59.26 51.89c-.94 0-1.48.98-1.48 2.67c0 1.58.54 2.91 1.73 2.81c.98-.08 1.32-1.58 1.23-2.91c-.09-1.59-.29-2.57-1.48-2.57" />
                            <path fill="#f79429"
                                d="M29.31 92.09c0 23.96 21.71 33.93 36.12 33.5c16.79-.5 34.85-13.24 33.36-36.1c-1.4-21.45-19.46-31.29-35.24-31.18c-18.34.14-34.24 12.85-34.24 33.78" />
                            <path fill="#d25116"
                                d="M64.67 121.97c-.25 0-.51 0-.76-.01c-7.5-.25-14.91-3.41-20.33-8.66c-5.8-5.62-8.98-13.22-8.94-21.39c.09-19.95 17.53-29.2 29.36-29.2h.1c16.03.07 29.19 12.53 29.56 29.42c.16 7.52-2.24 15-8.28 20.94c-5.64 5.52-13.8 8.9-20.71 8.9m-.69-55.94c-10.61 0-26.3 8.68-26.34 25.88c-.03 12.86 9.93 26.08 26.52 26.64c6.32.2 13.45-2.14 18.7-7.3c5.46-5.37 7.91-12.37 7.8-19.07c-.24-14.53-12.12-26.09-26.54-26.15c-.03-.02-.11 0-.14 0" />
                            <path fill="#fefffa"
                                d="M58.09 61.47c-.69-.95-7.76-.68-15.37 5.87c-7.56 6.51-8.69 13.71-7.33 14.09c1.55.43 3.44-6.53 9.97-12.38c6-5.35 14.1-5.69 12.73-7.58m30.39 26.17c-2.41.34.09 7.56-5.5 15.64c-4.85 7.01-10.35 9.55-9.71 11.09c.86 2.06 9.67-3.07 13.75-11.43c3.69-7.57 3.25-15.56 1.46-15.3" />
                            <path fill="#2e9df4"
                                d="M25.51 3.72c-.63.58 23.46 43.48 23.46 43.48s4.04.52 13.06.6s13.49-.52 13.49-.52S56.79 4.15 55.67 3.72c-.55-.22-7.97-.3-15.22-.38c-7.26-.09-14.34-.18-14.94.38" />
                            <path fill="#d25116"
                                d="M74.95 83.71c-1.16-10.05-12.86-10.89-17.71-7.03c-4.72 3.76-4.27 9-.96 9.61c2.61.48 3.29-1.59 4.05-2.54c1.72-2.13 4.46-2.33 6.25-.62c2.03 1.95.78 6.61-2.27 6.8c-2.27.14-3.42.02-3.71.41c-.41.55-.35 4.88.07 5.36c.48.55 2.4.21 4.05.27c2.27.09 4.68 3.45 3.09 5.97c-1.65 2.61-6.04 1.44-7.62-.14c-2.09-2.09-4.18-.89-4.88-.07c-1.1 1.3-2.27 4.26 1.79 7.14c4.05 2.88 16.34 3.43 18.82-5.49c2.16-7.79-2.88-10.99-2.88-10.99s2.57-2.95 1.91-8.68" />
                        </svg>
                    </div>

                    <h1 class="text-white text-[25px] text-center font-semibold">
                        3rd Winner Hackthon Software Development Category - National Competition Play IT</h1>

                    <div class="flex gap-5 mt-5 flex-col md:flex-row justify-center">
                        <div class="swiper w-full md:w-1/2 mySwiper">
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

                        <div class="w-full md:w-1/2">
                            <p class="text-white">Kompetisi ini terdiri dari bebrapa bagian, yaitu:</p>
                            <ul class="text-white">
                                <li>1. Membuat Generative AI dengan waktu 24 jam full</li>
                                <li>2. Membuat software untuk mendukung keberhasilan SDGs</li>
                                <li>3. Membuat model AI (menggunakan python)</li>
                                <li>4. Server Side python (menggunakan flask)</li>
                                <li>5. Server Side website (menggunakan laravel)</li>
                                <li>6. Frontend website (menggunakan tailwind, jquery, leaflet)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="contentSertifikat">

            <div class="flex flex-col md:flex-row px-5 gap-8 items-center justify-center" >
                <!-- Card Content -->
                   <div class="w-full md:w-[500px] mt-5 border border-slate-500 hover:border-white  p-5 bg-[#242532] rounded-[10px]  "
                    data-aos="zoom-in" data-aos-once="true" data-aos-offset="-700">
                    <h1 class="text-white text-[25px] mb-3 text-center font-semibold">Sertifikat BNSP Junior Web Developer</h1>
                    <img src="{{ asset('image/sertifikat/junior-web.jpeg') }}" alt="">
                    </div>
                    <div class="w-full md:w-[500px] mt-5 border border-slate-500 hover:border-white  p-5 bg-[#242532] rounded-[10px]  "
                    data-aos="zoom-in" data-aos-once="true" data-aos-offset="-700">
                    <h1 class="text-white text-[25px] mb-3 text-center font-semibold">Sertifikat BNSP Junior Cyber Security</h1>
                    <img src="{{ asset('image/sertifikat/junior-cyber.jpeg') }}" alt="">
                    </div>
            </div>

            <h1 class="text-white text-[25px] mt-7 text-center font-semibold">Sertifikat Dicoding</h1>
            <div class="flex flex-col md:flex-row px-5 gap-8 items-center justify-center">
                <div class="w-full md:w-[500px] mt-5 border border-slate-500 hover:border-white  p-5 bg-[#242532] rounded-[10px]  "
                data-aos="zoom-in" data-aos-once="true" data-aos-offset="-700">
                <img src="{{ asset('image/sertifikat/dicoding1.jpg') }}" alt="">
                </div>

                <div class="w-full md:w-[500px] mt-5 border border-slate-500 hover:border-white  p-5 bg-[#242532] rounded-[10px]  "
                data-aos="zoom-in" data-aos-once="true" data-aos-offset="-700">
                <img src="{{ asset('image/sertifikat/dicoding2.jpg') }}" alt="">
                </div>

                <div class="w-full md:w-[500px] mt-5 border border-slate-500 hover:border-white  p-5 bg-[#242532] rounded-[10px]  "
                data-aos="zoom-in" data-aos-once="true" data-aos-offset="-700">
                <img src="{{ asset('image/sertifikat/dicoding3.jpg') }}" alt="">
                </div>
            </div>

        </div>

        </div>
        </div>
    </section>


    <section id="project" class="bg-dark py-10">
        <div class="flex bg-dark items-center justify-center">
            <span data-aos="zoom-in" data-aos-once="true" data-aos-offset="-1200"
                class="w-64 h-[2px] bg-white"></span>
            <div data-aos="zoom-in" data-aos-once="true" data-aos-offset="-1200" class="bg-dark text-center p-5">
                <h1 class="text-[45px] font-bold text-white">My Project</h1>
                <p class="text-white mx-auto text-[17px] md:w-[700px]">Berikut project - project yang pernah saya buat
                    dengan berbagai platform seperti Web, IoT, Artifical Intelligence dan Desktop</p>
            </div>
            <span data-aos="zoom-in" data-aos-once="true" data-aos-offset="-1200"
                class="w-64 h-[2px] bg-white"></span>
        </div>

        <div class="flex justify-center px-5 flex-wrap md:gap-10 bg-dark">

            @foreach ($projects as $project)
                @php
                    $images = explode(',', $project->image);
                @endphp

                <div class="w-full md:w-[600px] flex flex-col md:flex-row gap-5 relative mt-5 border border-slate-500 hover:border-white duration-600 p-5 bg-[#242532] rounded-[10px]  "
                    data-aos="zoom-in" data-aos-once="true" data-aos-offset="-1500">
                    <div class="swiper w-full md:w-2/3 mySwiper">
                        <div class="swiper-wrapper">
                            @for ($i = 0; $i < count($images); $i++)
                                <div class="swiper-slide">
                                    <div class="relative ">
                                        <img class="hidden md:block" src=" {{ asset('image/laptop.png') }}"
                                            alt="">
                                        <div class="md:absolute z-10 top-4 left-[40px] w-full md:w-[228px] h-full">
                                            <img class="rounded" src=" {{ asset('images-project/' . $images[$i]) }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            @endfor


                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="w-full md:w-1/2">
                        <div class="flex flex-col justify-between h-full">
                            <div>
                                <h1 class="text-white text-[22px] font-semibold">{{ $project->title }}</h1>
                                <p class="text-slate-400 text-[15px]">{{ $project->slug }}</p>
                                <a href="{{ route('landing.detailProject', $project->id) }}"
                                    class="text-white mt-2 inline-block hover:text-yellow duration-300 text-[17px]">Detail
                                    -></a>
                            </div>
                            <div class="wrapper mt-5">

                                @foreach ($project->assignTool as $key => $t)
                                {{-- @dd($t) --}}
                                <div class="itemLeft w-[100px] item{{ $key+1 }}">
                                    <div class="border border-yellow rounded-[20px] p-2">
                                        <p class="text-yellow text-center text-[15px]"><i class="fa-brands fa-php"></i> {{ $t->tool->name }}</p>
                                    </div>
                                </div>
                            @endforeach
                                
                                <div class="itemLeft w-[100px] item6">
                                    <div class="border border-yellow rounded-[20px] p-2">
                                        <p class="text-yellow text-center text-[15px]"><i
                                                class="fa-solid fa-screwdriver-wrench"></i> JQuery</p>
                                    </div>
                                </div>
                                <div class="itemLeft w-[100px] item7">
                                    <div class="border border-yellow rounded-[20px] p-2">
                                        <p class="text-yellow text-center text-[15px]"><i
                                                class="fa-solid fa-screwdriver-wrench"></i> MySQL</p>
                                    </div>
                                </div>

                                <div class="itemLeft w-[100px] item8">
                                    <div class="border border-yellow rounded-[20px] p-2">
                                        <p class="text-yellow text-center text-[15px]"><i class="fa-brands fa-html5"></i> HTML</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <section id="blog" class="bg-dark">
        <img class="w-full" src="{{ asset('image/polygon3.png') }}" alt="">
        <div class="flex bg-[#242532] items-center justify-center">
            <span data-aos="zoom-in" data-aos-once="true" data-aos-offset="-1300"
                class="w-64 h-[2px] bg-white"></span>
            <div data-aos="zoom-in" data-aos-once="true" data-aos-offset="-1300"
                class="bg-[#242532] text-center p-5">
                <h1 class="text-[45px] font-bold text-white">Blogs</h1>
                <p class="text-white mx-auto text-[17px] md:w-[700px]">Terdapat catatan , pengalaman, pengembangan yang
                    saya tulis untuk menambah pengetahuan</p>
            </div>
            <span data-aos="zoom-in" data-aos-once="true" data-aos-offset="-1300"
                class="w-64 h-[2px] bg-white"></span>
        </div>

        <div class="flex flex-col md:flex-row gap-5 px-5 md:px-28 pt-10 pb-28 bg-[#242532]">
            <div class="md:w-2/3">
                <p class="text-white text-[25px] mb-3"><i class="mr-3 fa-solid fa-rocket"></i>Paling Populer</p>
                <div data-aos="zoom-in-up" data-aos-once="true" data-aos-offset="-1300"
                    class="p-5 w-full inline-block bg-dark rounded-[20px]">
                    <p class="text-yellow text-[15px] p-3 border rounded-[20px] inline-block border-yellow mb-3"><i class="fa-solid fa-pen-to-square"></i> Experience</p>
                    <img class="w-full rounded-[20px]" src="{{ asset('image/blog/lomba-malang.jpg') }}"
                        alt="">
                    <p class="text-white text-[25px] mt-5">Play IT Polinema National Competition 2024</p>
                    <p class="text-slate-300 mt-2 text-[15px]">Ini pengalaman saya ketika mengikuti lomba IT Polinema
                        National Competition 2024. Kali kedua mengikuti lomba yang berskala nasional. Lomba kali ini
                        saya
                        dengan tim cozifar team yang beranggotakan nico ,farhan, dan saya sendiri. Lomba yang saya ikuti
                        ini adalah kategori hackathon software development. Pertama tama saya membuat proposal terlebih
                        dahulu yang isinya menjelaskan sistem dari apliasi kami. setelah itu menunggu pengumuman finalis
                        dengan 10 besar tim yang lolos akan melakukan lomba hackaton di Politeknik Negeri Malang secara
                        ofline pada tanggal 1-3 November. alhamdulillah tim saya lolos terpilih jadi finalis dengan
                        pesaing dari universitas dan politeknik se indonesia. untuk hari pertama kita disuruh wawancara
                        dari hasil proposal yang kita buat. untuk hari kedua disini juri sudah mengasih tantangan untuk
                        dikerjakan selama 24 jam nonstop. Untuk tantangan nya sendiri adalah disuruh membuat Generative
                        AI untuk di implementasikan di aplikasi yang kita buat. Hari ketiga adalah hari terakhir dari
                        kegiatan lomba dimana di hari ketiga ini kami presentasi akhir dari aplikasi yang telah kita
                        buat selama 24 jam. Kemudian siang nya penutupan dan pengumuman pemenang. Alhamdulillah tim kami
                        membawa pulang juara 3 kategori software development </p>

                    <div class="flex mt-3 justify-between items-center">
                        <div class="flex gap-5">
                            <p class="text-slate-300 text-[14px]">40 <i class="fa-solid fa-heart"></i></p>
                            <p class="text-slate-300 text-[14px]">Bagikan<i class="ml-2 fa-solid fa-share"></i></p>
                        </div>

                        <div class="flex gap-5  items-center">
                            <p class="text-slate-300 text-[14px]"><i class="fa-solid fa-calendar-days"></i> 4 November
                                2024
                            </p>
                            <a href="" class="text-white text-[17px] p-3 rounded-[20px]">Baca selengkapnya
                                -></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/3">
                <div data-aos="zoom-in-up" data-aos-once="true" data-aos-offset="-1300"
                    class="p-3 mb-3 bg-dark rounded-[20px]">
                    <p class="text-yellow text-[15px] p-3 border rounded-[20px] inline-block border-yellow mb-3"><i class="fa-solid fa-pen-to-square"></i> Experience</p>
                    <img class="w-full rounded-[20px]" src="{{ asset('image/blog/lomba-um.jpg') }}" alt="">
                    <p class="text-white text-[20px] mt-5">UM SDGs Hackathon National Competition 2024</p>

                    <div class="flex gap-5 mt-1 items-center">
                        <p class="text-slate-300 text-[13px]"><i class="fa-solid fa-calendar-days"></i> 2 juni 2024
                        </p>
                        <a href="" class="text-white text-[15px] p-3 rounded-[20px]">Baca selengkapnya -></a>
                    </div>
                    <div class="flex mt-2 gap-5">
                        <p class="text-slate-300 text-[14px]">40 <i class="fa-solid fa-heart"></i></p>
                        <p class="text-slate-300 text-[14px]">Bagikan<i class="ml-2 fa-solid fa-share"></i></p>
                    </div>
                </div>
                <div data-aos="zoom-in-up" data-aos-once="true" data-aos-offset="-1300"
                    class="p-3 mb-3 bg-dark rounded-[20px]">
                    <p class="text-yellow text-[15px] p-3 border rounded-[20px] inline-block border-yellow mb-3"><i class="fa-solid fa-pen-to-square"></i> Tech</p>
                    <img class="w-full rounded-[20px]" src="{{ asset('image/blog/inertia.png') }}" alt="">
                    <p class="text-white text-[20px] mt-5">Solusi reactJS dengan laravel menggunakan inertia</p>

                    <div class="flex gap-5 mt-1 items-center">
                        <p class="text-slate-300 text-[13px]"><i class="fa-solid fa-calendar-days"></i> 2 Oktober 2024
                        </p>
                        <a href="" class="text-white text-[15px] p-3 rounded-[20px]">Baca selengkapnya -></a>
                    </div>
                    <div class="flex mt-2 gap-5">
                        <p class="text-slate-300 text-[14px]">40 <i class="fa-solid fa-heart"></i></p>
                        <p class="text-slate-300 text-[14px]">Bagikan<i class="ml-2 fa-solid fa-share"></i></p>
                    </div>
                </div>
                <a href="#"
                    class="text-yellow mt-5 inline-block w-full text-center text-[18px] p-3 rounded-[20px]">Lihat
                    seluruh Blog -></a>
            </div>
        </div>

        <img class="w-full" src="{{ asset('image/polygon5.png') }}" alt="">
    </section>

    <section>
        <div class="bg-dark h-[550px] relative py-5">
            <p
                class="absolute text-[#242532] hidden md:block text-[110px] md:text-[290px] md:top-0 top-[100px] z-0 md:right-40 rotate-[-10deg] font-bold">
                Gallery</p>
            <img src="{{ asset('image/bg-tp.png') }}" class="absolute bottom-0 w-[400px] left-[-150px]"
                alt="">
            <div class="wrapperImage mb-5 rotate-[10deg]">
                <div class="itemLeftImage item1">
                    <img src="{{ asset('image/galery/1.jpg') }}" alt="">
                </div>
                <div class="itemLeftImage item2">
                    <img src="{{ asset('image/galery/2.png') }}" alt="">
                </div>
                <div class="itemLeftImage item3">
                    <img src="{{ asset('image/galery/3.jpg') }}" alt="">
                </div>
                <div class="itemLeftImage item4">
                    <img src="{{ asset('image/galery/4.jpg') }}" alt="">
                </div>
                <div class="itemLeftImage item5">
                    <img src="{{ asset('image/galery/5.jpg') }}" alt="">
                </div>
                <div class="itemLeftImage item6">
                    <img src="{{ asset('image/galery/6.jpg') }}" alt="">
                </div>
                <div class="itemLeftImage item7">
                    <img src="{{ asset('image/galery/14.jpg') }}" alt="">
                </div>
                <div class="itemLeftImage item8">
                    <img src="{{ asset('image/galery/12.jpg') }}" alt="">
                </div>
            </div>
            <div class="wrapperImage z-20 rotate-[10deg]">
                <div class="itemRightImage item1">
                    <img src="{{ asset('image/galery/9.jpg') }}" alt="">
                </div>
                <div class="itemRightImage item2">
                    <img src="{{ asset('image/galery/10.jpg') }}" alt="">
                </div>
                <div class="itemRightImage item3">
                    <img src="{{ asset('image/galery/11.png') }}" alt="">
                </div>
                <div class="itemRightImage item4">
                    <img src="{{ asset('image/galery/12.jpg') }}" alt="">
                </div>
                <div class="itemRightImage item5">
                    <img src="{{ asset('image/galery/13.jpg') }}" alt="">
                </div>
                <div class="itemRightImage item6">
                    <img src="{{ asset('image/galery/14.jpg') }}" alt="">
                </div>
                <div class="itemRightImage item7">
                    <img src="{{ asset('image/galery/2.png') }}" alt="">
                </div>
                <div class="itemRightImage item8">
                    <img src="{{ asset('image/galery/5.jpg') }}" alt="">
                </div>
                <div class="itemRightImage item7">
                    <img src="{{ asset('image/galery/7.jpg') }}" alt="">
                </div>
                <div class="itemRightImage item8">
                    <img src="{{ asset('image/galery/8.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Resume
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <embed src="{{ asset('image/resume.pdf') }}" type="application/pdf" class="w-full h-[80vh]" />
                </div>
            </div>
        </div>
    </div>

@push('scripts')
<script>
    AOS.init();
    $(document).ready(function() {
        $('#skill').hide();
        $('#aboutme').hide();
        $('#contentSertifikat').hide();
        $('#contentPerlombaan').show();
        $('#btnPengalaman').addClass('active-about');
        $('#btnPerlombaan').addClass('active-achivement');
        $('#lblFile').html('index.js');

        $('#btnPengalaman').click(function() {
            $('#skill').hide();
            $('#aboutme').hide();
            $('#pengalaman').show();
            $('#btnAboutme').removeClass('active-about');
            $('#btnSkill').removeClass('active-about');
            $('#btnPengalaman').addClass('active-about');
            $('#lblFile').html('pengalaman.jpg');
        });

        $('#btnSkill').click(function() {
            $('#skill').show();
            $('#aboutme').hide();
            $('#pengalaman').hide();
            $('#btnAboutme').removeClass('active-about');
            $('#btnSkill').addClass('active-about');
            $('#btnPengalaman').removeClass('active-about');
            $('#lblFile').html('skill.js');
        });

        $('#btnAboutme').click(function() {
            $('#skill').hide();
            $('#aboutme').show();
            $('#pengalaman').hide();
            $('#btnAboutme').addClass('active-about');
            $('#btnSkill').removeClass('active-about');
            $('#btnPengalaman').removeClass('active-about');
            $('#lblFile').html('index.js');
        });

        $('#btnPerlombaan').click(function() {
            $('#contentPerlombaan').show();
            $('#contentSertifikat').hide();
            $('#btnPerlombaan').addClass('active-achivement');
            $('#btnSertifikat').removeClass('active-achivement');
        });

        $('#btnSertifikat').click(function() {
            $('#contentPerlombaan').hide();
            $('#contentSertifikat').show();
            $('#btnPerlombaan').removeClass('active-achivement');
            $('#btnSertifikat').addClass('active-achivement');
        });
    })
</script>


<!-- Initialize Swiper -->
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
<script>
    var swiper = new Swiper(".mySwiperTech", {
        slidesPerView: 2,
        spaceBetween: 10,
        loop: true,
        //   centeredSlides: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,

        },
        freemode: {
            enabled: true,
        },
        //   pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        //   },
    });
</script>
  
@endpush
@endsection