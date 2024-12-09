<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Dev</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom lighting effect using CSS */
        .hover-light:hover {
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8),
                         0 0 20px rgba(255, 255, 255, 0.5),
                         0 0 30px rgba(255, 255, 255, 0.4);
        }
        body {
            background-image: url('asset/wp3279322.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            overflow: hidden; /* Prevent scrolling */
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
<body class="bg-cover bg-center min-h-screen">
    <!-- Navigation Bar -->
    <header class="flex items-center justify-between py-4 fixed top-0 w-full px-8" style="margin-top: 12px;">
        <!-- Area kiri kosong untuk balancing -->
        <div class="w-1/3"></div>
        
        <!-- Menu Tengah -->
        <div class="w-1/3 flex justify-center space-x-8">
            <a href="index.html" class="text-white font-semibold hover:underline hover-light transition duration-300">HOME</a>
            <a href="berita.html" class="text-white font-semibold hover:underline hover-light transition duration-300">BERITA</a>
            <a href="organ.html" class="text-white font-semibold hover:underline hover-light transition duration-300">ORGANISASI</a>
            <a href="about.html" class="text-white font-semibold hover:underline hover-light transition duration-300">ABOUT US</a>
            <a href="our.html" class="text-white font-semibold hover:underline hover-light transition duration-300">OUR DEV</a>
        </div>
    
        <!-- Tombol Login di sebelah kanan -->
        <div class="w-1/3 flex justify-end space-x-4 login-container">
            <a href="#" class="text-white font-semibold hover:underline hover-light transition duration-300 login-link">LOGIN</a>
            <a href="#" class="text-white font-semibold hover:underline hover-light transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-user"><rect width="18" height="18" x="3" y="3" rx="2"></rect><circle cx="12" cy="10" r="3"></circle><path d="M7 21v-2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2"></path></svg>
            </a>
        </div>
    </header>
    <div class="text-center mt-32">
        <h1 class="text-5xl font-bold text-white">
         OUR TEAM
        </h1>
        <p class="text-lg mt-2 text-white">
         LOREM IPSUM SIR DOLOR DE AMEET joem10K
        </p>
       </div>
       <div class="flex justify-center space-x-8 mt-16">
        <div class="text-center">
         <img alt="Profile picture of AbdeNigga" class="rounded-lg" height="200" src="https://storage.googleapis.com/a1aa/image/fXYyeyf8SLatMo5xJkcqmEIXKeVfkY7RRQgCbwDvxFj8cOZeE.jpg" width="200"/>
         <h2 class="text-xl mt-4 text-white">
          AbdeNigga
         </h2>
         <p class="text-sm text-white">
          Terbitkan dari yang hayam
         </p>
         <p class="text-sm text-white">
          Front DEV.
         </p>
        </div>
        <div class="text-center">
         <img alt="Profile picture of valentino abhi" class="rounded-lg" height="200" src="https://storage.googleapis.com/a1aa/image/WpAfTTzzeNjLbU3CYgk1hBBmHuuiJpO19i5FjkCRbWrjzJzTA.jpg" width="200"/>
         <h2 class="text-xl mt-4 text-white">
          valentino abhi
         </h2>
         <p class="text-sm text-white">
          Anak rajin barbel 15kg
         </p>
         <p class="text-sm text-white">
          Front DEV.
         </p>
        </div>
        <div class="text-center">
         <img alt="Profile picture of Dimas salar" class="rounded-lg" height="200" src="https://storage.googleapis.com/a1aa/image/ikaJizGXAT6fHaAfWYIX8ipDwCTZVvnL38RQBhvs4UeJnTmnA.jpg" width="200"/>
         <h2 class="text-xl mt-4 text-white">
          Dimas salar
         </h2>
         <p class="text-sm text-white">
          Pengeluaran uang receh
         </p>
         <p class="text-sm text-white">
          Front DEV.
         </p>
        </div>
        <div class="text-center">
         <img alt="Profile picture of Sofiyan surya18" class="rounded-lg" height="200" src="https://storage.googleapis.com/a1aa/image/fXYyeyf8SLatMo5xJkcqmEIXKeVfkY7RRQgCbwDvxFj8cOZeE.jpg" width="200"/>
         <h2 class="text-xl mt-4 text-white">
          Sofiyan surya18
         </h2>
         <p class="text-sm text-white">
          Sakit buat27
         </p>
         <p class="text-sm text-white">
          Front DEV.
         </p>
        </div>
       </div>
       <footer class="absolute bottom-0 right-0 p-4">
        <p class="text-sm text-white">
         copyright@co.ttidpunya gua reserved
        </p>
       </footer>
    
</body>
</html>