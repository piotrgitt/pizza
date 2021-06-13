# Pizzeria Gabana
Projekt Systemu
 
#### Link do strony internetowej
http://www.pizzeria-gabana.pl

# Opis 
Dane repozytorium zawiera projekt aplikacji internetowej stworzonej w frameworku Amelia. Aplikacja pozwala na tworzenie kont pracowników i klientów, którzy mają różne opcje podczas korzystania z aplikacji. Klient może składać zamówienia na stronie internetowej oraz przeglądać akutalne zamówienia. Pracownicy mogą podglądać wszystkie zamówienia złożone przez Klientów oraz zarządzać nimi. Konieczne jest zalogowanie/zarejestrowanie się, aby składać zamówienia.

# Struktura
Architektura projektu jest w modelu MVC(Model View Controller). Bazą projektu jest framework Amelia, zbudowany na PHP. Skorzystano z serwera WWW Apache oraz bazy danych MySQL z systemem zarządzania bazą danych phpMyAdmin. Do testowania i implementowania aplikacji używaliśmy programu Apache NetBeans IDE 12.4 oraz XAMPP v3.2.4.
W podfolderze piotrgitt/pizza/tree/master/app znajdują się pliki źródłowe aplikacji zawierające foldery z kontrolerami(/app/controllers), widokami(/app/vievs), formularzami(/app/Forms) i klasami transferowymi(/app/transfer). 
W głównym folderze /piotrgitt/pizza znajduje się plik konfiguracyjny config.php, w którym znajdują się dane konfiguracyjne, niezbędne do połączenia z bazą danych oraz z serwerem WWW.
W projekcie została użyta biblioteka meDoo do łatwego operowania z bazami danych. Dane z meDoo znajdują się w folderze /piotrgitt/pizza/tree/master/lib/Medoo.
