#include <iostream>
using namespace std;

// sumowanie elementów tablicy

int main () {

    int tablica[5]={1,2,3,4,5};  //deklaracja tablicy 10elementów

    int suma=0;
    for( int i=0; i<5; i++ ){
        suma+=tablica[i];   // dodanie kolejnego elementu
                            // do sumy
    }
    cout << "suma elementów tablicy wynosi " << suma;
}
