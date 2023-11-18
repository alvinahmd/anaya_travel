<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>

<body>
  <div class="min-h-screen flex items-center pt-8 justify-center" style="background: linear-gradient(243deg, #7FF224 0%, #EBE943 100.06%);">
    <div class="w-[700px] h-[500px] border border-white bg-white/50 backdrop-blur-xl p-8 space-y-4 rounded-2xl flex flex-row">
      <div class="w-1/2 pt-24">
        <h1 class="font-['Lora'] text-2xl font-bold">
          Selamat datang, Admin!
        </h1>
        <p class="font-['Poppins'] text-sm mt-8">
          Selamat datang di panel administrasi kami, tempat di mana Anda dapat mengelola dan mengendalikan berbagai aspek penting dari aplikasi kami. Dari sini, Anda memiliki akses ke berbagai alat dan fitur yang memungkinkan Anda untuk mengatur data, mengelola pengguna, mengawasi statistik, dan masih banyak lagi.
        </p>
      </div>
      <div class="w-1/2 pl-7">
        <div class="w-72 h-[420px] bg-white/10 backdrop-blur-sm rounded-xl border border-white">
          <form class="px-8 py-16 ">
            <h2 class="text-2xl font-semibold text-center font-['Lora']">Login</h2>
            @csrf

            <div class="mb-8">
              <label for="email" class="block text-sm font-medium text-gray-700 font-['Poppins']">Email</label>
              <input type="email" name="email" id="email" class="w-full p-2 border  rounded-2xl focus focus:outline-none text-sm text-slate-400" style="background: linear-gradient(117deg, rgba(255, 255, 255, 0.75) 0%, rgba(255, 255, 255, 0.75) 100%);box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);border: 4px solid rgba(255, 255, 255, 0.79);">
            </div>

            <div class="mb-8">
              <label for="password" class="block text-sm font-medium text-gray-700 font-['Poppins']">Password</label>
              <input type="password" name="password" id="password" class="w-full p-2 border  rounded-2xl focus:outline-none text-sm text-slate-400" style="background: linear-gradient(117deg, rgba(255, 255, 255, 0.75) 0%, rgba(255, 255, 255, 0.75) 100%);box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);border: 4px solid rgba(255, 255, 255, 0.79);">
            </div>

            <div class="mb-4">
              <button type="submit" class="w-full py-2 rounded-full font-['Lora'] text-xl text-center" style="background: linear-gradient(243deg, #7FF224 0%, #EBE943 100.06%);">Login</button>
            </div>
            <a href="">
              <p class="text-xs font-['Poppins'] text-slate-400 text-center">
                CREATE YOUR ACCOUNT
              </p>

            </a>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html>