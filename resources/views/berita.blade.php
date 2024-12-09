<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Berita
  </title>
  @vite('resources/css/app.css')
    <link rel="stylesheet" href="output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 






  
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   /* Custom lighting effect using CSS */
        .hover-light:hover {
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8),
                         0 0 20px rgba(255, 255, 255, 0.5),
                         0 0 30px rgba(255, 255, 255, 0.4);
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        /* Animation for hiding and showing the login link */
        .login-link {
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
            transform: translateX(100%);
            opacity: 0;
        }
        .login-container:hover .login-link {
            transform: translateX(0);
            opacity: 1;
        }
  </style>
 </head>
 <body class="bg-cover bg-center min-h-screen" style="background-image: url('asset/wp3279322.jpg'); background-attachment: fixed;">
  <!-- Navigation Bar -->
  <header class="header flex items-center justify-center py-4  top-0 w-full px-8" style="margin-top: 12px; ">
   <!-- Area kiri kosong untuk balancing -->
   <!-- Menu Tengah -->
   <nav class="py-8 flex flex-row justify-center mx-8 text-white">
        <ul class="flex flex-row justify-center gap-x-16 text-2xl font-bold font ">
            <a class="hover:underline" href="{{ route('home') }}">HOME</a>
            <a class="hover:underline" href="{{ route('berita') }}">BERITA</a>
            <a class="hover:underline" href="{{ route('org') }}">ORGANISASI</a>
            <a class="hover:underline" href="{{ route('about') }}">ABOUT US</a>
            <a class="hover:underline" href="{{ route('dev') }}">OUR DEV</a>


        </ul>
        
        
        
    </nav>
   <!-- Tombol Login di sebelah kanan -->
   <div class="w-1/3 flex justify-end space-x-4 login-container">
    <a class="text-white font-semibold hover:underline hover-light transition duration-300 login-link" href="#">
     LOGIN
    </a>
    <a class="text-white font-semibold hover:underline hover-light transition duration-300" href="#">
     <svg class="lucide lucide-square-user" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
      <rect height="18" rx="2" width="18" x="3" y="3">
      </rect>
      <circle cx="12" cy="10" r="3">
      </circle>
      <path d="M7 21v-2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2">
      </path>
     </svg>
    </a>
   </div>
  </header>
  <div class="relative z-10 text-center text-white mt-32">
   <h1 class="text-6xl font-bold">
    HOT NEWS
   </h1>
   <p class="mt-2">
    LOREM IPSUM SIR DOLOR DE AMET
   </p>
  </div>
  <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 px-10 py-10 mt-10">
   <div class="bg-black bg-opacity-50 p-4 rounded-lg text-white flex">
    <img alt="Image of a village with mountains in the background" class="w-1/3 h-60 object-cover rounded-lg mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/v9zPBbNfqsU0eUIQrvTpfD0VcfzMKuk6FXYwwMeYHxmeIKy8E.jpg" width="300"/>
    <div class="ml-4">
     <h2 class="text-lg font-semibold">
      1. DESA LARAMO KEC. LEMBO MEWAKILI KONAWAE UTARA MENGIKUTI ...
     </h2>
     <p class="mt-2 opacity-60">
      Desa Laramoe Kec. Lembo terpilih menjadi perwakilan Kec. Konawae Utara dalam mengikuti lomba 10 program PKK tingkat Provinsi Sultra. Tahun 2022. Segala persiapan telah dilakukan untuk
     </p>
     <a href="beritanews1.html">
      <button class="mt-4 bg-green-500 text-white px-4 py-2 rounded">
       BACA SELENGKAPNYA
      </button>
     </a>
    </div>
   </div>
   <div class="bg-black bg-opacity-50 p-4 rounded-lg text-white flex">
    <img alt="Image of a village with mountains in the background" class="w-1/3 h-60 object-cover rounded-lg mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/v9zPBbNfqsU0eUIQrvTpfD0VcfzMKuk6FXYwwMeYHxmeIKy8E.jpg" width="300"/>
    <div class="ml-4">
     <h2 class="text-lg font-bold">
      2. DESA LARAMO KEC. LEMBO MEWAKILI KONAWAE UTARA MENGIKUTI ...
     </h2>
     <p class="mt-2 opacity-60">
      Desa Laramoe Kec. Lembo terpilih menjadi perwakilan Kec. Konawae Utara dalam mengikuti lomba 10 program PKK tingkat Provinsi Sultra. Tahun 2022. Segala persiapan telah dilakukan untuk
     </p>
     <a href="#">
      <button class="mt-4 bg-green-500 text-white px-4 py-2 rounded">
       BACA SELENGKAPNYA
      </button>
     </a>
    </div>
   </div>
   <div class="bg-black bg-opacity-50 p-4 rounded-lg text-white flex">
    <img alt="Image of a village with mountains in the background" class="w-1/3 h-60 object-cover rounded-lg mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/v9zPBbNfqsU0eUIQrvTpfD0VcfzMKuk6FXYwwMeYHxmeIKy8E.jpg" width="300"/>
    <div class="ml-4">
     <h2 class="text-lg font-bold">
      3. DESA LARAMO KEC. LEMBO MEWAKILI KONAWAE UTARA MENGIKUTI ...
     </h2>
     <p class="mt-2 opacity-60">
      Desa Laramoe Kec. Lembo terpilih menjadi perwakilan Kec. Konawae Utara dalam mengikuti lomba 10 program PKK tingkat Provinsi Sultra. Tahun 2022. Segala persiapan telah dilakukan untuk
     </p>
     <a href="#">
      <button class="mt-4 bg-green-500 text-white px-4 py-2 rounded">
       BACA SELENGKAPNYA
      </button>
     </a>
    </div>
   </div>
   <div class="bg-black bg-opacity-50 p-4 rounded-lg text-white flex">
    <img alt="Image of a village with mountains in the background" class="w-1/3 h-60 object-cover rounded-lg mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/v9zPBbNfqsU0eUIQrvTpfD0VcfzMKuk6FXYwwMeYHxmeIKy8E.jpg" width="300"/>
    <div class="ml-4">
     <h2 class="text-lg font-bold">
      4. DESA LARAMO KEC. LEMBO MEWAKILI KONAWAE UTARA MENGIKUTI ...
     </h2>
     <p class="mt-2 opacity-60">
      Desa Laramoe Kec. Lembo terpilih menjadi perwakilan Kec. Konawae Utara dalam mengikuti lomba 10 program PKK tingkat Provinsi Sultra. Tahun 2022. Segala persiapan telah dilakukan untuk
     </p>
     <a href="#">
      <button class="mt-4 bg-green-500 text-white px-4 py-2 rounded">
       BACA SELENGKAPNYA
      </button>
     </a>
    </div>
   </div>
  </div>
  <script>
   window.addEventListener('scroll', function() {
        const header = document.querySelector('.header');
        if (window.scrollY > 0) {
            header.style.opacity = '0';
            header.classList.add('hidden');
        } else {
            header.style.opacity = '0.8';
            header.classList.remove('hidden');
        }
    });
    let backgrounds = @json($backgrounds ?? []); // Data background dari controller
        let currentIndex = 0;

        // Fungsi untuk mengganti background
        function changeBackground() {
            if (backgrounds.length > 0) {
                document.body.style.backgroundImage = `url('{{ asset('storage') }}/${backgrounds[currentIndex]}')`;
                currentIndex = (currentIndex + 1) % backgrounds.length; // Rotasi ke background berikutnya
            } else {
                console.warn('No backgrounds found in database.');
            }
        }

        // Jalankan pergantian background setiap 8 detik
        setInterval(changeBackground, 8000);

        // Set background pertama kali
        changeBackground();





  </script>
 </body>
</html>