<?php
require_once(__DIR__."/../php/myPage.php");

$OPIS = "Główna strona witryny Łukasza Mazurkiewicz poświęconej przygodom z edukacją.";

// generuejmy stronę i ustawiamy jej parametry
$P = new myPage("Łukasz Mazurkiewicz- moje przygody z edukacją", "../");
$P->SetDescription($OPIS);

echo $P->Start("I Semestr");
?>

        <div class="col-6-6">
            <h1>Semestr I</h1>
            <div class="col-6-6 row">
                <h2>Analiza matematyczna I</h2>
                <div class="col-3-6 panel">
                    <div class="panel-header">
                        Czego się nauczyłem?
                    </div>
                    <div class="panel-content">
                        <ul class="panel-list">
                            <li>Całki</li>
                            <li>Pochodne</li>
                            <li>Notacja O duże, o małe itd.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-3-6 panel">
                    <div class="panel-header">
                        O co warto uzupełnić wiadomości?
                    </div>
                    <div class="panel-content">
                        <ul class="panel-list">
                            <li>Szeregi</li>
                            <li>Funkcje bez całki elementarnej</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6-6 row">
                <h2>Algebra z geometrią analityczną</h2>
                <div class="col-3-6 panel">
                    <div class="panel-header">
                        Czego się nauczyłem?
                    </div>
                    <div class="panel-content">
                        <ul class="panel-list">
                            <li>Teoria grup, pierścieni, ciał</li>
                            <li>Przestrzenie wektorowe i liniowe</li>
                            <li>Wielomiany</li>
                            <li>Podstawy liczb zespolonych</li>
                        </ul>
                    </div>
                </div>
                <div class="col-3-6 panel">
                    <div class="panel-header">
                        O co warto uzupełnić wiadomości?
                    </div>
                    <div class="panel-content">
                        <ul class="panel-list">
                            <li>Macierze</li>
                            <li>Przekształcenia przestrzeni liniowych</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6-6 row">
                <h2>Logika i struktury formalne</h2>
                <div class="col-3-6 panel">
                    <div class="panel-header">
                        Czego się nauczyłem?
                    </div>
                    <div class="panel-content">
                        <ul class="panel-list">
                            <li>Podstawy logiki i teorii zbiorów</li>
                            <li>Indukcja matematyczna</li>
                            <li>Teoria mocy</li>
                            <li>Podstawy struktur formalnych</li>
                        </ul>
                    </div>
                </div>
                <div class="col-3-6 panel">
                    <div class="panel-header">
                        O co warto uzupełnić wiadomości?
                    </div>
                    <div class="panel-content">
                        <ul class="panel-list">
                            <li>Aksjomat Wyboru i jego wykorzystanie</li>
                            <li>Teoria mocy</li>
                            <li>Niesprzeczność teorii</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6-6 row">
                <h2>Wstęp do informatyki i programowania</h2>
                <div class="col-3-6 panel">
                    <div class="panel-header">
                        Czego się nauczyłem?
                    </div>
                    <div class="panel-content">
                        <ul class="panel-list">
                            <li>Podstawy języka C</li>
                            <li>Zastosowanie rekurencji</li>
                            <li>Zasada dziel i zwyciężaj</li>
                        </ul>
                    </div>
                </div>
                <div class="col-3-6 panel">
                    <div class="panel-header">
                        O co warto uzupełnić wiadomości?
                    </div>
                    <div class="panel-content">
                        <ul class="panel-list">
                            <li>Wskaźniki w języku C</li>
                            <li>Programowanie dynamiczne</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<?php
// generujemy zamknięcie strony 
echo $P->End();
?>