<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
<link href="{{ asset('node_modules/aos/dist/aos.css') }}" rel="stylesheet">
<title>Anaya travel</title>
<link rel="icon" href="storage/img/vector.png" type="image/png">
<script src="{{ asset('js/loading-screen.js') }}"></script>

<body>
  @extends('layout.main')
  @section ('content')
  <!-- banner -->
  <div class="relative">
    <swiper-container navigation="true" pagination="true">
      <swiper-slide>
        <div class="w-full bg-cover bg-center" style="height:32rem; background-image: url(storage/img/image.png);">
          <div class="items-center h-full w-full">
            <div class="fixed md:left-16 pl-4 top-52 font-['Lora']">
              <div class="mb-[15px]">
                <div class="w-24 backdrop-blur bg-white/20 rounded-md">
                  <p class="text-white text-center text-xs py-1 px-2.5 ">
                    ADVENTURE
                  </p>
                </div>
              </div>
              <h1 class="text-white md:text-2xl text-base font-bold uppercase md:w-[530px]">Richird Norton photorealistic rendering as real photos</h1>
              <div class="flex mt-[15px] ">
                <p class=" text-white text-xs">
                  08.08.2021
                </p>
                <div class="pt-2 px-2">
                  <svg width="30" height="1" viewBox="0 0 30 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1.7418e-10" y1="0.5" x2="30" y2="0.5" stroke="#E5E5E5" />
                  </svg>
                </div>
                <p class=" text-white text-xs md:w-[420px]">
                  Progressively incentivize cooperative systems through technically sound functionalities. The credibly productivate seamless data. </p>
              </div>
            </div>
          </div>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="w-full bg-cover bg-center" style="height:32rem; background-image: url(storage/img/2.png);">
          <div class="items-center h-full w-full">
            <div class="fixed md:left-16 pl-4 top-52 font-['Lora']">
              <div class="mb-[15px]">
                <div class="w-24 backdrop-blur bg-white/20 rounded-md">
                  <p class="text-white text-center text-xs py-1 px-2.5 ">
                    ADVENTURE
                  </p>
                </div>
              </div>
              <h1 class="text-white md:text-2xl text-base font-bold uppercase md:w-[530px]">Richird Norton photorealistic rendering as real photos</h1>
              <div class="flex mt-[15px] ">
                <p class=" text-white text-xs">
                  08.08.2021
                </p>
                <div class="pt-2 px-2">
                  <svg width="30" height="1" viewBox="0 0 30 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1.7418e-10" y1="0.5" x2="30" y2="0.5" stroke="#E5E5E5" />
                  </svg>
                </div>
                <p class=" text-white text-xs md:w-[420px]">
                  Progressively incentivize cooperative systems through technically sound functionalities. The credibly productivate seamless data. </p>
              </div>
            </div>
          </div>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="w-full bg-cover bg-center" style="height:32rem; background-image: url(storage/img/3.png);">
          <div class="items-center h-full w-full">
            <div class="fixed md:left-16 pl-4 top-52 font-['Lora']">
              <div class="mb-[15px]">
                <div class="w-24 backdrop-blur bg-white/20 rounded-md">
                  <p class="text-white text-center text-xs py-1 px-2.5 ">
                    ADVENTURE
                  </p>
                </div>
              </div>
              <h1 class="text-white md:text-2xl text-base font-bold uppercase md:w-[530px]">Richird Norton photorealistic rendering as real photos</h1>
              <div class="flex mt-[15px] ">
                <p class=" text-white text-xs">
                  08.08.2021
                </p>
                <div class="pt-2 px-2">
                  <svg width="30" height="1" viewBox="0 0 30 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1.7418e-10" y1="0.5" x2="30" y2="0.5" stroke="#E5E5E5" />
                  </svg>
                </div>
                <p class=" text-white text-xs md:w-[420px]">
                  Progressively incentivize cooperative systems through technically sound functionalities. The credibly productivate seamless data.
                </p>
              </div>
            </div>
          </div>
        </div>
      </swiper-slide>
      ...
    </swiper-container>
  </div>
  <!-- end banner -->
  <!-- Pilihan -->
  <div class=" md:max-w-5xl mx-auto py-12">
    <div class="grid md:grid-cols-12 ">
      <div class="xl:col-span-4 md:col-span-6 pt-12 pl-8">
        <div class="bg-black w-80 h-[186px] overflow-hidden cursor-pointer">
          <div class=" hover:rotate-3 hover:opacity-100 transition-all duration-500 hover:scale-110 opacity-50  bg-cover bg-center bg-no-repeat" style="height: 186px;background-image: url('https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')">
            <p class="pt-20 text-center text-4xl text-white opacity-100">
              Travel
            </p>
          </div>
        </div>
      </div>
      <div class="xl:col-span-4 md:col-span-5 pt-12 pl-8">
        <div class="bg-black w-80 h-[186px] overflow-hidden cursor-pointer">
          <div class=" hover:-rotate-3 hover:opacity-100 transition-all duration-500 hover:scale-110 opacity-50  bg-cover bg-center bg-no-repeat" style="height: 186px;background-image: url('https://images.unsplash.com/photo-1507034589631-9433cc6bc453?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1368&q=80')">
            <p class="pt-20 text-center text-4xl text-white opacity-100">
              Adventure
            </p>
          </div>
        </div>
      </div>
      <div class="xl:col-span-4 md:col-span-6 pt-12 pl-8">
        <div class="bg-black w-80 h-[186px] overflow-hidden cursor-pointer">
          <div class="hover:opacity-100 transition-all duration-500 hover:scale-110 opacity-50  bg-cover bg-center bg-no-repeat" style="height: 186px;background-image: url('https://images.unsplash.com/photo-1539109136881-3be0616acf4b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80')">
            <p class="pt-20 text-center text-4xl text-white opacity-100">
              Fashion
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end piligan -->
  <!-- populer -->
  <div class="md:container md:px-12 px-2">
    <div class="">
      <h1 class="font-[Lora] text-4xl font-bold pb-4 pt-12" style="color: #495057">
        Popular Topics
      </h1>
      <form action="cari" role="search">
        <div class="flex py-4">
          <input type="text" placeholder="Search post" name="cari" class="w-full border text-sm text-red-400 focus:duration-300 rounded-md">
          <div class="pl-2">
            <button class="rounded-lg bg-green-600 w-14 py-2 text-white text-sm">
              Search
            </button>
          </div>
      </form>
    </div>
    <div class="flex flex-wrap py-8">
      <?php $number = 1; ?>
      @forelse ($posts as $post)
      <?php
      $content = substr($post->content, 0, 255);
      if ($number == 3)
      ?>
      <div data-aos="fade-up" data-aos-duration="3000" data-aos-easing="linear" class="w-full px-4 lg:w-1/2 xl:w-1/4 md:w-1/2">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
          <div class="bg-cover bg-center bg-no-repeat" style="height: 203px; background-image: url('{{ asset("/storage/posts/$post->image") }}');">
            <div class="float-right pr-4 pt-4">
              <div class="bg-white/20 w-max h-[24px] rounded-lg backdrop-blur-sm">
                <p class=" px-2 text-center text-sm font-bold text-slate-700">
                  {{ $post->category }}
                </p>
              </div>
            </div>
          </div>
          <div class="py-[15px] px-3">
            <p class="pt-[15px] text-lg font-bold text-[Lora] text-slate-500 mb-4">
              {{ $post->title }}
            </p>
            <h1 class="font-[Lora] text-sm font-normal">
              {!! nl2br(html_entity_decode($content)) !!}
            </h1>
            <div class="pt-8">
              <a href="{{ route('post.show', $post->id) }}" class="w-12 py-2 rounded px-2 text-white text-sm text-center bg-blue-500"> read more</a>
            </div>
          </div>
        </div>
      </div>
      @empty
      @endforelse
    </div>
  </div>
  </div>
  </div>
  <!-- end populer -->
  <!-- paralax -->
  <div class="pb-20">
    <div class="bg-black">
      <div class="opacity-60 bg-center bg-cover bg-fixed bg-no-repeat " style="height:600px;background-image: url('https://images.unsplash.com/photo-1514747975201-4715db583da9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');">
        <div class="max-w-lg mx-auto translate-y-56">
          <h1 class="font-bold sm:pl-4 opacity-100 text-white font-[Lora] md:text-4xl text-2xl">
            Richird Norton photorealistic <span class="md:pl-8 pl-8">rendering as real photos</span>
          </h1>
          <p class="pb-[23px] pt-3 font-[Lora] text-xs text-white md:max-w-[400px] max-w-[300px] md:pl-20 text-center">
            Progressively incentivize cooperative systems through technically sound functionalities. The credibly productivate seamless data.
          </p>
          <p class="font-[Lora] text-xs text-white md:max-w-[400px] max-w-[300px] md:pl-20 text-center">
            08.08.2021
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- end paralax -->
  <!-- editor -->
  <div class="md:container md:px-12 px-2 pb-40">
    <div class="">
      <h1 class="font-[Lora] text-4xl font-bold pb-4 pt-12" style="color: #495057">
        Editors Pick
      </h1>
      <div data-aos="fade-down" data-aos-duration="3000" data-aos-easing="linear" class="flex flex-wrap py-8">
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3 md:w-1/2 ">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <div class="bg-cover bg-center bg-no-repeat" style="height: 350px;background-image: url('https://images.unsplash.com/photo-1618595142648-9de5cf248886?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');">
              <div class="float-right pr-4 pt-4">
                <div class="bg-white/20 w-[77px] h-[24px] rounded-lg backdrop-blur-sm">
                  <p class="text-center text-sm font-bold text-white">
                    Adventure
                  </p>
                </div>
              </div>
              <div class="pt-40 px-8">
                <p class="font-[Lora] text-xs text-white pb-4">
                  08.08.2021
                </p>
                <h1 class="font-[Lora] text-white font-bold text-lg">
                  Richird Norton photorealistic rendering as real photos
                </h1>
                <p class="font-[Lora] text-xs text-white pb-4">
                  Progressively incentivize cooperative systems through technically sound functionalities. The credibly productivate seamless data.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3 md:w-1/2 ">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <div class="bg-cover bg-center bg-no-repeat" style="height: 350px;background-image: url('https://images.unsplash.com/photo-1516035069371-29a1b244cc32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1528&q=80');">
              <div class="float-right pr-4 pt-4">
                <div class="bg-white/20 w-[90px] h-[24px] rounded-lg backdrop-blur-sm">
                  <p class="text-center text-sm font-bold text-white">
                    Technology
                  </p>
                </div>
              </div>
              <div class="pt-40 px-8">
                <p class="font-[Lora] text-xs text-white pb-4">
                  08.08.2021
                </p>
                <h1 class="font-[Lora] text-white font-bold text-lg">
                  Richird Norton photorealistic rendering as real photos
                </h1>
                <p class="font-[Lora] text-xs text-white pb-4">
                  Progressively incentivize cooperative systems through technically sound functionalities. The credibly productivate seamless data.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/2 xl:w-1/3 md:w-1/2 ">
          <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
            <div class="bg-cover bg-center bg-no-repeat" style="height: 350px;background-image: url('https://images.unsplash.com/photo-1574201635302-388dd92a4c3f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1530&q=800');">
              <div class="float-right pr-4 pt-4">
                <div class="bg-white/20 w-[77px] h-[24px] rounded-lg backdrop-blur-sm">
                  <p class="text-center text-sm font-bold text-white">
                    Fashion
                  </p>
                </div>
              </div>
              <div class="pt-40 px-8">
                <p class="font-[Lora] text-xs text-white pb-4">
                  08.08.2021
                </p>
                <h1 class="font-[Lora] text-white font-bold text-lg">
                  Richird Norton photorealistic rendering as real photos
                </h1>
                <p class="font-[Lora] text-xs text-white pb-4">
                  Progressively incentivize cooperative systems through technically sound functionalities. The credibly productivate seamless data.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end editor -->
  @endsection
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
  <script src="{{ asset('node_modules/aos/dist/aos.js') }}"></script>

</body>