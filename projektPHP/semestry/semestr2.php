<?php
require_once(__DIR__."/../php/myPage.php");

$OPIS = "Główna strona witryny Łukasza Mazurkiewicz poświęconej przygodom z edukacją.";

// generuejmy stronę i ustawiamy jej parametry
$P = new myPage("Łukasz Mazurkiewicz- moje przygody z edukacją", "../");
$P->SetDescription($OPIS);

echo $P->Start("II Semestr");
?>

            <div class="col-6-6">
                <h1>Semestr I</h1>
                <div class="col-6-6 row">
                    <h2>Analiza matematyczna II</h2>
                    <div class="col-3-6 panel">
                        <div class="panel-header">
                            Czego się nauczyłem?
                        </div>
                        <div class="panel-content">
                            <ul class="panel-list">
                                <li>Całki funkcji wielu zmiennych</li>
                                <li>Pochodne funkcji wielu zmiennych</li>
                                <li>Ekstrema funkcji wielu zmiennych</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3-6 panel">
                        <div class="panel-header">
                            O co warto uzupełnić wiadomości?
                        </div>
                        <div class="panel-content">
                            <ul class="panel-list">
                                <li>Elementy topologii</li>
                                <li>Metoda Lagrange'a</li>
                                <li>Zastosowania analizy funkcji wielu zmiennych</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6-6 row">
                    <h2>Algebra abstrakcyjna i kodowanie</h2>
                    <div class="col-3-6 panel">
                        <div class="panel-header">
                            Czego się nauczyłem?
                        </div>
                        <div class="panel-content">
                            <ul class="panel-list">
                                <li>Teoria grup, pierścieni, ciał</li>
                                <li>Teoria liczb</li>
                                <li>Podstawy kodowania</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3-6 panel">
                        <div class="panel-header">
                            O co warto uzupełnić wiadomości?
                        </div>
                        <div class="panel-content">
                            <ul class="panel-list">
                                <li>Chińskie twierdzenie o resztach</li>
                                <li>Funkcja Eulera</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6-6 row">
                    <h2>Matematyka dyskretna</h2>
                    <div class="col-3-6 panel">
                        <div class="panel-header">
                            Czego się nauczyłem?
                        </div>
                        <div class="panel-content">
                            <ul class="panel-list">
                                <li>Symbol Newtona</li>
                                <li>Klasy kombinatoryczne</li>
                                <li>Podtawy teorii grafów</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3-6 panel">
                        <div class="panel-header">
                            O co warto uzupełnić wiadomości?
                        </div>
                        <div class="panel-content">
                            <ul class="panel-list">
                                <li>Klasy kombinatoryczne</li>
                                <li>Teoria grafów</li>
                                <li>Liczby Stirlinga</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6-6 row">
                    <h2>Kurs programowania</h2>
                    <div class="col-3-6 panel">
                        <div class="panel-header">
                            Czego się nauczyłem?
                        </div>
                        <div class="panel-content">
                            <ul class="panel-list">
                                <li>Podstawy języka Java</li>
                                <li>Wielowątkowość</li>
                                <li>Testy jednostkowe</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3-6 panel">
                        <div class="panel-header">
                            O co warto uzupełnić wiadomości?
                        </div>
                        <div class="panel-content">
                            <ul class="panel-list">
                                <li>Strumienie i wyrażenia lambda w Java 8</li>
                                <li>Architektura aplikacji</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

<?php
// generujemy zamknięcie strony 
echo $P->End();
?>