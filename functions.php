<?php
function addManyAnimals($paddock,$animal,$count){
    for ($i = 1; $i <= $count; $i++) {
        $paddock->addAnimal($animal);
    }
}

function claimManyProduction($paddock,$count){
    for ($i = 1; $i <= $count; $i++) {
        $paddock->claimProduction();
    }
}