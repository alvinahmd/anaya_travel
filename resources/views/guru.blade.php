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
  <div class="pt-20">
    <table class="border-collapse border-2 border-slate-500 w-full">
    <thead>
      <tr>
        <th class="border-2 border-slate-600  text-xl py-2 text-center font-bold w-6/12">Nama</th>
        <th class="border-2 border-slate-600 text-xl text-center font-bold">Jurusan</th>
      </tr>
    </thead>
    <tbody>
      <tr class="">
        <td class="border-2 border-slate-700 py-2 pl-2">Ivan Zuwanta</td>
        <td class="border-2 border-slate-700 pl-2 py-2">Basis data</td>
      </tr>
      <tr>
        <td class="border-2 border-slate-700 pl-2 py-2">Fikrotu Dwi</td>
        <td class="border-2 border-slate-700 pl-2 py-2">Pemograman web dan perangkat bergerak</td>
      </tr>
      <tr>
        <td class="border-2 border-slate-700 py-2 pl-2">wahyu wulan</td>
        <td class="border-2 border-slate-700 py-2 pl-2">Produk kreatif dan kewirausahaan</td>
      </tr>
    </tbody>
  </table>
  </div>
@endsection
</body>
</html>