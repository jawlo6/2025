function dodajdokoszyka() {
    const file = document.getElementById('file').files[0]
    const ilosc_kopi = +document.getElementById('ilosc_kopi').value
    const rodzaj = document.querySelector('input[type=radio]:checked').value
    let price = 0
    if (rodzaj == "błyszczący") {
        price = ilosc_kopi * 1.5
    }
    if (rodzaj == "matowy") {
        price = ilosc_kopi * 2
    }
    const newImg = document.createElement("img")
    newImg.src = file.name
    const newP1 = document.createElement("p")
    newP1.innerHTML = `Liczba kopi: ${ilosc_kopi}`
    const newP2 = document.createElement("p")
    newP2.innerHTML = `Cena: ${price}`
    const koszyk = document.getElementById("koszyk")
    koszyk.appendChild(newImg)
    koszyk.appendChild(newP1)
    koszyk.appendChild(newP2)
}