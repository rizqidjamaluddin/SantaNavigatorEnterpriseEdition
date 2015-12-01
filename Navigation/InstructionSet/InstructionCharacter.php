<?php namespace SantaNavigatorEnterpriseEdition\Navigation\InstructionSet;

interface InstructionCharacter
{
    public function accept($input);
}