<?php namespace SantaNavigatorEnterpriseEdition\Navigation\ResultSet;

class MovementPositionTracker
{
    protected $positionOnTheYAxis = 0;

    public function getPosition()
    {
        return $this->positionOnTheYAxis;
    }

    /**
     * @param int $modifier
     */
    public function modify($modifier)
    {
        $this->positionOnTheYAxis += $modifier;
    }
}