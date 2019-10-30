<?php

namespace DashboardBundle\Serializer\Model;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\Type;

class Countries
{
    /**
     * @Type("ArrayCollection<DashboardBundle\Serializer\Model\League>")
     *
     * @var ArrayCollection|null
     */
    private $countrys;


    /**
     * @return ArrayCollection
     */
    public function getCountrys(): ?ArrayCollection
    {
        return $this->countrys;
    }

    /**
     * @param ArrayCollection $countrys
     * @return self
     */
    public function setCountrys(?ArrayCollection $countrys): self
    {
        $this->countrys = $countrys;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getData(): ?ArrayCollection
    {
        return $this->getCountrys();
    }
}
