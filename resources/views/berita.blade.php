<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>

    <!-- Load CSS -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:wght@100..900&display=swap" rel="stylesheet">

    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
    .hover-light {
        transition: text-shadow 0.3s ease-in-out;  /* Transisi halus pada text-shadow */
    }

    .hover-light:hover {
        text-shadow: 0 5px 20px rgba(255, 255, 255, 0.8),   /* Glow pertama, sedikit lebih terang */
                     0 10px 30px rgba(255, 255, 255, 0.5),   /* Glow lebih panjang */
                     0 20px 50px rgba(255, 255, 255, 0.2);   /* Glow yang lebih bias di ujung */
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

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
    <header class="header flex items-center justify-between  fixed top-0 w-full px-8" style="margin-top: 12px;">
        <!-- Empty Space for Balancing -->
        <div class="w-1/3"></div>

        <!-- Middle Menu -->
        <nav class=" flex flex-row justify-center mx-8 pt-12 pb-2">
            <ul class="flex flex-row justify-center gap-x-16 text-2xl font-inter font-bold text-white ">
                <a class="hover:underline  hover:scale-105 transition-transform duration-300   hover:shadow-white" href="{{ route('home') }}">HOME</a>
                <a class="hover:underline  hover:scale-105 transition-transform duration-300   hover:shadow-white" href="{{ route('berita') }}">BERITA</a>
                <a class="hover:underline  hover:scale-105 transition-transform duration-300   hover:shadow-white" href="{{ route('org') }}">ORGANISASI</a>
                <a class="hover:underline  hover:scale-105 transition-transform duration-300   hover:shadow-white" href="{{ route('contact') }}">ABOUT US</a>
                <a class="hover:underline  hover:scale-105 transition-transform duration-300   hover:shadow-white" href="{{ route('developer') }}">OUR DEV</a>
            </ul>
        </nav>

        <!-- Login Button -->
        <div class="w-1/3 flex justify-end space-x-4 login-container">
            <a class="text-white font-semibold hover:underline hover-light transition duration-300 login-link" href="#">LOGIN</a>
            <a class="text-white font-semibold hover:underline hover-light transition duration-300" href="#">
                <svg class="lucide lucide-square-user" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <rect height="18" rx="2" width="18" x="3" y="3"></rect>
                    <circle cx="12" cy="10" r="3"></circle>
                    <path d="M7 21v-2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2"></path>
                </svg>
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <div class="relative z-10 text-center text-white mt-40">
        <h1 class="text-6xl font-bold">HOT NEWS</h1>
        <p class="mt-2">LOREM IPSUM SIR DOLOR DE AMET</p>
    </div>

    <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 px-10 py-10 mt-10">
        <!-- Dynamic Cards -->
        @foreach($news1 as $berita) 

        <div class="bg-black bg-opacity-50 p-4 rounded-lg text-white flex max-h-xl overflow-hidden">
            <img src="{{ asset('storage/' . $berita->imgBeritaA) }}" alt="Image of a village" class="w-1/3 h-60 object-cover rounded-lg mb-4">
            <div class="ml-4 max-h-xl overflow-hidden">
                <h2 class="text-lg font-semibold line-clamp-2 overflow-hidden">{{ $berita->judulBerita }}</h2>
                <p class="mt-2 opacity-60 line-clamp-6 "> {{ $berita->berita }}.</p>
                <a href="{{ route('beritanews', ['id' => $berita->id]) }}"><button class="mt-4 bg-green-500 text-white px-4 py-2 rounded">BACA SELENGKAPNYA</button></a>
            </div>
        </div>
        @endforeach
    </div>

    <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 px-10 ">
        <!-- Dynamic Cards -->
        @foreach($news2 as $berita) 

        <div class="bg-black bg-opacity-50 p-4 rounded-lg text-white flex max-h-xl overflow-hidden ">
            <img src="{{ asset('storage/' . $berita->imgBeritaA) }}" alt="Image of a village" class="w-1/3 h-60 object-cover rounded-lg mb-4">
            <div class="ml-4 max-h-xl overflow-hidden">
                <h2 class="text-lg font-semibold line-clamp-2 overflow-hidden">{{ $berita->judulBerita }}</h2>
                <p class="mt-2 opacity-60 line-clamp-6 ">{{$berita->berita }}.</p>
                <a href="{{ route('beritanews', ['id' => $berita->id])}}"><button class="mt-4 bg-green-500 text-white px-4 py-2 rounded">BACA SELENGKAPNYA</button></a>
            </div>
        </div>
        @endforeach
    </div>




    <!-- JavaScript -->
    <script>
        // Change Background
        let backgrounds = @json($backgrounds ?? []);
        let currentIndex = 0;

        function changeBackground() {
            if (backgrounds.length > 0) {
                document.body.style.backgroundImage = `url('{{ asset('storage') }}/${backgrounds[currentIndex]}')`;
                currentIndex = (currentIndex + 1) % backgrounds.length;
            } else {
                console.warn('No backgrounds found in database.');
            }
        }

        setInterval(changeBackground, 8000);
        changeBackground();

        // Hide Header on Scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            header.style.opacity = window.scrollY > 0 ? '0' : '0.8';
        });
    </script>



</body>
<footer class="bg-white  p-4 flex flex-row justify-between items-center bg-opacity-75 mt-20 ">


    <div class="flex flex-row justify-center pl-2"> 
        <div class="h-8 border-l-2 border-gray-900 mx-2"></div>

        <div class="flex flex-col  ">
            <p class=" font-bold text-sm  text-black leading-none opacity-80">DESA GAMOL CITY</p>
            <p class="font-bold text-xs text-black leading-none opacity-75">SALATIGA, CENTER JAVA</p>
            
        </div>


    </div>


    <div class="flex flex-row gap-x-4 pr-2" >
        <a href=""><img class="size-6 opacity-60" src="{{ asset('src/youtube.png')}}" alt=""></a>
        <a href=""><img class="size-6 opacity-60" src="{{ asset('src/facebook.png')}}" alt=""></a>
        <a href=""><img class="size-6 opacity-60" src="{{ asset('src/instagram.png')}}" alt=""></a>
   



    </div>



</footer>


</html>
