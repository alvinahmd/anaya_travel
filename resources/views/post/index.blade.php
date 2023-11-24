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
      <div class="flex justify-between py-4">
         <p class="text-white font-semibold text-2xl font-['Lora']">
            Welcome,
            <span class="text-orange-500">
               {{ Auth::user()->name }}
            </span>
         </p>
         <div class="flex">
            <form action="search" role="search">
               <input type="text" placeholder="Search post" name="query" class="font['Poppins'] pl-10 w-52 border-2 py-2 text-sm text-red-400 focus:duration-300 rounded-lg">
               <div class="px-3">
                  <div class="flex justify-end -translate-x-2 -translate-y-20  w-6 pt-[10px]">
                     <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                        <g fill="#494444" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                           <g transform="scale(5.12,5.12)">
                              <path d="M21,3c-9.37891,0 -17,7.62109 -17,17c0,9.37891 7.62109,17 17,17c3.71094,0 7.14063,-1.19531 9.9375,-3.21875l13.15625,13.125l2.8125,-2.8125l-13,-13.03125c2.55469,-2.97656 4.09375,-6.83984 4.09375,-11.0625c0,-9.37891 -7.62109,-17 -17,-17zM21,5c8.29688,0 15,6.70313 15,15c0,8.29688 -6.70312,15 -15,15c-8.29687,0 -15,-6.70312 -15,-15c0,-8.29687 6.70313,-15 15,-15z"></path>
                           </g>
                        </g>
                     </svg>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div class="card -translate-y-24 rounded ">
         <div class="card-body">
            <a href="{{ route('post.create') }}" class="btn
              btn-md btn-success mb-3">TAMBAH POST</a>
         </div>
         <table class="table table-bordered border-gray-700 border-2 px-2">
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
            <ul class="pagination">
               {{ $posts->links('vendor.pagination.simple-tailwind') }}
            </ul>
         </div>
      </div>
   </div>
   @endsection
</body>

</html>