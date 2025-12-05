function pokazBlok(blok) {
    const bloki = ["blok1", "blok2", "blok3"]
    bloki.forEach(id => {
        document.getElementById(id).style.display = "none"
    })
    const wybranyBlok = document.getElementById(blok)
    wybranyBlok.style.display = "block";
}