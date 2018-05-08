<?php
require_once(__DIR__."/../php/myPage.php");

$OPIS = "Główna strona witryny Łukasza Mazurkiewicz poświęconej przygodom z edukacją.";

// generuejmy stronę i ustawiamy jej parametry
$P = new myPage("Łukasz Mazurkiewicz- moje przygody z edukacją", "../");
$P->SetDescription($OPIS);

echo $P->Begin();
echo $P->CreateMenu("III Semestr");
?>

<div class="container">
        <div class="col-1-6"></div>
        <div class="content col-4-6">
            <div class="col-6-6">
                <h1>Semestr I</h1>
                <div class="col-6-6 row">
                    <h2>Metody probabilistyczne i statystyka</h2>
                    <div class="col-3-6 panel">
                        <div class="panel-header">
                            Czego się nauczyłem?
                        </div>
                        <div class="panel-content">
                            <ul class="panel-list">
                                <li>Przestrzenie probabilistyczne</li>
                                <li>Zmienne losowe</li>
                                <li>Rozkład prawdopodobieństwa</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3-6 panel">
                        <div class="panel-header">
                            O co warto uzupełnić wiadomości?
                        </div>
                        <div class="panel-content">
                            <ul class="panel-list">
                                <li>Teoria miary</li>
                                <li>Wykorzystanie różnych rozkładów prawdopodobieństwa</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6-6 row">
                    <h2>Technologia Programowania</h2>
                    <div class="col-3-6 panel">
                        <div class="panel-header">
                            Czego się nauczyłem?
                        </div>
                        <div class="panel-content">
                            <ul class="panel-list">
                                <li>Język UML</li>
                                <li>Wzorce projektowe</li>
                                <li>Wyrażenia regularne</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3-6 panel">
                        <div class="panel-header">
                            O co warto uzupełnić wiadomości?
                        </div>
                        <div class="panel-content">
                            <ul class="panel-list">
                                <li>Spring, Hibernate</li>
                                <li>Dokładniejsze poznanie wzorców projektowych</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6-6 row">
                    <h2>Bazy danych i zarządzanie informacją</h2>
                    <div class="col-3-6 panel">
                        <div class="panel-header">
                            Czego się nauczyłem?
                        </div>
                        <div class="panel-content">
                            <ul class="panel-list">
                                <li>Relacyjne bazy danych</li>
                                <li>Normalizacja baz danych</li>
                                <li>Transakcje w bazach danych</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3-6 panel">
                        <div class="panel-header">
                            O co warto uzupełnić wiadomości?
                        </div>
                        <div class="panel-content">
                            <ul class="panel-list">
                                <li>Nierelacyjne bazy danych</li>
                                <li>Obsługa Big Data</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6-6 row">
                    <h2>Architektura komputerów i systemy operacyjne</h2>
                    <div class="col-3-6 panel">
                        <div class="panel-header">
                            Czego się nauczyłem?
                        </div>
                        <div class="panel-content">
                            <ul class="panel-list">
                                <li>Podstawy terminala w systemach uniskowych</li>
                                <li>Reprezentacja liczb</li>
                                <li>Budowa procesora</li>
                                <li>Systemy plików</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3-6 panel">
                        <div class="panel-header">
                            O co warto uzupełnić wiadomości?
                        </div>
                        <div class="panel-content">
                            <ul class="panel-list">
                                <li>Szybkie dzielenie</li>
                                <li>Algebra Boole'a</li>
                                <li>Zarządzanie pamięcią w systemach operacyjnych</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
// generujemy zamknięcie strony 
echo $P->End();
?>