<?php namespace SantaNavigatorEnterpriseEdition\Navigation\InstructionSet;

class DescendFloorWithAClosingParenthesisInstructionCharacter extends DescendFloorInstructionCharacter
{

    public function accept($input)
    {
        return $input == ')';
    }
}