<?php namespace SantaNavigatorEnterpriseEdition\Navigation;

use SantaNavigatorEnterpriseEdition\Navigation\InstructionSet\InstructionCharacter;

class DirectionInstructionInterpreter
{
    /**
     * @var array|InstructionSet\InstructionCharacter[]
     */
    private $instructionCharacters;

    /**
     * @param InstructionCharacter[] $instructionCharacters
     */
    public function __construct(Array $instructionCharacters)
    {
        $this->instructionCharacters = array_filter($instructionCharacters, function ($input) {
            return $input instanceof InstructionCharacter;
        });
    }

    public function interpret($instructions)
    {
        $result = [];
        $instructionSet = str_split($instructions);
        foreach ($instructionSet as $instruction) {
            foreach ($this->instructionCharacters as $character) {
                if ($character->accept($instruction)) {
                    $result[] = clone $character;
                }
            }
        }
        return $result;
    }
}