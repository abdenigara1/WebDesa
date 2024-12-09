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
    
    <div class="flex justify-center mt-64">
        <div class="slider py-16 space-x-4 px-16">
            <a href="#karang-taruna">
                <img alt="Organization 1 Logo" class="h-72" height="288" src="https://storage.googleapis.com/a1aa/image/dOF09lOGqYrrGhtNBZ3M3YypzCT0gzkC1IbSTYwGCmFBiM8E.jpg" width="168"/>
            </a>
            <a href="#program-pkk">
                <img alt="Organization 2 Logo" class="h-72" height="288" src="https://storage.googleapis.com/a1aa/image/zgURKUuSESJKONQvigOXMfej3ELKMCKM5bubZ7qecrkEQkhnA.jpg" width="168"/>
            </a>
            <a href="#lembaga-musyawarah-desa">
                <img alt="Organization 3 Logo" class="h-72" height="288" src="https://storage.googleapis.com/a1aa/image/RyaW8kbLhqpeBadKsjmXL3nfoxlrIBPSe11LHUNXEg9CQkhnA.jpg" width="168"/>
            </a>
            <a href="#posyandu">
                <img alt="Organization 4 Logo" class="h-72" height="288" src="https://storage.googleapis.com/a1aa/image/ukDFFrf9Um34bKUWAvUYw00RcShVQqNLaAn1NpoabWdDEZ4JA.jpg" width="168"/>
            </a>
            <a href="#rukun-tetangga-rukun-warga">
                <img alt="Organization 5 Logo" class="h-72" height="288" src="https://storage.googleapis.com/a1aa/image/L3wz2UOm8CZMBNMeoW7vgoKidosYanG4HTdDvQO2kt4CEZ4JA.jpg" width="168"/>
            </a>
            <a href="#majelis-taklim">
                <img alt="Organization 6 Logo" class="h-72" height="288" src="https://storage.googleapis.com/a1aa/image/LmDBHS4rnWqNNl8vXigBz1bwcF9aB8RezOeq8gJ4DIgDIywTA.jpg" width="168"/>
            </a>
        </div>
    </div>
    <div class="text-center py-8 text-white">
        <h1 class="text-5xl font-bold mt-8">OUR ORGANIZATION</h1>
        <p class="text-sm mt-4">LOREM IPSUM SIR DOLOR DE AMEET joem0k</p>
    </div>

    <!-- Footer -->
    <div id="karang-taruna" class="container mx-auto py-24 px-12">
        <div class="grid grid-cols-1 gap-12">
            <div class="bg-white bg-opacity-20 p-8 rounded-lg shadow-lg flex">
                <img src="https://storage.googleapis.com/a1aa/image/kXRu0IBGDvZVJdxo0enmeXpL5JFfl481r9XWZX2GtVyp0TknA.jpg" alt="Karang Taruna logo" class="w-64 h-64 mr-8">
                <div class="pl-4">
                    <h2 class="text-2xl font-bold">KARANG TARUNA</h2>
                    <p class="mt-4 text-white">
                        organisasi  yang bertujuan untuk memberdayakan masyarakat, terutama di kalangan generasi muda. Organisasi ini berperan dalam berbagai kegiatan sosial, ekonomi, dan budaya, dengan fokus pada pengembangan keterampilan, kreativitas, serta kepedulian sosial anggotanya.
                    </p>
                    <p class="mt-4 text-white">Kegiatan yang dilakukan:</p>
                    <p class="list-disc list-inside mt-2 text-white">
                        Pelatihan Keterampilan: Mengadakan workshop atau pelatihan dalam bidang kerajinan, memasak, atau teknologi informasi. <br>
Kegiatan Sosial: Melaksanakan program bakti sosial, seperti penggalangan dana untuk korban bencana alam atau aksi pembersihan lingkungan.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="program-pkk" class="container mx-auto py-24 px-12">
        <div class="grid grid-cols-1 gap-12">
            <div class="bg-white bg-opacity-20 p-8 rounded-lg shadow-lg flex">
                <div class="text-right w-full">
                    <h2 class="text-2xl font-bold">PROGRAM PKK</h2>
                    <p class="mt-4 text-white">
                        Organisasi  yang dilaksanakan di Indonesia untuk meningkatkan kesejahteraan keluarga dan masyarakat, khususnya bagi perempuan. PKK berfokus pada pemberdayaan perempuan agar dapat berperan aktif dalam pembangunan sosial dan ekonomi.
                    </p>
                    <p class="mt-4 text-white">Kegiatan yang dilakukan:</p>
                    <p class="list-disc list-inside mt-2 text-white">
                        Penyuluhan Kesehatan: Memberikan informasi tentang kesehatan, gizi, dan pola hidup sehat kepada keluarga dan masyarakat. <br>
Pendidikan Keluarga: Mengedukasi keluarga tentang pentingnya pendidikan, baik untuk anak-anak maupun untuk orang dewasa, guna meningkatkan kualitas sumber daya manusia.
                    </p>
                </div>
                <img src="https://storage.googleapis.com/a1aa/image/iDMjyz7xNewBNqm7TegRgSA1CZqEaxlfMQEHCLtKV3pl0TknA.jpg" alt="Program PKK logo" class="w-64 h-64 ml-8 self-center">
            </div>
        </div>
    </div>

    <div id="lembaga-musyawarah-desa" class="container mx-auto py-24 px-12">
        <div class="grid grid-cols-1 gap-12">
            <div class="bg-white bg-opacity-20 p-8 rounded-lg shadow-lg flex">
                <img src="https://storage.googleapis.com/a1aa/image/kXRu0IBGDvZVJdxo0enmeXpL5JFfl481r9XWZX2GtVyp0TknA.jpg" alt="Karang Taruna logo" class="w-64 h-64 mr-8">
                <div class="pl-4">
                    <h2 class="text-2xl font-bold">LEMBAGA MUSYAWARAH DESA</h2>
                    <p class="mt-4 text-white">
                        Organisasi yang dibentuk di tingkat desa  untuk memberikan ruang bagi masyarakat dalam proses pengambilan keputusan dan perencanaan pembangunan desa. berfungsi sebagai wadah musyawarah bagi warga desa untuk menyampaikan aspirasi, ide, dan kebutuhan mereka.
                    </p>
                    <p class="mt-4 text-white">Kegiatan yang dilakukan:</p>
                    <p class="list-disc list-inside mt-2 text-white">
                        Forum Musyawarah: Menjadi tempat bagi masyarakat untuk berdiskusi dan merumuskan kebijakan atau program pembangunan desa secara bersama-sama. <br>
Perencanaan Pembangunan: Membantu dalam menyusun rencana pembangunan desa yang berdasarkan kebutuhan dan prioritas masyarakat.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="posyandu" class="container mx-auto py-24 px-12">
        <div class="grid grid-cols-1 gap-12">
            <div class="bg-white bg-opacity-20 p-8 rounded-lg shadow-lg flex">
                <div class="text-right w-full">
                    <h2 class="text-2xl font-bold">POSYANDU</h2>
                    <p class="mt-4 text-white">
                        Suatu organisasi layanan kesehatan masyarakat di tingkat desa yang fokus pada kesehatan ibu dan anak. Posyandu bertujuan untuk meningkatkan kesehatan dan gizi masyarakat, serta memberikan pelayanan kesehatan dasar secara mudah diakses oleh warga.
                    </p>
                    <p class="mt-4 text-white">Kegiatan yang dilakukan:</p>
                    <p class="list-disc list-inside mt-2 text-white">
                        Pemeriksaan Kesehatan: Melakukan pemeriksaan kesehatan rutin untuk ibu hamil, ibu menyusui, dan anak balita, termasuk pemantauan pertumbuhan dan perkembangan anak.  <br>
Imunisasi: Memberikan vaksinasi kepada anak-anak sesuai dengan jadwal imunisasi yang ditetapkan, untuk mencegah penyakit menular.
                    </p>
                </div>
                <img src="https://storage.googleapis.com/a1aa/image/iDMjyz7xNewBNqm7TegRgSA1CZqEaxlfMQEHCLtKV3pl0TknA.jpg" alt="Program PKK logo" class="w-64 h-64 ml-8 self-center">
            </div>
        </div>
    </div>

    <div id="rukun-tetangga-rukun-warga" class="container mx-auto py-24 px-12">
        <div class="grid grid-cols-1 gap-12">
            <div class="bg-white bg-opacity-20 p-8 rounded-lg shadow-lg flex">
                <img src="https://storage.googleapis.com/a1aa/image/kXRu0IBGDvZVJdxo0enmeXpL5JFfl481r9XWZX2GtVyp0TknA.jpg" alt="Karang Taruna logo" class="w-64 h-64 mr-8">
                <div class="pl-4">
                    <h2 class="text-2xl font-bold">RUKUN TETANGGA & RUKUN WARGA</h2>
                    <p class="mt-4 text-white">
                        Struktur organisasi masyarakat di tingkat desa atau kelurahan . Keduanya berfungsi untuk membangun kerukunan, mengatur kehidupan sosial, dan meningkatkan partisipasi masyarakat dalam pembangunan.
                    </p>
                    <p class="mt-4 text-white">Kegiatan yang dilakukan: (RT)</p>
                    <p class="list-disc list-inside mt-2 text-white">
                        Menyediakan wadah untuk komunikasi antarwarga.
Mengorganisir kegiatan sosial, seperti perayaan hari besar atau kerja bakti.
                    </p>
                    <p class="mt-4 text-white">Kegiatan yang dilakukan: (RW)</p>
                    <p class="list-disc list-inside mt-2 text-white">
                        Mengkoordinasi kegiatan antar RT dalam satu wilayah.
Menyusun program-program pembangunan dan kegiatan sosial di tingkat yang lebih luas.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="majelis-taklim" class="container mx-auto py-24 px-12">
        <div class="grid grid-cols-1 gap-12">
            <div class="bg-white bg-opacity-20 p-8 rounded-lg shadow-lg flex">
                <div class="text-right w-full">
                    <h2 class="text-2xl font-bold">MAJELIS TAKLIM</h2>
                    <p class="mt-4 text-white">
                        Suatu organisasi yang biasanya terdiri dari masyarakat yang berkumpul untuk belajar dan mendalami ajaran agama Islam,  berfokus pada peningkatan pemahaman agama, serta pembinaan akhlak dan moral peserta.
                    </p>
                    <p class="mt-4 text-white">Kegiatan yang dilakukan:</p>
                    <p class="list-disc list-inside mt-2 text-white">
                        Pembelajaran Agama: Mengadakan pengajian, ceramah, atau diskusi mengenai berbagai aspek ajaran Islam, seperti akidah, fiqh, dan akhlak.  <br>
Peningkatan Pemahaman: Memberikan pemahaman yang lebih mendalam tentang Al-Qur'an, hadis, dan praktik kehidupan sehari-hari dalam konteks agama.
                    </p>
                </div>
                <img src="https://storage.googleapis.com/a1aa/image/iDMjyz7xNewBNqm7TegRgSA1CZqEaxlfMQEHCLtKV3pl0TknA.jpg" alt="Program PKK logo" class="w-64 h-64 ml-8 self-center">
            </div>
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
</body>
</html>