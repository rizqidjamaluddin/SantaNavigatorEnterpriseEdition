<?php namespace SantaNavigatorEnterpriseEdition\Navigation\InstructionSet;

class AscendFloorWithAnOpeningParenthesisInstructionCharacter extends AscendFloorInstructionCharacter
{
    public function accept($input)
    {
        return $input == '(';
    }
}