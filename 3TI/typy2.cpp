#include <iostream>
using namespace std;

int main () {
    short i=100;
    int k=32000;
    long long ogromna=10000000000000;
    char znak='a';

    cout<< "short = "<< sizeof(i) << "bajty\n";
    cout<< "int = " << sizeof(k) << "bajty\n";
    cout<< "long long " << sizeof(ogromna) << "bajtów\n";

    float liczba1=100000000.1;
    double liczba2=0.0000000001;

    cout<< "float = "<< sizeof(liczba1) << "bajty\n";
    cout<< "double = " << sizeof(liczba2) << "bajty\n";

    bool znaleziono=true;
    cout<< "bool = "<< sizeof(znaleziono) << "bajt\n";

    cout << "char = " << sizeof( znak ) << "bajt\n";
    string napis="tekst";
    cout<< "napis = "<< napis << " "<<sizeof(napis) << "bajt\n";

}
