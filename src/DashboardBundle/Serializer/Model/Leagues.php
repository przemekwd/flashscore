<?php

namespace DashboardBundle\Serializer\Model;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\Type;

class Leagues
{
    /**
     * @Type("ArrayCollection<DashboardBundle\Serializer\Model\League>")
     *
     * @var ArrayCollection|null
     */
    private $leagues;


    /**
     * @return ArrayCollection
     */
    public function getData(): ?ArrayCollection
    {
        return $this->leagues;
    }

    /**
     * @param ArrayCollection $leagues
     * @return Leagues
     */
    public function setLeagues(?ArrayCollection $leagues): self
    {
        $this->leagues = $leagues;

        return $this;
    }
}
