<?php namespace SantaNavigatorEnterpriseEdition\Navigation\ResultSet;

class MoveUpResultToken implements ResultToken
{

    public function inflect(MovementPositionTracker $tracker)
    {
        $tracker->modify('1');
    }
}