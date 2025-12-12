#include <iostream>
using namespace std;

int suma( int a, int b){
    return a+b;
}

int main( ){

    int liczba1, liczba2, wynik;

    cout << "Podaj liczbe1:";
    cin >> liczba1;

    cout << "Podaj liczbe2:";
    cin >> liczba2;

    wynik=suma( liczba1, liczba2 );

    cout << "suma wynosi:" << wynik;
}
