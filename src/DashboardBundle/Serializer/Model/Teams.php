<?php

namespace DashboardBundle\Serializer\Model;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\Type;

class Teams
{
    /**
     * @Type("ArrayCollection<DashboardBundle\Serializer\Model\Team>")
     *
     * @var ArrayCollection
     */
    private $teams;


    /**
     * @return ArrayCollection
     */
    public function getTeams(): ArrayCollection
    {
        return $this->teams;
    }

    /**
     * @param array $teams
     * @return Teams
     */
    public function setTeams(array $teams): Teams
    {
        $this->teams = $teams;

        return $this;
    }
}
