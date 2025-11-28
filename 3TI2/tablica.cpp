#include <iostream>
using namespace std;

int main () {

    int tablica[10];  //deklaracja tablicy 10elementów

    for( int i=0; i<10; i++ ){
        tablica[i]=9-i;   // wpisanie i-tej wartoœci
                        // do i-tego elementu tablicy
        cout<< tablica[i] << "\n";
    }
}
