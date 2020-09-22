<?php

abstract class CampusNumerique
{
    protected $listOfStudents;
    protected $speciality;

    public function validation()
    {
        echo "Pour valider le diplôme de tech dev ".$this->speciality.", il faut valider 100% des compétences"; 
    }
}
