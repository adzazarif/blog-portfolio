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
          <svg  width="264" height="274" class="fill-green-200" viewBox="0 0 264 274" fill="s" xmlns="http://www.w3.org/2000/svg">
            <rect width="264" height="274" fill="black"/>
            <path  d="M251.397 29.202L82.8221 0.785767C73.1313 1.09013 53.145 3.18956 38.2294 10.9624C19.585 20.6785 5.64034 49.172 2.81457 59.6529C-0.011197 70.1338 11.5534 78.1374 19.0019 75.4466C26.4505 72.7557 38.491 60.8897 49.5179 54.8327C60.5449 48.7756 75.8567 52.445 77.1161 56.6553C78.3755 60.8655 70.359 95.3816 56.9979 131.958C46.309 161.219 18.1223 196.672 5.36507 210.741C0.00013639 222.441 -4.31011 246.763 21.3683 250.445C53.4664 255.048 73.3697 186.692 84.0279 165.606C92.5545 148.737 103.419 86.8507 107.786 58.0161L165.839 68.1455C163.187 70.0106 155.657 81.9319 146.749 114.696C135.615 155.652 129.825 194.547 131.454 213.786C133.082 233.025 144.631 263.972 171.216 271.603C192.483 277.708 212.871 265.237 220.407 258.238C228.506 248.013 243.275 224.318 237.561 211.35C231.848 198.381 223.908 201.984 220.652 205.407C217.606 209.531 210.605 218.419 206.968 220.976C202.423 224.174 197.416 224.298 188.877 221.81C180.338 219.323 165.333 196.752 176.728 142.873C185.844 99.7694 195.423 77.6306 199.073 71.9492L242.613 79.5462C253.45 81.437 257.398 74.8099 258.017 71.26C259.803 62.9255 263.192 45.0274 262.455 40.1101C261.718 35.1928 254.776 30.7892 251.397 29.202Z" stroke="black"/>
            </svg>
            
            
            
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
