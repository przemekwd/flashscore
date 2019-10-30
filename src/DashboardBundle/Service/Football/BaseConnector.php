<?php

namespace DashboardBundle\Service\Football;

class BaseConnector
{
    /** @var LeagueConnector */
    private $leagueConnector;


    /**
     * @param LeagueConnector $leagueConnector
     */
    public function __construct(LeagueConnector $leagueConnector)
    {
        $this->leagueConnector = $leagueConnector;
    }

    public function getLeague()
    {
        return $this->leagueConnector;
    }
}
