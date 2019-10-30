<?php

namespace DashboardBundle\Serializer\Model;

use JMS\Serializer\Annotation\Type;

class Team
{
    /**
     * @Type("int")
     *
     * @var int
     */
    private $idTeam;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $strTeam;

    /**
     * @return int
     */
    public function getIdTeam(): int
    {
        return $this->idTeam;
    }

    /**
     * @param int $idTeam
     * @return Team
     */
    public function setIdTeam(int $idTeam): Team
    {
        $this->idTeam = $idTeam;

        return $this;
    }

    /**
     * @return string
     */
    public function getStrTeam(): string
    {
        return $this->strTeam;
    }

    /**
     * @param string $strTeam
     * @return Team
     */
    public function setStrTeam(string $strTeam): Team
    {
        $this->strTeam = $strTeam;

        return $this;
    }
}
