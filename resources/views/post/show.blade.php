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

<body>
  @extends('layout.main')
  @section ('content')
  <div class="max-w-6xl mx-auto">
    <div class="w-full bg-cover bg-center" style="height:32rem; background-image: url('{{ asset("/storage/posts/$post->image") }}');" />
  </div>
  <div class="pt-12 px-4">
    <h1 class="xl:text-6xl font-bold md:text-4xl text-2xl text-slate-700 xl:w-[1000px] lg:w-[600px] font-['Lora'] ">
      {{ $post->title }}
    </h1>
    <h1 class="md:text-xl text-lg text-gray-700 pt-8 font-['Poppins'] pb-20">
      {!! nl2br(e($post->content)) !!}
    </h1>
  </div>
  <div class="fixed bottom-5 right-4">
    <a href="/">
      <div class="w-10 h-10 rounded-full bg-blue-400">
        <p class="text-center text-sm translate-y-2 text-white">
          Back
        </p>
      </div>
    </a>
  </div>
  @endsection
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

</html>