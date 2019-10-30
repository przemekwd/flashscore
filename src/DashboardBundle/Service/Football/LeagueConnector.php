<?php

namespace DashboardBundle\Service\Football;

use DashboardBundle\Serializer\Model\Countries;
use DashboardBundle\Serializer\Model\Leagues;
use DashboardBundle\Service\ApiGetConnector;
use DashboardBundle\Service\SportsConnector;


class LeagueConnector extends SportsConnector implements ApiGetConnector
{
    const ALL_ACTION = 'all_leagues.php';
    const SEARCH_ACTION = 'search_all_leagues.php?c=%s&s=Soccer';

    /**
     * @return  array|mixed
     */
    public function getAll()
    {
        return $this->deserialize($this->getContents(self::ALL_ACTION), Leagues::class);
    }

    /**
     * @param   array           $searchBy
     * @return  array|mixed
     */
    public function searchBy(array $searchBy)
    {
        return $this->deserialize(
            $this->getContents(sprintf(self::SEARCH_ACTION, $searchBy['c'] ?? '')),
            Countries::class
        );
    }
}
