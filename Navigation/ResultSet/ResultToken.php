<?php namespace SantaNavigatorEnterpriseEdition\Navigation\ResultSet;

interface ResultToken
{
    public function inflect(MovementPositionTracker $tracker);
}