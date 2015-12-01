<?php namespace SantaNavigatorEnterpriseEdition\Navigation;


use SantaNavigatorEnterpriseEdition\Navigation\Wayfinder\Wayfinder;

interface Navigator
{
    public function navigate(DirectionInstructions $instructions, Wayfinder $wayfinder);
}