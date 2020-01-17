<?php


namespace ahmadasjad\yii1PlusYii2;


use CController;

class Controller extends CController
{
    public function setTitle($value)
    {
        return $this->setPageTitle($value);
    }

    public function getTitle()
    {
        return $this->getPageTitle();
    }

}
