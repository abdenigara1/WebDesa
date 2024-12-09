<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom lighting effect using CSS */
        .hover-light:hover {
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8),
                         0 0 20px rgba(255, 255, 255, 0.5),
                         0 0 30px rgba(255, 255, 255, 0.4);
        }
        .hide-on-scroll {
            transition: top 0.3s;
        }
        .hide-on-scroll.hidden {
            top: -100px;
        }
        .input-field::placeholder {
            padding-left: 10px;
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
<body class="bg-cover bg-center min-h-screen" style="background-image: url('asset/wp3279322.jpg'); background-attachment: fixed;">
    <!-- Navigation Bar -->
    <header class="flex items-center justify-between py-4 fixed top-0 w-full px-8 hide-on-scroll" style="margin-top: 12px;">
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

    <!-- OUR LOCATION Section -->
    <div class="text-center mt-32">
        <h1 class="text-5xl font-bold text-white">
            OUR LOCATION
        </h1>
        <p class="mt-2 text-white">
            LOREM IPSUM SIR DOLOR DE AMEET
        </p>
    </div>
    <div class="flex justify-center mt-10">
        <div class="relative" style="width: 1000px; height: 557px;">
            <iframe class="w-full h-full border-4 border-green-500" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15828.598233126626!2d110.4972661!3d-7.3370958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a79ce86e50001%3A0x7c83954c6b6a3ccf!2sBhakti%20Semesta%20Polytechnic!5e0!3m2!1sid!2sid!4v1732179326371!5m2!1sid!2sid" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <!-- CONTACT US Section -->
    <div class="flex items-center justify-center h-screen mt-10">
        <div class="text-center text-white w-[700px]">
            <h1 class="text-5xl font-bold">CONTACT US</h1>
            <p class="mt-2">LOREM IPSUM SIR DOLOR DE AMEET <span class="italic">jeem0k</span></p>
            <div class="mt-8 space-y-4">
                <div class="flex space-x-4">
                    <input type="text" placeholder="NAMA..." class="input-field w-1/2 p-4 bg-white bg-opacity-20 text-white placeholder-white rounded-lg focus:outline-none">
                    <input type="email" placeholder="EMAIL..." class="input-field w-1/2 p-4 bg-white bg-opacity-20 text-white placeholder-white rounded-lg focus:outline-none">
                </div>
                <textarea placeholder="PESAN..." class="input-field w-full p-4 h-52 bg-white bg-opacity-20 text-white placeholder-white rounded-lg focus:outline-none"></textarea>
            </div>
        </div>
    </div>
    <!-- MEDIA SOSIAL Section -->
    <div class="flex flex-col items-center justify-center min-h-screen  px-8">
        <h1 class="text-white text-5xl font-bold mb-8 text-center">
         MEDIA SOSIAL
        </h1>
        <div class="flex items-center justify-center">
         <div class="mr-8 space-y-4">
          <div class="flex items-center space-x-4 bg-gray-800 bg-opacity-50 px-8 py-4 rounded-lg">
           <svg height="48px" viewBox="0 0 48 48" width="48px" xmlns="http://www.w3.org/2000/svg">
            <title>
             Tiktod
            </title>
            <g fill="none" fill-rule="evenodd" id="Icon/Social/tiktok-color" stroke="none" stroke-width="1">
             <g id="Group-7" transform="translate(8.000000, 6.000000)">
              <path d="M29.5248245,9.44576327 C28.0821306,9.0460898 26.7616408,8.29376327 25.6826204,7.25637551 C25.5109469,7.09719184 25.3493143,6.92821224 25.1928245,6.75433469 C23.9066204,5.27833469 23.209151,3.38037551 23.2336408,1.42290612 L17.3560898,1.42290612 L17.3560898,23.7086204 C17.3560898,27.7935184 15.1520082,29.9535184 12.416498,29.9535184 C11.694049,29.9611102 10.9789469,29.8107429 10.3213959,29.5124571 C9.6636,29.2144163 9.07951837,28.7758041 8.60955918,28.2272327 C8.1398449,27.6789061 7.79551837,27.0340898 7.60180408,26.3385796 C7.4078449,25.6430694 7.36890612,24.9132735 7.48743673,24.2008653 C7.60596735,23.4884571 7.87902857,22.8105796 8.28751837,22.2154776 C8.69625306,21.6198857 9.23037551,21.1212735 9.85241633,20.7546612 C10.474702,20.3878041 11.1694776,20.1617633 11.8882531,20.0924571 C12.6070286,20.023151 13.3324163,20.1122939 14.0129878,20.3535184 L14.0129878,14.3584163 C13.4889061,14.2430694 12.9530694,14.1862531 12.416498,14.1894367 L12.3917633,14.1894367 C10.2542939,14.1943347 8.16604898,14.8325388 6.39127347,16.0234776 C4.61649796,17.2149061 3.23429388,18.9051918 2.41976327,20.8812735 C1.60523265,22.8578449 1.39486531,25.0310694 1.8151102,27.1269061 C2.2351102,29.2227429 3.2671102,31.1469061 4.78033469,32.6564571 C6.29380408,34.1660082 8.22066122,35.1933551 10.3174776,35.6082122 C12.4142939,36.0230694 14.5870286,35.8073143 16.561151,34.9878857 C18.5355184,34.1682122 20.2226204,32.7820898 21.409151,31.0041306 C22.5959265,29.2264163 23.2289878,27.136702 23.228498,24.9992327 L23.228498,12.8155592 C25.5036,14.392702 28.2244163,15.134498 31.1289061,15.1886204 L31.1289061,9.68551837 C30.5869469,9.66568163 30.049151,9.5851102 29.5248245,9.44576327" fill="#FE2C55" id="Fill-1">
              </path>
              <path d="M25.195102,6.75428571 C24.7946939,6.47510204 24.4148571,6.1675102 24.0587755,5.83346939 C22.8210612,4.66016327 22.0062857,3.11020408 21.7420408,1.42530612 C21.6622041,0.954367347 21.6220408,0.47755102 21.6220408,0 L15.7444898,0 L15.7444898,22.6408163 C15.7444898,27.5069388 13.5404082,28.5183673 10.804898,28.5183673 C10.0829388,28.5262041 9.36783673,28.3758367 8.71028571,28.0773061 C8.0524898,27.7792653 7.46791837,27.3406531 6.99820408,26.7920816 C6.5282449,26.2437551 6.18440816,25.5989388 5.99044898,24.9034286 C5.7964898,24.2079184 5.75755102,23.4781224 5.87583673,22.7657143 C5.99461224,22.053551 6.26767347,21.3756735 6.67640816,20.7800816 C7.08489796,20.1847347 7.61902041,19.6861224 8.24106122,19.3195102 C8.86334694,18.952898 9.55787755,18.7266122 10.276898,18.6573061 C10.9959184,18.588 11.7208163,18.6773878 12.4016327,18.9183673 L12.4016327,12.9328163 C5.40489796,11.8236735 0,17.4783673 0,23.5760816 C0.00465306122,26.4426122 1.14514286,29.1898776 3.17191837,31.216898 C5.19869388,33.2434286 7.94595918,34.3839184 10.8124898,34.3885714 C16.7730612,34.3885714 21.6220408,30.7444898 21.6220408,23.5760816 L21.6220408,11.3924082 C23.8995918,12.9795918 26.6204082,13.7142857 29.524898,13.7632653 L29.524898,8.26040816 C27.9658776,8.18914286 26.4617143,7.66604082 25.195102,6.75428571" fill="#25F4EE" id="Fill-3">
              </path>
              <path d="M21.6220653,23.5764245 L21.6220653,11.392751 C23.8996163,12.9794449 26.6204327,13.7141388 29.5251673,13.7633633 L29.5251673,9.44581224 C28.0822286,9.04613878 26.7617388,8.29381224 25.6824735,7.25617959 C25.5110449,7.09724082 25.3494122,6.92826122 25.1926776,6.75438367 C24.7922694,6.4752 24.4126776,6.16736327 24.056351,5.83356735 C22.8186367,4.66026122 22.0041061,3.11030204 21.7396163,1.42540408 L17.3730857,1.42540408 L17.3730857,23.7111184 C17.3730857,27.7957714 15.1690041,29.9560163 12.4334939,29.9560163 C11.6569224,29.9538122 10.8918612,29.7681796 10.2005143,29.414302 C9.50941224,29.0601796 8.91186122,28.5476082 8.45635102,27.9182204 C7.49071837,27.3946286 6.72712653,26.5636898 6.2865551,25.5571592 C5.84573878,24.5508735 5.75341224,23.4260571 6.02377959,22.3609959 C6.29390204,21.2959347 6.91177959,20.3516082 7.77896327,19.6771592 C8.64639184,19.0027102 9.71365714,18.6365878 10.8122694,18.6365878 C11.3564327,18.6412408 11.8961878,18.7362612 12.4090041,18.9182204 L12.4090041,14.1894857 C10.304351,14.1921796 8.24647347,14.8093224 6.48786122,15.9657306 C4.72924898,17.1221388 3.3470449,18.7666286 2.51047347,20.6978939 C1.67390204,22.6291592 1.41969796,24.7627102 1.77896327,26.8362612 C2.13822857,28.9098122 3.09553469,30.8334857 4.53308571,32.3704653 C6.36271837,33.6848327 8.55945306,34.3906286 10.8122694,34.3884296 C16.7730857,34.3884296 21.6220653,30.7445878 21.6220653,23.5764245" fill="#000000" id="Fill-5">
              </path>
             </g>
            </g>
           </svg>
           <div>
            <p class="text-white text-lg font-bold">
             Tiktok
            </p>
            <p class="text-white">
             DUDU_CAH GANTENG
            </p>
            <p class="text-blue-400">
             dk.lece...
            </p>
           </div>
          </div>
          <div class="flex items-center space-x-4 bg-gray-800 bg-opacity-50 px-8 py-4 rounded-lg">
           <i class="fab fa-instagram text-4xl text-white">
           </i>
           <div>
            <p class="text-white text-lg font-bold">
             instagram
            </p>
            <p class="text-white">
             @Miftah.123
            </p>
            <p class="text-blue-400">
             dk.lece...
            </p>
           </div>
          </div>
          <div class="flex items-center space-x-4 bg-gray-800 bg-opacity-50 px-8 py-4 rounded-lg">
           <i class="fab fa-whatsapp text-4xl text-white">
           </i>
           <div>
            <p class="text-white text-lg font-bold">
             WHATSAPP
            </p>
            <p class="text-white">
             0895-3863-21624
            </p>
            <p class="text-blue-400">
             dk.lece...
            </p>
           </div>
          </div>
         </div>
         <div class="px-4">
          <div class="grid grid-cols-3 gap-1">
           <img alt="Image 1" class="rounded-sm shadow-lg" height="150" src="https://storage.googleapis.com/a1aa/image/gMlnLdRqYkbkNVbv7nHYZt1ehp4VkffPnYZf3RQRJulLpOTPB.jpg" width="150"/>
           <img alt="Image 2" class="rounded-sm shadow-lg" height="150" src="https://storage.googleapis.com/a1aa/image/SGnnWixfmZTaAibOVhfn1MDgTjXBWlVektL25aKdHU6aUnpnA.jpg" width="150"/>
           <img alt="Image 3" class="rounded-sm shadow-lg" height="150" src="https://storage.googleapis.com/a1aa/image/C1CuYC81C1ZyPVhUSsUj6D77e6ojpNLBMiosl5mPC0nF1Z6JA.jpg" width="150"/>
           <img alt="Image 4" class="rounded-sm shadow-lg" height="150" src="https://storage.googleapis.com/a1aa/image/7XmJuS3BJ8Y6B5eIl1KYtYJF4sWas5Ik0CtTvMMth3TH1Z6JA.jpg" width="150"/>
           <img alt="Image 5" class="rounded-sm shadow-lg" height="150" src="https://storage.googleapis.com/a1aa/image/fb65dWFfugjM7UpIez5vebR9HHAI483ezAeZe8ITy1JRF1Z6JA.jpg" width="150"/>
           <img alt="Image 6" class="rounded-sm shadow-lg" height="150" src="https://storage.googleapis.com/a1aa/image/ZzBNYd3n41YiDhYE7hZ5JWAYo1S3guY50iLk8GlnjLPk6M9E.jpg" width="150"/>
          </div>
         </div>
        </div>
       </div>
  
</body>
</html>