<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View more</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
<link rel="icon" href="storage/img/vector.png" type="image/png">

<body>
  @extends('layout.main')
  @section ('content')
  <div class="pt-40">
    <div class="md:container md:px-12 px-2">
        <form action="caricategory" role="search">
          <div class="flex px-2">
          <input type="text" placeholder="Search post" name="category" class="w-full border-2 border-blue-500 text-sm focus focus:outline-none  text-red-400 focus:duration-300 rounded-md">            
          <div class="pl-2">
            <button class="rounded-lg bg-green-600 w-14 py-2 text-white text-sm">
              Search
            </button>
          </div>
          </div>
        </form>
      <div class="flex flex-wrap py-8">
        <?php $number = 1; ?>
        @forelse ($posts as $post)
        <?php
        $content = substr($post->content, 0, 250);
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
                {!! html_entity_decode($content) !!}
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
  </div>
  @endsection
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

</html>