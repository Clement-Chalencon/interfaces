<?php
require 'interfaces/iOdrey.php';
require 'interfaces/iTibo.php';
require 'abstract_classes/CampusNumerique.php';
require 'traits/tAwsome.php';
require 'traits/tFrenchTechInTheAlps.php';

class CampusNumChambery extends CampusNumerique
{
    protected $listOfStudents = ['Vivi', 'Abdel', 'Ben', 'Theo', 'Mlo', 'louis', 'Dnis', 'Ulys', 'Clem'];
    protected $speciality = "IOT";
}



// public function super()
// {
//     echo 'Vous êtes super !</b>';
// }

// public function daily($nb)
// {
//     if ($nb < 0 || $nb > sizeof($this->listOfStudents)) $nb = 3;
//     echo $this->listOfStudents[$nb] . ', as tu fais ton daily ?';
// }

// public function flippedClassroom()
// {
//     echo 'C\'est vous qui allez faire cours, ça va être fumant !';
// }