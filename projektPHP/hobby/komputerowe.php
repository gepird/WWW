<?php
require_once(__DIR__."/../php/myPage.php");

$OPIS = "Główna strona witryny Łukasza Mazurkiewicz poświęconej przygodom z edukacją.";

// generuejmy stronę i ustawiamy jej parametry
$P = new myPage("Łukasz Mazurkiewicz- moje przygody z edukacją", "../");
$P->SetDescription($OPIS);

echo $P->Start("Gry komputerowe");
?>

            <div class="col-6-6">
                <h1>Moje ulubione gry komputerowe</h1>
                <div class="row">
                    <div class="col-1-6"></div>
                    <div class="col-4-6 panel panel-hobby">
                        <div class="panel-header">Heroes of Might and Magic III</div>
                        <div class="panel-content">
                            <p class="hobby-desc">Absolutnie kultowa gra strategiczna, wydana oryginalnie przez studio 3DO. Jak na swoje czasy
                                niesamowicie złożona, zawierająca wiele niuansów. Oprawa graficzna i dźwiękowa wydają się
                                obecnie trochę staroświeckie, ale nie odbiera to w żadnym razie przyjemności z gry. O przywiązaniu
                                fanów do tytułu niech świadczy fakt, że do dzisiaj rozwijane są duże fanowskie dodatki, jak
                                choćby Horn of The Abyss.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1-6"></div>
                    <div class="col-4-6 panel panel-hobby">
                        <div class="panel-header">Gwint</div>
                        <div class="panel-content">
                            <p class="hobby-desc">Gra karciana twórców Wiedźmina 3. Rozgrywka w systemie turowym o bardzo ciekawej mechanice. Ponadto
                                oprawa audiowizualna stoi na bardzo wysokim poziomie. Przemyślane archetypy i kolejne aktualizacje
                                balansujące rozgrywkę coraz bardziej przybliżają tę pozycję do wyjścia z fazy beta.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1-6"></div>
                    <div class="col-4-6 panel panel-hobby">
                        <div class="panel-header">Dark Souls II: Scholar of the First Sin</div>
                        <div class="panel-content">
                            <p class="hobby-desc">Druga z odsłon popularnej serii gier studia FROM Software. Przyciąga graczy przede wszystkim
                                wysokim poziomem trudności oraz niesamowitą atmosferą. Mnie wciągnęła głównie nieliniowa
                                fabuła oraz fakt, że każdy może odkrywać historię świata przedstawionego na swój sposób.
                                Jeszcze nie przeszedłem, ale mam nadzieję zrobić to do końca semestru.</p>
                        </div>
                    </div>
                </div>
            </div>

<?php
// generujemy zamknięcie strony 
echo $P->End();
?>