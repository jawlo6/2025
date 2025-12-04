function przeliczBIN() {
    let input = +document.getElementById('wpiszLiczbeDec').value;
    let wynik = document.getElementById('wynik');
    let bin = "";
    while (input != 0) {
        bin = (input % 2) + bin;
        input = Math.floor(input / 2);
    }
	let bin_2 = "";
    let count = 0;
    for (let i = bin.length - 1; i >= 0; i--) {
        bin_2 = bin[i] + bin_2;
        count++;
        if (count % 4 == 0 && i != 0) {
            bin_2 = " " + bin_2;
        }
    }
    wynik.innerHTML = bin_2 + "<sub>(2)</sub>";
}