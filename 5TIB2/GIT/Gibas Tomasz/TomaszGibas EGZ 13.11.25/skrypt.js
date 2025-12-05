 function dodajDoKoszyka() {
   
    const poleObraz = document.getElementById("obraz");
    const poleKopie = document.getElementById("kopie");
    const papierBlyszczacy = document.getElementById("błyszczący");
    const papierMatowy = document.getElementById("matowy");
    const sekcjaKoszyk = document.getElementById("koszyk");

   
    if (!poleObraz.files.length) {
      alert("Proszę wybrać obraz.");
      return;
    }

    const nazwaPliku = poleObraz.files[0].name;
    const liczbaKopii = parseInt(poleKopie.value, 10);
    
    if (isNaN(liczbaKopii) || liczbaKopii <= 0) {
      alert("Proszę wpisać poprawną liczbę kopii.");
      return;
    }


    let cenaJednostkowa;
    if (papierBlyszczacy.checked) {
      cenaJednostkowa = 1.5;
    } else if (papierMatowy.checked) {
      cenaJednostkowa = 2.0;
    } else {
      alert("Proszę wybrać rodzaj papieru.");
      return;
    }

    const cenaCalkowita = (cenaJednostkowa * liczbaKopii).toFixed(2);

    const obrazElem = document.createElement("img");
    obrazElem.src = nazwaPliku;
    obrazElem.alt = "Wybrany obraz";
    obrazElem.style.width = "100px";
    obrazElem.style.height = "auto";
    obrazElem.style.display = "block";
    obrazElem.style.marginBottom = "5px";

    const paragrafKopie = document.createElement("p");
    paragrafKopie.textContent = `Liczba kopii: ${liczbaKopii}`;

    const paragrafCena = document.createElement("p");
    paragrafCena.textContent = `Cena: ${cenaCalkowita} zł`;

    sekcjaKoszyk.appendChild(obrazElem);
    sekcjaKoszyk.appendChild(paragrafKopie);
    sekcjaKoszyk.appendChild(paragrafCena);
    sekcjaKoszyk.appendChild(document.createElement("hr"));
  }