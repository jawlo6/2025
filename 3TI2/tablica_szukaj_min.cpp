#include <iostream>
using namespace std;

// szukanie wartości minimalnej w tablicy

int main () {

    int tablica[10]={6,9,2,3,1,4,0,7,5,8};  //deklaracja tablicy

    int min=0;
    for( int i=0; i<10; i++ ){
        if( tablica[min] >  tablica[i] ){
            min=i;
        }
    }
    cout << "element min jest na pozycji "<< min;
    cout << "\n i wynosi " << tablica[min];
}
