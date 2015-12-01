<?php namespace SantaNavigatorEnterpriseEdition\Navigation;

use SantaNavigatorEnterpriseEdition\Navigation\InstructionSet\AscendFloorInstructionCharacter;
use SantaNavigatorEnterpriseEdition\Navigation\InstructionSet\DescendFloorInstructionCharacter;
use SantaNavigatorEnterpriseEdition\Navigation\ResultSet\MoveDownResultToken;
use SantaNavigatorEnterpriseEdition\Navigation\ResultSet\MoveUpResultToken;
use SantaNavigatorEnterpriseEdition\Navigation\ResultSet\ResultSet;
use SantaNavigatorEnterpriseEdition\Navigation\Wayfinder\Wayfinder;

class EnterpriseEditionNavigator implements Navigator
{
    public function navigate(DirectionInstructions $instructions, Wayfinder $wayfinder)
    {
        $results = new ResultSet();
        foreach ($instructions->getInstructions() as $instruction) {
            if ($instruction instanceof AscendFloorInstructionCharacter) {
                $results->implicate(new MoveUpResultToken());
            }
            if ($instruction instanceof DescendFloorInstructionCharacter) {
                $results->implicate(new MoveDownResultToken());
            }
        }
        return $results;
    }
}