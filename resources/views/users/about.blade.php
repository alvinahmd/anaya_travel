<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />

<body>
  @extends('layout.main')
  @section ('content')
  <!-- banner -->
  <div class="pb-20">
    <div class="w-full bg-center bg-cover bg-no-repeat bg-fixed" style="height: 600px; background-image: url('/storage/img/abot.png');">
      <div class="pt-64">
        <h1 class="text-white text-center font-extrabold font-[Lora] text-7xl">
          About us
        </h1>
      </div>
    </div>
  </div>
  <!-- end banner -->
  <!-- kata kata -->
  <div class="pt-20 pb-20 md:container md:px-12 px-2">
    <div class="md:flex md:flex-row w-full flex-shrink-0 ">
      <div class="md:w-1/2" style=" height: 180px;background-image: url('/storage/img/bg.png');">
        <div class="mx-auto ">
          <h1 class="font-[Lora] font-normal text-3xl xl:pl-8 pl-4 md:pt-12 pt-8 ">
            Hey, We are the Red Explorers Brief History <span class="text-yellow-400 border-b-2 border-yellow-400	">About Us. </span>
          </h1>
        </div>
      </div>
      <div class="md:w-1/2 break-all md:pl-8 py-4">
        <p class="xl:md:text-base text-sm md:text-sm font-[Poppins] ">
          Saya adalah Seorang pecinta sejarah yang selalu haus pengetahuan tentang masa lalu. Blog ini adalah jendela ke petualangan saya dalam merunut kisah-kisah berwarna dari zaman dahulu hingga sekarang. mari kita gali dan nikmati kisah-kisah yang membentuk dunia ini.
        </p>
      </div>
    </div>
  </div>
  <!-- end kata kata -->
  <!-- foto -->
  <div class="pb-20  md:px-12 px-4">
    <div class="bg-cover bg-center bg-no-repeat w-full">
      <img src="/storage/img/sweet.png" alt="">
      <div class="pt-14">
        <p class="md:text-base text-sm font-[Poppins]">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde fuga dolorem distinctio! Adipisci quibusdam atque blanditiis eius, accusantium sint nisi corrupti nulla voluptatum architecto debitis, assumenda magnam consequatur aspernatur molestias velit earum possimus id animi aliquid ex fuga sequi pariatur. Doloremque eveniet architecto officia, obcaecati provident distinctio, in nostrum cupiditate velit, qui nisi ex est corrupti molestias tempore eligendi quae voluptate ullam temporibus nesciunt ad illo similique iusto. Reiciendis sit quibusdam expedita non quasi beatae, hic fugiat in maiores vero laborum velit nemo, quis ipsam libero quam provident quas, dicta nobis? Eum sed quae sit eius assumenda aliquam, perspiciatis quia!
        </p>
      </div>
    </div>
  </div>
  <!-- end foto -->
  <!-- tentang -->
  <div class="pt-20  md:container md:px-12 px-2">
    <div class="md:flex md:flex-row w-full flex-shrink-0 ">
      <div class="md:w-1/2 break-all pt-12">
        <h1 class="text-2xl pb-8">
          Our Story
        </h1>
        <p class="font-[Poppins] md:text-base text-sm">
          Halo, saya adalah alvin saya adalah petualang yang tak pernah puas dengan keindahan dunia ini. Blog ini adalah tempat saya berbagi kisah perjalanan , pengalaman luar biasa, dan tips berguna untuk petualangan Anda sendiri.
        </p>
        <p class="font-[Poppins] md:text-base text-sm pt-4">
          Semua dimulai ketika saya pertama kali saya berpetualang di gunung slamet, yang ternyata adalah destinasi eksotis yang akan menjadi awal dari petualangan hidup saya. saya memiliki hasrat yang tinggi untuk menjelajahi dunia, mencoba makanan lokal, dan mengalami budaya baru.
        </p>
        <p class="font-[Poppins] md:text-base text-sm pt-4">
          saya memutuskan untuk membagikan pengalaman-pengalaman saya dalam blog ini agar Anda juga bisa merasakan keajaiban dunia ini. saya akan memberikan panduan perjalanan, saran tentang tempat-tempat yang wajib dikunjungi, rekomendasi penginapan, dan tips budgeting yang bermanfaat. saya berharap bahwa blog ini akan menginspirasi Anda untuk menjelajahi dunia dan menciptakan kenangan tak terlupakan.
        </p>
        <p class="font-[Poppins] md:text-base text-sm pt-4">
          saya sangat senang bisa berbagi kisah-kisah petualangan saya dengan Anda. Jangan ragu untuk bergabung dalam perjalanan saya dengan mengikuti blog ini dan mengikuti saya di [IG:alvinn_t.ahmd], di mana saya akan terus memperbarui Anda tentang petualangan terbaru Saya.
        </p>
        <p class="font-[Poppins] md:text-base text-sm pt-4">
          Terima kasih telah membaca "Our Story" saya. saya berharap Anda akan menemukan inspirasi di setiap tulisan saya dan bahwa Anda juga akan membuat kenangan luar biasa dalam perjalanan Anda sendiri. Selamat bersiap-siap untuk petualangan!
        </p>
      </div>
      <div class="md:w-1/2 break-all md:pl-16 pt-12 ">
        <h1 class="text-2xl pb-8">
          Who Are Red Explorers
        </h1>
        <p class="md:text-base text-sm font-[Poppins] ">
          Halo, kami adalah Penjelajah Merah, sekelompok pengembara yang penuh semangat dengan hasrat mendalam untuk menjelajahi dunia ini. Nama "Penjelajah Merah" adalah lambang tekad kami untuk menggali kisah-kisah yang mendalam dan merahnya semangat petualangan yang mengalir dalam diri kami.
        </p>
        <p class="pt-4 md:text-xl text-base font-[Poppins] text-gray-600">
          Mengapa Kami Disebut Penjelajah Merah?
        </p>
        <p class="pt-2 md:text-base text-sm font-[Poppins]">
          1.Semangat Mendalam: Warna merah melambangkan semangat, keberanian, dan hasrat. Kami memandang setiap petualangan sebagai kesempatan untuk mengejar kebenaran dan mengungkap kisah-kisah menarik yang mungkin tersembunyi dalam sejarah.
        </p>
        <p class="pt-2 md:text-base text-sm font-[Poppins] ">
          2.Penjelajahan: Kami adalah para penjelajah sejati yang selalu mencari peluang untuk menjelajahi tempat-tempat baru, mencicipi makanan-makanan khas setempat, dan merasakan budaya yang beragam di seluruh dunia
        </p>
        <p class="pt-4 md:text-xl text-base font-[Poppins] text-gray-600">
          Tujuan kami
        </p>
        <p class="pt-2 md:text-base text-sm font-[Poppins] ">
          Tujuan utama kami adalah berbagi keindahan dunia ini dengan Anda. Kami ingin menginspirasi Anda untuk menjelajahi dunia, merasakan keajaiban alam dan budaya, dan menggali lebih dalam ke dalam sejarah yang kaya dan penuh warna. Di blog ini, kami akan berbagi pengalaman perjalanan kami, tips perjalanan, panduan budaya, dan banyak lagi, semuanya dengan tujuan membantu Anda merencanakan petualangan Anda sendiri.
        </p>
        <p class="pt-4 md:text-xl text-base font-[Poppins] text-gray-600">
          Bergabung dalam Petualangan Kami
        </p>
        <p class="pt-2 md:text-base text-sm font-[Poppins] ">
          Kami sangat senang bisa berbagi pengalaman perjalanan kami dengan Anda dan berharap Anda akan menikmati setiap cerita yang kami bagikan. Silakan bergabung dalam perjalanan kami dengan mengikuti blog ini dan terhubung dengan kami di media sosial kami [IG:alvinn_t.ahmd]
        </p>
        <p class="pt-2 md:text-base text-sm font-[Poppins] ">
          Terima kasih telah mengunjungi blog kami. Kami berharap Anda akan menemukan inspirasi dan pengetahuan baru yang berguna untuk petualangan Anda selanjutnya. Mari kita bersama-sama menjelajahi dunia!
        </p>
      </div>
    </div>
  </div>
  <!-- end tentang2  -->
  <div class="pt-8 pb-20 md:container md:px-12 px-2">
    <div class="md:flex md:flex-row w-full flex-shrink-0 ">
      <div class="md:w-1/2 break-all pt-12">
        <h1 class="text-2xl pb-8">
          About Our Cameraman
        </h1>
        <p class="font-[Poppins] md:text-base text-sm">
          Di balik setiap gambar indah yang Anda lihat dalam blog kami, ada alvin topp, juru kamera handal kami. Dengan keahliannya yang tak tertandingi dalam mengabadikan momen-momen tak terlupakan, [ilham still] adalah penyemangat visual utama perjalanan kami.
        </p>
        <p class="pt-2 font-[Poppins] md:text-base text-sm">
          <a class="text-green-500" target="blank" href="https://alvinntamddd.vercel.app/">Klik di sini</a> untuk melihat portofolio [alvinn_t.ahmd] dan terinspirasi oleh karya-karyanya yang mengagumkan.
        </p>
      </div>
      <div class="md:w-1/2 break-all md:pl-16 pt-12 ">
        <h1 class="text-2xl pb-8">
          What you’ll Learn Here
        </h1>
        <p class="xl:md:text-base text-sm md:text-sm font-[Poppins] ">
          Selamat datang di blog perjalanan kami! Di sini, Anda akan menemukan kisah-kisah petualangan kami yang penuh warna, panduan perjalanan yang bermanfaat, dan wawasan mendalam tentang berbagai destinasi di seluruh dunia. Kami berbagi pengalaman kami untuk menginspirasi Anda menjelajahi dunia, merasakan budaya yang berbeda, dan menciptakan kenangan tak terlupakan dalam perjalanan Anda.
        </p>
        <p class="pt-2 xl:md:text-base text-sm md:text-sm font-[Poppins] ">
          Penjelasan singkat ini menggambarkan esensi blog perjalanan Anda dan tujuan utama Anda dalam berbagi konten. Anda dapat mengadaptasinya sesuai dengan fokus konten dan pesan yang ingin Anda sampaikan.
        </p>
      </div>
    </div>
  </div>
  <!-- //sosmed -->
  <!-- <div class="pt-8 py-20">
    <div class="bg-cover bg-center bg-no-repeat w-full h-full">
      <img src="/storage/img/grup.png" class="absolute">
      <div class="relative pt-28">
        <div class="mx-auto w-[189px] bg-blue-500 h-[52px] text-center pt-4 rounded-md">
          <a href="" class="text-white">
            Follow my instagram
          </a>
        </div>
      </div>
    </div>
  </div> -->
  <!-- end sosmet -->
  @endsection
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
</body>

</html>
<style>
  html {
    scroll-behavior: smooth;
  }
</style>