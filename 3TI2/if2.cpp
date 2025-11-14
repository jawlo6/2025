#include <iostream>
using namespace std;

int main () {

   int liczba;

   cout << "Podaj liczbę = ";
   cin >> liczba;
   if( liczba > 0  ){
       cout << "liczba dodatnia";
   }else{
        cout << "liczba ujemna";
   }
}
