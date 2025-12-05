function oblicz(operation) {
    const liczb1 = document.getElementById('liczb1').value;
    const liczb2 = document.getElementById('liczb2').value;
    const resultDiv = document.getElementById('result');

    if (liczb1 === '' || liczb2 === '') {
        resultDiv.innerHTML = 'Proszę uzupełnić obie liczby.';
        return;
    }

    const n1 = parseFloat(liczb1);
    const n2 = parseFloat(liczb2);

    if (isNaN(n1) || isNaN(n2)) {
        resultDiv.innerHTML = 'Proszę wprowadzić prawidłowe liczby.';
        return;
    }

    let result;
    switch (operation) { 
        case 'dodaj':
            result = n1 + n2;
            break;
        case 'odejmij':
            result = n1 - n2;
            break;
        case 'pomnóż':
            result = n1 * n2;
            break;
        case 'dziel':
            if (n2 === 0) {
                resultDiv.innerHTML = 'Nie wolno dzielić przez zero.';
                return;
            }
            result = n1 / n2;
            break;
    }

    resultDiv.innerHTML = 'Wynik: ' + result;
}
