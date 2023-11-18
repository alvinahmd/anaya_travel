<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signin</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
crossorigin="anonymous"></script>
<body>
  <div class="min-h-screen flex items-center pt-8 justify-center" style="background: linear-gradient(243deg, #7FF224 0%, #EBE943 100.06%);">
    <div class="w-[700px] h-[580px] border border-white bg-white/50 backdrop-blur-xl p-8 space-y-4 rounded-2xl flex flex-row">
      <div class="w-1/2 pt-24">
        <h1 class="font-['Lora'] text-2xl font-bold">
          Selamat datang, Admin!
        </h1>
        <p class="font-['Poppins'] text-sm mt-8">
          Selamat datang di panel administrasi kami, tempat di mana Anda dapat mengelola dan mengendalikan berbagai aspek penting dari aplikasi kami. Dari sini, Anda memiliki akses ke berbagai alat dan fitur yang memungkinkan Anda untuk mengatur data, mengelola pengguna, mengawasi statistik, dan masih banyak lagi.
        </p>
      </div>
      <div class="w-1/2 pl-7">
        <div class="w-72 h-[500px] bg-white/10 backdrop-blur-sm rounded-xl border border-white">
          <form action="{{ url('signup') }}" method="POST" class="px-8 py-16 ">
            <h2 class="text-2xl font-semibold text-center font-['Lora']">SignIn</h2>
            @csrf

            <div class="mb-8">
              <label class="block text-sm font-medium text-gray-700 font-['Poppins']">Username</label>
              <input type="text" name="name" id="name" class="w-full p-2 border  rounded-2xl focus focus:outline-none text-sm text-slate-400" style="background: linear-gradient(117deg, rgba(255, 255, 255, 0.75) 0%, rgba(255, 255, 255, 0.75) 100%);box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);border: 4px solid rgba(255, 255, 255, 0.79);">
              @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
            </div>
            <div class="mb-8">
              <label class="block text-sm font-medium text-gray-700 font-['Poppins']">Email</label>
              <input type="email" name="email" id="email" class="w-full p-2 border  rounded-2xl focus focus:outline-none text-sm text-slate-400" style="background: linear-gradient(117deg, rgba(255, 255, 255, 0.75) 0%, rgba(255, 255, 255, 0.75) 100%);box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);border: 4px solid rgba(255, 255, 255, 0.79);">
              @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>

            <div class="mb-8">
              <label class="block text-sm font-medium text-gray-700 font-['Poppins']">Password</label>
              <input type="password" name="password" id="password" class="w-full p-2 border  rounded-2xl focus:outline-none text-sm text-slate-400" style="background: linear-gradient(117deg, rgba(255, 255, 255, 0.75) 0%, rgba(255, 255, 255, 0.75) 100%);box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);border: 4px solid rgba(255, 255, 255, 0.79);">
              @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
            </div>

            <div class="mb-4">
              <button type="submit" class="w-full py-2 rounded-full font-['Lora'] text-xl text-center" style="background: linear-gradient(243deg, #7FF224 0%, #EBE943 100.06%);">Login</button>
            </div>
            <a href="/login">
              <p class="text-xs font-['Poppins'] text-slate-400 text-center">
                Login now
              </p>

            </a>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>