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
  <div class="pb-20">
    <div>
      <img src="/storage/img/tes.jpg" class="w-full h-96 bg-center bg-cover bg-no-repeat bg-fixed" alt="">
    </div>
    <h1>
      What collectors need to know about authenticity
    </h1>
  </div>
  </div>
  @endsection
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

</html>