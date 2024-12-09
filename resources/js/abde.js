let backgrounds = [];

function setBackgrounds(bgData) {
    backgrounds = bgData;
    changeBackground(); // Set initial background
}

function changeBackground() {
    if (backgrounds.length === 0) return;
    
    let index = 0;
    document.body.style.backgroundImage = `url(${backgrounds[index]})`;
    
    setInterval(function() {
        index = (index + 1) % backgrounds.length; // Rotasi ke indeks berikutnya
        document.body.style.backgroundImage = `url(${backgrounds[index]})`;
    }, 5000); // Ganti setiap 5 detik
}
