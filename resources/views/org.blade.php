<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organisasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .background-image {
            background-image: url('asset/wp3279322.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-color: rgba(0, 0, 0, 0.7); /* Darken the background */
        }
        .slider {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            justify-content: center;
        }
        .slider img {
            scroll-snap-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 1rem;
        }
        .slider img:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 20px rgba(255, 255, 255, 0.5);
        }
        .hover-light:hover {
            text-shadow: 0 0 10px rgba(185, 178, 146, 0.8),
                         0 0 20px rgba(255, 255, 255, 0.5),
                         0 0 30px rgba(255, 255, 255, 0.4);
        }
        .hover-border-light:hover {
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.8),
                        0 0 20px rgba(255, 255, 255, 0.5),
                        0 0 30px rgba(255, 255, 255, 0.4);
            transform: scale(1.05);
        }
        html {
            scroll-behavior: smooth;
        }
        .header {
            transition: opacity 0.5s ease-out;
        }
        .header.hidden {
            opacity: 0;
            pointer-events: none;
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
<body class="background-image min-h-screen">
    <!-- Navigation Bar -->
    <header class="header flex items-center justify-between py-4 fixed top-0 w-full px-8" style="margin-top: 12px; opacity: 1;">
        <!-- Area kiri kosong untuk balancing -->
        <div class="w-1/3"></div>
        
        <!-- Menu Tengah -->
        <div class="w-1/3 flex justify-center space-x-8">
            <a href="{{ route('home') }}" class="text-white font-semibold hover:underline hover-light transition duration-300">HOME</a>
            <a href="{{ route('berita') }}" class="text-white font-semibold hover:underline hover-light transition duration-300">BERITA</a>
            <a href="{{ route('org') }}" class="text-white font-semibold hover:underline hover-light transition duration-300">ORGANISASI</a>
            <a href="{{ route('about') }}" class="text-white font-semibold hover:underline hover-light transition duration-300">ABOUT US</a>
            <a href="{{ route('dev') }}" class="text-white font-semibold hover:underline hover-light transition duration-300">OUR DEV</a>
        </div>
    
        <!-- Tombol Login di sebelah kanan -->
        <div class="w-1/3 flex justify-end space-x-4 login-container">
            <a href="#" class="text-white font-semibold hover:underline hover-light transition duration-300 login-link">LOGIN</a>
            <a href="#" class="text-white font-semibold hover:underline hover-light transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-user"><rect width="18" height="18" x="3" y="3" rx="2"></rect><circle cx="12" cy="10" r="3"></circle><path d="M7 21v-2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2"></path></svg>
            </a>
        </div>
    </header>
    
    <div class="flex justify-center mt-64">
    <div class="slider py-16 space-x-4 px-16">
        @foreach ($heroes as $hero)
            <a href="#organization-{{ $hero->id }}">
                <img 
                    alt="{{ $hero->header ?? 'Organization Logo' }}" 
                    class="h-72" 
                    height="288" 
                    src="{{ asset('storage/' . $hero->imgOrganisasi) }}" 
                    width="168"
                />
            </a>
        @endforeach
    </div>
</div>








    <div class="text-center py-8 text-white">
        <h1 class="text-5xl font-bold mt-8">OUR ORGANIZATION</h1>
        <p class="text-sm mt-4">LOREM IPSUM SIR DOLOR DE AMEET joem0k</p>
    </div>

    <div id="karang-taruna" class="container mx-auto py-24 px-12">
    <div class="grid grid-cols-1 gap-12">
        @foreach ($heroes as $index => $hero)
            @if ($index % 2 == 0)
                <!-- Tampilan Kiri -->
                <div class="bg-white bg-opacity-20 p-8 rounded-lg shadow-lg flex">
                    <img src="{{ asset('storage/' . $hero->imgOrganisasi) }}" alt="Karang Taruna logo" class="w-64 h-64 mr-8">
                    <div class="pl-4">
                        <h2 class="text-2xl font-bold">{{ $hero->Organisasi }}</h2>
                        <p class="mt-4 text-white">
                            {{ $hero->Deskripsi }}
                        </p>
                    </div>
                </div>
            @else
                <!-- Tampilan Kanan -->
                <div class="bg-white bg-opacity-20 p-8 rounded-lg shadow-lg flex">
                    <div class="text-right w-full">
                        <h2 class="text-2xl font-bold">{{ $hero->Organisasi }}</h2>
                        <p class="mt-4 text-white">
                            {{ $hero->Deskripsi }}
                        </p>
                    </div>
                    <img src="{{ asset('storage/' . $hero->imgOrganisasi) }}" alt="Program PKK logo" class="w-64 h-64 ml-8 self-center">
                </div>
            @endif
        @endforeach
    </div>
</div>

    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.style.opacity = '0.8';
            }
            if (window.scrollY > 200) {
                header.style.opacity = '0.5';
            }
            if (window.scrollY > 300) {
                header.style.opacity = '0.2';
            }
            if (window.scrollY > 400) {
                header.style.opacity = '0';
            }
            if (window.scrollY > 500) {
                header.classList.add('hidden');
            } else {
                header.classList.remove('hidden');
            }
        });
    </script>

    <script>
    
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