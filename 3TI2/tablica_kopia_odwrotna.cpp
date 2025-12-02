#include <iostream>
using namespace std;

// kopiowanie elementów tablicy do drugiej tablicy
// w odwrotnej kolejności

int main () {

    int tablica[5]={1,2,3,4,5};  //deklaracja tablicy 10elementów
    int kopia[5];

    for( int i=0; i<5; i++ ){
        kopia[i]=tablica[4-i];   // kopiowanie kolejnego elementu
    }
    // wypisz skopiowaną tablicę
    for( int i=0; i<5; i++ ){
        cout << kopia[i] << "\n";
    }
}

