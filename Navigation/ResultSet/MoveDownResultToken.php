<?php namespace SantaNavigatorEnterpriseEdition\Navigation\ResultSet;

class MoveDownResultToken implements ResultToken
{
    public function inflect(MovementPositionTracker $tracker)
    {
        $tracker->modify('-1');
    }
}