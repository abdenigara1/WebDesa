<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $berita->judulBerita }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <style>
      body {
        font-family: 'Roboto', sans-serif;
        background-image: url('asset/wp3279322.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed; /* Correct placement */
      }

      .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 60px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.9);
      }

      .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
      }

      .modal-content, #caption {
        animation-name: zoom;
        animation-duration: 0.6s;
      }

      @keyframes zoom {
        from {transform: scale(0)} 
        to {transform: scale(1)}
      }

      .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
      }

      .close:hover,
      .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
      }
      .center-image {
        width: 500px; /* Lebar lebih besar untuk gambar tengah */
        height: 500px; /* Tinggi lebih besar untuk gambar tengah */
        }
    </style>
  </head>
  <body>
    <div class="container mx-auto p-8">
      <div class="mb-6">
        <h1 class="text-6xl font-extrabold text-white text-left max-w-3xl">
            {{ $berita->judulBerita}} 
        </h1>
        <p class="text-gray-300 mt-2 text-left">
            {{ $berita->created_at}}
        </p>
      </div>
      <div class="bg-black bg-opacity-50 p-6 rounded-lg shadow-lg">
        <div class="flex justify-between gap-x-2 mt-2">
             <img alt="A rural village road with houses and trees on both sides" class="rounded-lg shadow-md cursor-pointer" height="200" id="myImg1" src="{{ asset('storage/' . $berita->imgBeritaC) }}" width="300"/>
             <img alt="A rural village road with houses and trees on both sides" class="rounded-lg shadow-md cursor-pointer center-image" height="400" id="myImg2" src="{{ asset('storage/' . $berita->imgBeritaA) }}" width="400"/>
             <img alt="A rural village road with houses and trees on both sides" class="rounded-lg shadow-md cursor-pointer" height="200" id="myImg3" src="{{ asset('storage/' . $berita->imgBeritaB) }}" width="300"/>
        </div>
        @foreach(explode("\n", $berita->berita) as $paragraph)
            <p class="text-white mt-6">{{ $paragraph }}<   /p>
        @endforeach
 
      </div>






      <div class="flex justify-center space-x-4 mt-6">
        <a href="berita.html">
          <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
            BACK
          </button>   
        </a>

        <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
          MENU UTAMA
        </button>
        <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
          NEXT
        </button>
      </div>
    </div>
    <div class="modal" id="myModal">
      <span class="close" id="closeModal">&times;</span>
      <img alt="Enlarged view" class="modal-content" id="img01"/>
    </div>

    <script>
      var modal = document.getElementById("myModal");
      var modalImg = document.getElementById("img01");
      var closeModal = document.getElementById("closeModal");

      document.querySelectorAll('.cursor-pointer').forEach(img => {
        img.onclick = function() {
          modal.style.display = "block";
          modalImg.src = this.src;
        }
      });

      closeModal.onclick = function() {
        modal.style.display = "none";
      }
    </script>

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
</html>
