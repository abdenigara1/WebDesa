<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- Vite Integration -->
    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100..900;1,100..900&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
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

    <!-- JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var header = document.querySelector("header");
            var lastScrollTop = 0;

            window.addEventListener("scroll", function() {
                var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop) {
                    header.classList.add("hidden");
                } else {
                    header.classList.remove("hidden");
                }
                lastScrollTop = scrollTop;
            });
        });
    </script>

</head>

<body class="bg-cover bg-center min-h-screen" style="background-image: url('{{ asset('src/1.jpg') }}'); background-attachment: fixed;">
@if(session('success')) 
        <div style="color: green;">{{ session('success') }}</div>
    @endif

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

    <!-- OUR LOCATION Section -->
    <section class="text-center pt-48">
        <h1 class="text-5xl font-bold text-white">OUR LOCATION</h1>
        <p class="mt-2 text-white">LOREM IPSUM SIR DOLOR DE AMEET</p>

        <div class="flex justify-center mt-10">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31665.222974808876!2d110.3354202108398!3d-7.223397999999998!2m3!1f0!2f0!3f0!2m3!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7080d31673a565%3A0xc09c8790f55e2f51!2sPesona%203%20Karaoke!5e0!3m2!1sid!2sid!4v1734459070258!5m2!1sid!2sid" 
                width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <!-- CONTACT US Section -->
    <form action="{{ route('message.store') }}" method="POST">
        @csrf
        <section class="flex items-center justify-center mt-20">
            <div class="text-center text-white w-[700px]">
                <h1 class="text-5xl font-bold">CONTACT US</h1>
                <p class="mt-2">BERITAHU KAMI</p>

                <div class="mt-8 space-y-4">
                    <div class="flex space-x-4">
                        <input type="text" name="name" placeholder="NAMA..." class="input-field w-1/2 p-4 bg-white bg-opacity-20 text-white placeholder-white rounded-lg focus:outline-none">
                        <input type="email" name="email" placeholder="EMAIL..." class="input-field w-1/2 p-4 bg-white bg-opacity-20 text-white placeholder-white rounded-lg focus:outline-none">
                    </div>
                    <textarea name="message" placeholder="PESAN..." class="input-field w-full p-4 h-52 bg-white bg-opacity-20 text-white placeholder-white rounded-lg focus:outline-none"></textarea>
                </div>
                <button type="submit" class="mt-4 p-2 bg-blue-500 text-white rounded-lg">SEND MESSAGE</button>
            </div>
        </section>
    </form>


    

    <!-- MEDIA SOSIAL Section -->
    <section class="flex flex-col items-center justify-center mt-20 px-8">
        <h1 class="text-white text-5xl font-bold mb-8 text-center">MEDIA SOSIAL</h1>
        <!-- Konten Media Sosial Tambahan Bisa Ditambahkan Di Sini -->
    </section>

    <div class="flex flex-row justify-around mt-10">

        <div class="flex flex-col">
            <a href="" class="flex  flex-row" >
                <img class="size-16" src="{{ asset('src/facebook.png')}}" alt="yt">
                <div class="flex flex-col justify-center items-center" >
                    <h4 class="font-bold text-white">FACEBOOK</h4>
                    <h4 class="font-bold text-white">AGIM MUKTI</h4>
                </div>
            </a>
            <a href="" class="flex  flex-row" >
                <img class="size-16" src="{{ asset('src/instagram.png')}}" alt="yt">
                <div class="flex flex-col justify-center items-center" >
                <h4 class="font-bold text-white">INSTAGRAM</h4>
                <h4 class="font-bold text-white">SUKABAPAK</h4>
                </div>
            </a>
            <a href="" class="flex  flex-row" >
                <img class="size-16" src="{{ asset('src/youtube.png')}}" alt="yt">
                <div class="flex flex-col" >
                <h4 class="font-bold text-white">YOUTUBE</h4>
                <h4 class="font-bold text-white">OMYOMERS</h4>
                </div>
            </a>
        </div>
        <div class="flex flex-col justify-center text-center">
            <h2 class="text-white font-extrabold" >OUR SHOWCASE</h2>
            <img class="max-w-80" src="{{ asset('src/1.jpg')}}" alt="promote">
    
        </div>


    </div>



</body>
</html>
