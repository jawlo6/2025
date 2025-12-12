#include <iostream>
using namespace std;

int main( ){

    int liczba;

    cout << "Podaj liczbe:";
    cin >> liczba;

    if( liczba < 0 ){
        cout << "liczba ujemna";
    }else{
        cout << "liczba dodatnia";
    }


}
