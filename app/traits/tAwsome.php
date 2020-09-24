<?php

trait tAwsome
{
    protected $super = "super";

    public function super()
    {
        echo "Vous êtes " . $this->super . " " . $this->super . " !";
    }

    public function genial()
    {
        echo "Les traits c'est super genial !";
    }

    public function  extra()
    {
        echo "Vous êtes extra super !";
    }
}
