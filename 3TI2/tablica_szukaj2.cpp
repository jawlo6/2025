#include <iostream>
using namespace std;
    // szukanie elementu w tablicy
int main () {
    int tablica[5]={1,2,3,4,5};  //deklaracja tablicy 10elementów
    int szukany=7;
    int pozycja=-1;
    for( int i=0; i<5; i++ ){
        if( szukany == tablica[i] ){
            pozycja=i;
        }
    }
    if( pozycja != -1 ){
        cout << "element znaleziony na pozycji " << pozycja;
    }else{
            cout << "element nie znaleziony";
    }
}
