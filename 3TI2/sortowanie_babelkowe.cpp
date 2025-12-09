#include <iostream>
#include <cstdlib>
#include <ctime>

using namespace std;

int main()
{
int n=10;                                      // Zmienna typu int o nazwie n wskazuje na ilosc elementow tablicy.
int tablica[10];                      // Dynaminczne utworzenie tablicy.

for (int i=0; i<n; i++) {
    tablica[i] = rand()%10;                // Okreslamy przedzial losowosci liczb od 0-9.
    cout << " Tablica " << i+1 << ": " << tablica [i] << endl;
}
for (int i=0; i<n; i++){
    for (int j=0; j<n; j++){
        // Jezeli poprzedni element jest wiekszy od J-tego to zamieniamy
        // i ustawiamy w kolejnosci rosnacej.
        if (tablica[j] > tablica[j+1])
            swap(tablica[j], tablica[j+1]);
    }
}
cout << " \n Liczby posortowane: ";
for (int i=0; i<n; i++)                 // Wypisanie liczb posorotwanych.
    cout << tablica[i] << "_ ";
cout << endl;
return 0;
}
