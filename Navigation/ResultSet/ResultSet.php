<?php namespace SantaNavigatorEnterpriseEdition\Navigation\ResultSet;

class ResultSet
{
    /**
     * @var MovementPositionTracker
     */
    protected $result;

    public function __construct()
    {
        $this->result = new MovementPositionTracker();
    }

    public function implicate(ResultToken $token)
    {
        $token->inflect($this->result);
    }

    public function __toString()
    {
        return (string) $this->result->getPosition();
    }
}