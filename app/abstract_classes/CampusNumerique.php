<?php

abstract class CampusNumerique
{
    protected $listOfStudents;
    protected $speciality;

    public function validation()
    {
        echo "Pour valider le diplôme " . $this->speciality . ", il faut valider 100% des compétences";
    }

    // public function genial()
    // {
    //     echo "le campus numerique, c'est génial";
    // }
}
