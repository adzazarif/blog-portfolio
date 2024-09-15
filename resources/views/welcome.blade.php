<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <nav class="bg-white dark:bg-dark fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get
                    started</button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="flex flex-col gap-5 h-[90vh] items-center bg-dark px-24 md:flex-row  ">
        <div>
            <h4 class="text-[35px] my-0 font-bold text-white">Hello Iam</h4>
            <h1 class="text-[60px] my-0 text-white font-bold ">Adza Zarif Nur Iskandar</h1>
            <p class="text-white text-[20px] mt-4 w-[500px]">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                In tempora asperiores, explicabo modi et recusandae porro soluta beatae ducimus culpa assumenda harum
                ipsum? Soluta, officiis? Unde nihil alias minima magni!</p>
            <div class="flex gap-3 mt-4">
                <a class="border bg-white text-[20px] duration-300 p-3 rounded hover:bg-black hover:text-white"
                    href="#">Contact Me <i class="fa-solid fa-circle-user"></i></a>
                <a class="border text-white text-[20px] p-3 rounded" href="#">Donwload CV <i
                        class="fa-solid fa-circle-user"></i></a>
            </div>
        </div>

        <div>
            <img class="w-[1200px]" src="{{ asset('image/hero.png') }}" alt="">
        </div>
    </div>

    <section>
        <div class="flex items-center bg-dark">
            <div>
                <img class="w-[900px]" src="{{ asset('image/about.png') }}" alt="">
            </div>

            <div class="w-[500px]">
                <div class="flex justify-between items-center">
                    <span class="w-10 h-[2px] bg-white"></span>
                    <h3 class="text-white text-[40px] font-bold">About Me</h3>
                    <span class="w-10 h-[2px] bg-white"></span>
                </div>

                <p class="text-white text-[20px] text-justify">I am an information technology student at Jember State
                    Polytechnic. My love for software is the fuel that fuels my passion to continue learning and
                    developing. Outside of programming I like traveling and being a photographer.</p>
            </div>
        </div>
    </section>


    <section class="bg-dark">
        <img class="w-full" src="{{ asset('image/polygon.png') }}" alt="">
        <div class="flex bg-grey items-center justify-center">
          <span class="w-64 h-[2px] bg-white"></span>
          <div class="bg-grey text-center p-5">
              <h1 class="text-[45px] font-bold text-white">Skils & Experience</h1>
              <p class="text-white mx-auto text-[17px] w-[700px]">Lorem ipsum dolor sit amet consectetur, adipisicing
                  elit. Quia accusantium a laboriosam quaerat quod? Vel au</p>
          </div>
          <span class="w-64 h-[2px] bg-white"></span>
        </div>

        <div class="flex items-center p-20 gap-10 bg-grey">
          <div class="flex flex-col w-[50%]">
            <div class="card-timeline w-[500px] flex gap-6">
              <div class="flex flex-col  items-center">
                  <div class="w-12 h-12 bg-white text-dark font-bold text-[20px] flex justify-center items-center rounded-full">
                    <i class="fa-solid fa-calendar"></i>
                  </div>
                  <span class="relative block w-[2px] h-[105px] bg-gray-300"></span>
              </div>
              <div class="bg-grey">
                  <h5 class="text-[20px] text-white font-semibold">asdasdsa</h5>
                  <h6 class="text-white">20 juni 2025 - 20 juni 2025 </h6>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam nihil ea accusantium possimus?
                      Ipsam voluptas quasi placeat? </p>
  
              </div>
          </div>
            <div class="card-timeline w-[500px] flex gap-6">
              <div class="flex flex-col  items-center">
                  <div class="w-12 h-12 bg-white text-dark font-bold text-[20px] flex justify-center items-center rounded-full">
                    <i class="fa-solid fa-calendar"></i>
                  </div>
                  <span class="relative block w-[2px] h-[105px] bg-gray-300"></span>
              </div>
              <div class="bg-grey">
                  <h5 class="text-[20px] text-white font-semibold">asdasdsa</h5>
                  <h6 class="text-white">20 juni 2025 - 20 juni 2025 </h6>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam nihil ea accusantium possimus?
                      Ipsam voluptas quasi placeat? </p>
  
              </div>
          </div>
          <div class="card-timeline w-[500px] flex gap-6">
            <div class="flex flex-col  items-center">
                <div class="w-12 h-12 bg-white text-dark font-bold text-[20px] flex justify-center items-center rounded-full">
                  <i class="fa-solid fa-calendar"></i>
                </div>
                <span class="relative block w-[2px] h-[105px] bg-gray-300"></span>
            </div>
            <div class="bg-grey">
                <h5 class="text-[20px] text-white font-semibold">asdasdsa</h5>
                <h6 class="text-white">20 juni 2025 - 20 juni 2025 </h6>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam nihil ea accusantium possimus?
                    Ipsam voluptas quasi placeat? </p>

            </div>
        </div>
          </div>
        

        <div class="w-[50%] bg-grey">
          <div class="flex gap-10">
            <div class="flex h-[150px] justify-center items-center flex-col">
              <img class="w-24" src="{{ asset("image/logo/tailwind.png") }}" alt="">
              <p class="text-white mt-2 text-[20px]">TAILWIND</p>
            </div>
            <div class="flex h-[150px] justify-center items-center flex-col">
              <img class="w-24" src="{{ asset("image/logo/java.png") }}" alt="">
              <p class="text-white mt-2 text-[20px]">JAVA</p>
            </div>
            <div class="flex h-[150px] justify-center items-center flex-col">
              <img class="w-24" src="{{ asset("image/logo/js.png") }}" alt="">
              <p class="text-white mt-2 text-[20px]">JAVASCRIPT</p>
            </div>
            <div class="flex h-[150px] justify-center items-center flex-col">
              <img class="w-24" src="{{ asset("image/logo/css.png") }}" alt="">
              <p class="text-white mt-2 text-[20px]">CSS</p>
            </div>
            <div class="flex h-[150px] justify-center items-center flex-col">
              <img class="w-24" src="{{ asset("image/logo/html.png") }}" alt="">
              <p class="text-white mt-2 text-[20px]">HTML</p>
            </div>
          </div>
          <div class="flex justify-center mt-10 gap-10">
            <div class="flex h-[150px] justify-center items-center flex-col">
              <img class="w-24" src="{{ asset("image/logo/bootstrap.png") }}" alt="">
              <p class="text-white mt-2 text-[20px]">BOOSTRAP</p>
            </div>
            <div class="flex h-[150px] justify-center items-center flex-col">
              <img class="w-24" src="{{ asset("image/logo/php.png") }}" alt="">
              <p class="text-white mt-2 text-[20px]">PHP</p>
            </div>
            <div class="flex h-[150px] justify-center items-center flex-col">
              <img class="w-24" src="{{ asset("image/logo/jquery.png") }}" alt="">
              <p class="text-white mt-2 text-[20px]">JQUERY</p>
            </div>
            <div class="flex h-[150px] justify-center items-center flex-col">
              <img class="w-24" src="{{ asset("image/logo/mysql.png") }}" alt="">
              <p class="text-white mt-2 text-[20px]">MYSQL</p>
            </div>
          </div>
        </div>
        </div>

        <img class="w-full" src="{{ asset('image/polygon2.png') }}" alt="">
    </section>


    <section class="bg-dark py-36">
      <div class="flex bg-dark items-center justify-center">
        <span class="w-64 h-[2px] bg-white"></span>
        <div class="bg-dark text-center p-5">
            <h1 class="text-[45px] font-bold text-white">My Project</h1>
            <p class="text-white mx-auto text-[17px] w-[700px]">Lorem ipsum dolor sit amet consectetur, adipisicing
                elit. Quia accusantium a laboriosam quaerat quod? Vel au</p>
        </div>
        <span class="w-64 h-[2px] bg-white"></span>
      </div>

      <div class="flex justify-center px-36 flex-wrap gap-10 bg-dark">
        @for($i = 1; $i < 6; $i++)
        <div class="w-[330px] duration-300 relative mt-32 hover:border-white px-4 pt-28 bg-grey rounded-[10px] border border-slate-500">
          <img class="absolute top-[-100px] rounded" width="300px" src="{{ asset("image/project1.png") }}" alt="">          
          <h1 class="text-white text-[25px] text-center font-semibold">Travel Umrah</h1>
          <p class="text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum aliquid ipsam facere, assumenda natus quibusdam, sapiente, quo at odio ad architecto animi dignissimos exercitationem debitis sint magnam incidunt maiores impedit.</p>

          <div class="flex m-5 justify-center flex-wrap gap-5">
            <div class="flex items-center gap-4">
              <img width="60px" src="{{ asset("image/logo/mysql.png") }}" alt="">
              <p class="text-white text-[15px]">MYSQL</p>
            </div>
            <div class="flex items-center gap-4">
              <img width="60px" src="{{ asset("image/logo/html.png") }}" alt="">
              <p class="text-white text-[15px]">HTML</p>
            </div>
            <div class="flex items-center gap-4">
              <img width="60px" src="{{ asset("image/logo/php.png") }}" alt="">
              <p class="text-white text-[15px]">PHP</p>
            </div>
            <small  class="text-white"><i class="fa-solid mr-3 fa-calendar-days"></i>Published: 20 juni 2024</small>
          </div>


          {{-- <a href="" class="bg-white inline-block p-3 rounded">Lihat Detail</a> --}}
        </div>
        @endfor
      </div>
    </section>

    <section class="bg-dark">
      <img class="w-full" src="{{ asset('image/polygon3.png') }}" alt="">
      <div class="flex bg-grey items-center justify-center">
        <span class="w-64 h-[2px] bg-white"></span>
        <div class="bg-grey text-center p-5">
            <h1 class="text-[45px] font-bold text-white">Blogs</h1>
            <p class="text-white mx-auto text-[17px] w-[700px]">Lorem ipsum dolor sit amet consectetur, adipisicing
                elit. Quia accusantium a laboriosam quaerat quod? Vel au</p>
        </div>
        <span class="w-64 h-[2px] bg-white"></span>
      </div>
      
      <div class="flex">
          
      </div>

      <img class="w-full" src="{{ asset('image/polygon5.png') }}" alt="">
  </section>

  <footer>
    <div class="flex">
      <i class="fa-brands fa-instagram"></i>
    </div>
    <small>@ 2023 Copyright: Developed by Adza Zarif Nur Iskandar</small>
  </footer>

</body>

</html>
