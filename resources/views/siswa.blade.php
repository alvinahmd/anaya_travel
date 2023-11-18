<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body>
  @extends('layout.main')
  @section ('content')
  <div class="py-14 px-14">
    <h1 class="pb-8 text-2xl font-bold">
      Data siswa
    </h1>
    <table class="border-collapse border-2 border-slate-500 w-full">
    <thead>
      <tr>
        <th class="border-2 border-slate-600  text-xl py-2 text-center font-bold w-32">ID</th>
        <th class="border-2 border-slate-600  text-xl py-2 text-center font-bold">NAMA</th>
        <th class="border-2 border-slate-600  text-xl py-2 text-center font-bold">ALAMAT</th>
        <th class="border-2 border-slate-600  text-xl py-2 text-center font-bold">KELAMIN</th>
        <th class="border-2 border-slate-600 text-xl text-center font-bold">NISN</th>
      </tr>
    </thead>
    <tbody>
      <tr class="">
        <td class="border-2 border-slate-700 py-2 pl-2">1</td>
        <td class="border-2 border-slate-700 py-2 pl-2">Aan Fakturohman</td>
        <td class="border-2 border-slate-700 pl-2 py-2">Pule</td>
        <td class="border-2 border-slate-700 pl-2 py-2">Laki laki</td>
        <td class="border-2 border-slate-700 pl-2 py-2">00562731195</td>
      </tr>
      <tr>
        <td class="border-2 border-slate-700 pl-2 py-2">2</td>
        <td class="border-2 border-slate-700 pl-2 py-2">Eka nanda s</td>
        <td class="border-2 border-slate-700 pl-2 py-2">pule</td>
        <td class="border-2 border-slate-700 pl-2 py-2">Laki laki</td>
        <td class="border-2 border-slate-700 pl-2 py-2">0077392751</td>
      </tr>
      <tr>
        <td class="border-2 border-slate-700 py-2 pl-2">3</td>
        <td class="border-2 border-slate-700 py-2 pl-2">Bagas dwi cahyo</td>
        <td class="border-2 border-slate-700 py-2 pl-2">pule </td>
        <td class="border-2 border-slate-700 py-2 pl-2">Laki Laki </td>
        <td class="border-2 border-slate-700 py-2 pl-2">006034687 </td>
      </tr>
      <tr>
        <td class="border-2 border-slate-700 py-2 pl-2">4</td>
        <td class="border-2 border-slate-700 py-2 pl-2">della ayu</td>
        <td class="border-2 border-slate-700 py-2 pl-2">jatiprahu </td>
        <td class="border-2 border-slate-700 py-2 pl-2">Perempuan </td>
        <td class="border-2 border-slate-700 py-2 pl-2">0056743524 </td>
      </tr>
      <tr>
        <td class="border-2 border-slate-700 py-2 pl-2">5</td>
        <td class="border-2 border-slate-700 py-2 pl-2">Arkan arya </td>
        <td class="border-2 border-slate-700 py-2 pl-2">pule </td>
        <td class="border-2 border-slate-700 py-2 pl-2">Laki Laki </td>
        <td class="border-2 border-slate-700 py-2 pl-2">0055870959</td>
      </tr>
      <tr>
        <td class="border-2 border-slate-700 py-2 pl-2">6</td>
        <td class="border-2 border-slate-700 py-2 pl-2">Detra Rosiana</td>
        <td class="border-2 border-slate-700 py-2 pl-2">tugu </td>
        <td class="border-2 border-slate-700 py-2 pl-2">perempuan</td>
        <td class="border-2 border-slate-700 py-2 pl-2">0051304066 </td>
      </tr>
      <tr>
        <td class="border-2 border-slate-700 py-2 pl-2">7</td>
        <td class="border-2 border-slate-700 py-2 pl-2">Aditya dwi purnomo</td>
        <td class="border-2 border-slate-700 py-2 pl-2">pule </td>
        <td class="border-2 border-slate-700 py-2 pl-2">Laki Laki </td>
        <td class="border-2 border-slate-700 py-2 pl-2">0088178022</td>
      </tr>
      <tr>
        <td class="border-2 border-slate-700 py-2 pl-2">8</td>
        <td class="border-2 border-slate-700 py-2 pl-2">desta catur</td>
        <td class="border-2 border-slate-700 py-2 pl-2">Ngadirenggo </td>
        <td class="border-2 border-slate-700 py-2 pl-2">Laki Laki </td>
        <td class="border-2 border-slate-700 py-2 pl-2">0055652004 </td>
      </tr>
      <tr>
        <td class="border-2 border-slate-700 py-2 pl-2">9</td>
        <td class="border-2 border-slate-700 py-2 pl-2">dimas wahyu</td>
        <td class="border-2 border-slate-700 py-2 pl-2">tugu </td>
        <td class="border-2 border-slate-700 py-2 pl-2">Laki Laki </td>
        <td class="border-2 border-slate-700 py-2 pl-2">0051548241 </td>
      </tr>
      <tr>
        <td class="border-2 border-slate-700 py-2 pl-2">10</td>
        <td class="border-2 border-slate-700 py-2 pl-2">dicky Eka</td>
        <td class="border-2 border-slate-700 py-2 pl-2">tugu </td>
        <td class="border-2 border-slate-700 py-2 pl-2">Laki Laki </td>
        <td class="border-2 border-slate-700 py-2 pl-2">005432926 </td>
      </tr>
    </tbody>
  </table>
  </div>
@endsection
</body>
</html>