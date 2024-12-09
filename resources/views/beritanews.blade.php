<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
         Kolaborasi Mewujudkan Desa Inovasi
        </title>
        <script src="https://cdn.tailwindcss.com">
        </script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
        <style>
         body {
                  font-family: 'Roboto', sans-serif;
                  background-image: url('asset/wp3279322.jpg');
                  background-size: cover;
                  background-position: center;
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
                  background-color: rgb(0,0,0);
                  background-color: rgba(0,0,0,0.9);
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
                  from {transform:scale(0)} 
                  to {transform:scale(1)}
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
        </style>
       </head>
       <body class="bg-black bg-opacity-50 background-attachment: fixed;">
        <div class="container mx-auto p-8">
         <div class="mb-6">
          <h1 class="text-4xl font-bold text-white text-left">
           Kolaborasi Mewujudkan
          </h1>
          <h2 class="text-3xl font-bold text-white text-left">
           Desa Inovasi
          </h2>
          <p class="text-gray-300 mt-2 text-left">
           LOREM EPSUM SIR DOLOR DE AMET joemfok
          </p>
         </div>
         <div class="bg-black bg-opacity-50 p-6 rounded-lg shadow-lg">
          <div class="flex justify-center gap-4 mt-6">
           <img alt="A rural village road with houses and trees on both sides" class="rounded-lg shadow-md cursor-pointer" height="200" id="myImg1" src="asset/desa.jpeg" width="300"/>
           <img alt="A rural village road with houses and trees on both sides" class="rounded-lg shadow-md cursor-pointer" height="200" id="myImg2" src="asset/desa 2.jpeg" width="300"/>
           <img alt="A rural village road with houses and trees on both sides" class="rounded-lg shadow-md cursor-pointer" height="200" id="myImg3" src="https://storage.googleapis.com/a1aa/image/inkaBDk80uaDBZCtl3eJCDmXeI3c1Ly3PNsPRGEWt8NElywTA.jpg" width="300"/>
          </div>
          <p class="text-white mt-6">
           Desa Laramo Kec. Lembo terpilih menjadi perwakilan Kab. Konawe Utara dalam mengikuti Lomba 10 Program PKK Tingkat Provinsi SULTRA Tahun 2022. Segala persiapan telah dilakukan untuk mengikuti lomba ini, dimana hari ini, Minggu (30/10/2022) Desa Laramo menyambut kedatangan Tim Penilai Lomba 10 Program PKK.
           <br/>
           <br/>
           Terlihat hadir dalam acara penyambutan Wakil Bupati Konawe Utara H. Abu Haera, S.Sos., M.Si, jajaran FORKOPIMDA, ketua Tim Penilai Lomba 10 Program PKK, Ketua TP PKK Kab. Konawe Utara Hj. Nur Ponira Ruksamin, S.Sos, Asisten/Staf Ahli, Para Kepala OPD, serta Para Camat dan Ibu Ketua TP PKK Kecamatan se- Kab. Konawe Utara.
          </p>
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
         <span class="close" id="closeModal">&times;
         </span>
         <img alt="Enlarged view" class="modal-content" id="img01"/>
        </div>
        <script>
         var modal = document.getElementById("myModal");
              var modalImg = document.getElementById("img01");
              var closeModal = document.getElementById("closeModal");
      
              document.querySelectorAll('.cursor-pointer').forEach(img => {
                  img.onclick = function(){
                      modal.style.display = "block";
                      modalImg.src = this.src;
                  }
              });
      
              closeModal.onclick = function() { 
                  modal.style.display = "none";
              }
        </script>
       </body>
</html>