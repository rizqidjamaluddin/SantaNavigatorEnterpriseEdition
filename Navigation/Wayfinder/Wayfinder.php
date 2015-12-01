<?php namespace SantaNavigatorEnterpriseEdition\Navigation\Wayfinder;

use SantaNavigatorEnterpriseEdition\Navigation\DirectionInstructions;

interface Wayfinder
{
    public function execute(DirectionInstructions $instructions);
}