<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>MyData</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.c
ss" rel="stylesheet" integrity="sha384-
T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #001C30">
@extends('layout.sidebar')
  @section ('content')
   <div class="p-4 sm:ml-64 ">
      <div class="flex justify-end">
         <p class="text-white">
            Welcome, {{ Auth::user()->name}}
         </p>
      </div>
      <div class="card border-2 border-slate-700 rounded ">
         <div class="card-body">
            <a href="{{ route('post.create') }}" class="btn
              btn-md btn-success mb-3">TAMBAH POST</a>
            <form action="search" role="search">
               <div class="flex py-4">
                  <input type="text" placeholder="Search post" name="query" class="w-full text-sm text-red-400 focus:duration-300 rounded-md">
                  <div class="pl-2">
                     <button class="rounded-lg bg-green-600 w-14 py-2 text-white text-sm">
                        Search
                     </button>
                  </div>
            </form>
         </div>
         <table class="table table-bordered">
            <thead>
               <tr>
                  <th scope="col-4">GAMBAR</th>
                  <th scope="col-4">category</th>
                  <th scope="col-4">JUDUL</th>
                  <th scope="col-4">CONTENT</th>
                  <th scope="col-4">AKSI</th>
               </tr>
            </thead>
            <tbody>
               @forelse ($posts as $post)
               <tr>
                  <td class="text-center w-1/5">
                     <img src="{{asset('/storage/posts/' . $post->image) }}" class="rounded" style="width:150px">
                  </td>
                  <td>{{ $post->category }}</td>
                  <td>{{ $post->title }}</td>
                  <td>
                     {!! nl2br(e($post->content)) !!}
                  </td>
                  <td class="text-center col-3">
                     <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('post.destroy', $post->id) }}" method="POST">
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Apakah Anda Yakin ?');" type="submit" class="bg-red-600 btn btn-sm text-white">HAPUS</button>
                     </form>
                  </td>
               </tr>
               @empty
               <div class="alert alert-danger">
                  Data Post belum Tersedia.
               </div>
               @endforelse
            </tbody>
         </table>
         <div class="py-4">
            <!-- <ul class="pagination">
               {{ $posts->links('vendor.pagination.simple-tailwind') }}
            </ul> -->
         </div>
      </div>
   </div>
   </div>
   @endsection
</body>

</html>