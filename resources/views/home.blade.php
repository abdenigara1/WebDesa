<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webdesa</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 

</head>
<body class="min-h-screen  bg-cover bg-no-repeat text-white m-0 p-0 duration-700 ease-in-out ">
    <nav class="py-8 flex flex-row justify-center mx-8">
        <ul class="flex flex-row justify-center gap-x-16 text-2xl font-bold font ">
            <a class="hover:underline" href="{{ route('home') }}">HOME</a>
            <a class="hover:underline" href="{{ route('berita') }}">BERITA</a>
            <a class="hover:underline" href="{{ route('org') }}">ORGANISASI</a>
            <a class="hover:underline" href="{{ route('about') }}">ABOUT US</a>
            <a class="hover:underline" href="{{ route('dev') }}">OUR DEV</a>


        </ul>
        
        
        
    </nav>

    <div class="h-96" ></div>



    <div class=" flex justify-center flex-col gap-y-4 items-center pb-16 "  >
   
        <div  class="flex flex-row gap-x-4">
        @foreach($kolom1 as $hero) 
            <a href="">
                <div class="logo-tersi">
                    <div class="absolute inset-0 backdrop-blur-md -z-10"></div>
                    <img class="size-10" src="{{ asset('storage/' . $hero->imgOrganisasi) }}" alt="" srcset="">
                    <h3 class="line-clamp-2 overflow-hidden max-w-36  leading-none ">{{ $hero->Organisasi }}</h3>
                </div>

            </a>
         @endforeach 
   

        </div>
      
        <div  class="flex flex-row gap-x-4">
        @foreach($kolom2 as $hero) 
            <a href="">
                <div class="logo-tersi">
                    <div class="absolute inset-0 backdrop-blur-md -z-10"></div>
                    <img class="size-10" src="{{ asset('storage/' . $hero->imgOrganisasi) }}" alt="" srcset="">
                    <h3 class="line-clamp-2 overflow-hidden max-w-32  leading-none ">{{ $hero->Organisasi }}</h3>
                </div>

            </a>
         @endforeach 
   

        </div>
    </div>
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
<footer class="bg-white  p-4 flex flex-row justify-between items-center bg-opacity-75 ">


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