#include <iostream>
using namespace std;

// szukanie elementu w tablicy

int main () {

    int tablica[5]={1,2,3,4,5};  //deklaracja tablicy 10elementów

    int suma=0;
    int szukany=3;
    for( int i=0; i<5; i++ ){
        if( szukany == tablica[i] ){
            cout << "element znaleziony na pozycji " << i;
        }
    }
}
