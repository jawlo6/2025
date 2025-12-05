<?php


/**
 * Definicja klasy Fruit
 * Klasa przechowuje nazwę owocu (np. 'Apple', 'Banana').
 */
class Fruit {
    // Właściwość (zmienna) obiektu, przechowująca nazwę owocu
    public $name;


    /**
     * Metoda (funkcja) ustawiająca nazwę owocu.
     * @param string $name Nazwa do ustawienia.
     */
    public function set_name(string $name): void {
        $this->name = $name;
    }


    /**
     * Metoda zwracająca nazwę owocu.
     * @return string Zwraca bieżącą nazwę.
     */
    public function get_name(): string {
        return $this->name;
    }
}


// ----------------------------------------------------
// Fragment kodu z obrazka: Tworzenie i używanie obiektów
// ----------------------------------------------------


// 1. Tworzenie dwóch niezależnych obiektów (instancji) klasy Fruit
$apple = new Fruit();
$banana = new Fruit();


// 2. Ustawianie nazw dla każdego obiektu za pomocą metody set_name()
$apple->set_name('Apple');
$banana->set_name('Banana');


// 3. Wyświetlanie nazw za pomocą metody get_name()
echo $apple->get_name(); // Wyświetli: Apple
echo "<br>";             // Dodanie łamania linii w HTML
echo $banana->get_name(); // Wyświetli: Banana


?>
