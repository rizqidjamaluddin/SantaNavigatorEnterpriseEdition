<?php namespace SantaNavigatorEnterpriseEdition\Navigation;

class DirectionInstructions
{
    /**
     * @var string
     */
    private $instructions;

    /**
     * @param string $instructions
     */
    public function __construct($instructions, DirectionInstructionInterpreter $interpreter)
    {
        $this->instructions = $interpreter->interpret($instructions);
    }

    public function getInstructions()
    {
        return $this->instructions;
    }
}