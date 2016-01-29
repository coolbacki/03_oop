Zadanie 1
Napisz jakie znasz relacje w MySql? Opisz je i podaj przykład w jakim taka relacja może być użyta.

* jeden do jeden
- do jednego rekordu jednej bazy przypisujemy relację z tylko jednym rekordem drugiej bazy (w praktycje jeden do 0 lub jeden)
- np. zmówienie - płatność. Jedno zamówienie może mieć jedną płatność - jedna płatność może mieć jedo zamówienie
(ew. zamówienie może nie mieć płatności)

* jeden do wielu
- do jednego rekordu może być przypisanych wiele rekordów drugiej bazy.
- np. klasa - uczeń. Jedna klasa ma wielu uczniów, jeden uczeń ma jedną klasę.

* wiele do wielu
- do wielu rekordów może być przypisanych wiele rekordów
- np. kina - filmy. Dany film jest grany w wielu kinach, w jednym kinie jest granych wiele filmów.
- do połączenia używamy 3 tabeli z id własnym oraz id pozostalych tabel





Zadanie 2
W bazie danych mamy następujące tablice:
* Users: id : int, name : varchar(60), email : varchar(60), password : varchar(60)
* Messages: id : int, user_id: int, message : text
* Items: id : int, name : varchar(40), description : text, price : real(7,2)
* Orders: id : int, description : text

Napisz następujące zapytania sql:
1. Wybranie wszystkich itemów o cenie większej niż 13.
select * from Items where price > 13;

2. Włożenie do tablicy Orders nowego zamówienia o opisie "przykładowy opis"
insert into Orders (description) values ("przykładowy opis");

3. Usuniecie użytkownika o id 7
delete from Users where id=7;

4. Stworzenie relacji wiele do wielu pomiędzy tabelami Items a Orders
create table items_orders (
id int auto_increment,
id_items int,
id_orders int,
primary key(id),
unique key items_orders (id_items, id_orders),
foreign key(id_items) references Items(id),
foreign key(id_orders) references Orders(id));

5. Wybranie wszystkich użytkowników którzy maja jakaś wiadomość
select name from Users join Messages on Users.id=Messages.user_id

6. Wybranie wszystkich użytkowników o imieniu zaczynającym się od L
select * from Users where name like "l%"





Zadanie 3
Napisz kod PHP który wypisze na stronie wszystkie wiadomości dla użytkownika o id 5 (tabele takie same jak w poprzednim zadaniu). Pamiętaj o poprawnym połączeniu i jego zamknięciu.

$upload = "select message from Users
join Messages
on Users.id=Messages.user_id
where Users.id=5";

$result = $conn->query($upload);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()){
        echo ($row[message]."<br>");
    }
}




Zadanie 4
Jakie są 4 główne założenia programowania obiektowego? Opisz je.
* Abstrakcja
- ukrycie logiki dzięki której otrzymujemy funkcjonalność.
- "jak podam polecenie to mam uzyskać efekt - nie mam potrzeby wiedzieć jak"

* Dziedziczenie
- obiekty mogą dziedziczyć po sobie atrybuty i metody
- np. samochód może dziediczyć po pojeździe
(samochód tak jak pojazd - porusza się, ma koła, musi być prowadzony przez człowieka itp.)

* Hermetyzacja
- klas apowinna chronić samą siebie przed niezaplanowanym użyciem - w pełni to kontrolować

* Polimorfizm
- "dzieci" mogą podszywać się pod "rodziców"
- skoro posiadaja wszystkie funkcjonalności rodzica mogą działać tak jak one.





Zadanie 5
Napisz kod PHP klasy VIPUser. Klasa ma spełniać następujące właściwości:
1. Dziedziczyć po klasie User
2. Posiadać dodatkowy atrybut: vipCardNumber
3. Posiadać konstruktor który przyjmuje następujące dane: imię, nazwisko, mail,
numer karty VIP. Imię, nazwisko i mail mają być przekazywane do konstruktora
klasy nadrzędnej.
4. Posiadać prywatną metodę checkCard() – ciało metody może zostać puste.
5. Posiadać publiczną metodę useViPCard() – ciało metody może zostać puste.

<?php

class VIPUser extends User{
    private $vipCardNumer;

    public function __construct($name, $lastName, $mail, $cardNumber)
    {
        parent::__construct($name, $lastName, $mail);
        $this->vipCardNumer($cardNumber);
    }

    private function checkCard(){

    }

    public function useVipCard(){

    }

}


