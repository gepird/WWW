<?php
require_once(__DIR__."/php/myPage.php");

$OPIS = "Główna strona witryny Łukasza Mazurkiewicz poświęconej przygodom z edukacją.";

// generuejmy stronę i ustawiamy jej parametry
$P = new myPage("Łukasz Mazurkiewicz- moje przygody z edukacją");
$P->SetDescription($OPIS);

echo $P->Start();
?>

<div class="container">
    <div class="col-1-6"></div>
    <div class="content col-4-6">
        <div class="col-1-6" style="float: right;">
            <img class="face-img" src="./img/face.png" alt="Tu miało być zdjęcie">
        </div>
        <div class="col-5-6">
            <div>
                <h1>Łukasz Mazurkiewicz</h1>
                <h3>moje przygody z edukacją</h3>
                <section class="text-container">
                    <p>W 2015 roku ukończyłem III Liceum Ogólnokształcące im. Adama Mickiewicza we Wrocławiu. Wybrałem informatykę
                        na WPPT, ponieważ teoretyczne zagadnienia informatyki wydają się być dla mnie interesujące.</p>
                    <p>Bardzo lubię podróżować. Moim marzeniem jest wyjazd do USA, żeby zobaczyć m.in. wodospad Niagara.</p>
                </section>
            </div>
        </div>
    </div>
</div>

<?php
// generujemy zamknięcie strony 
echo $P->End();
?>