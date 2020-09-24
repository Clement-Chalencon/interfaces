<?php
require 'tReseauFrenchTech.php';

trait tFrenchTechInTheAlps
{
    use tReaseauFrenchTech {
        slogan as public;
    }

    public function genial()
    {
        echo "Plein de super entreprises pour vos alternances, ça va être super génial !";
    }
}
