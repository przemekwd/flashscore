<?php

namespace DashboardBundle\Serializer\Model;

use JMS\Serializer\Annotation\Type;

class League
{
    /**
     * @Type("int")
     *
     * @var int
     */
    private $idLeague;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $strLeague;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $strSport;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $strLeagueAlternate;


    /**
     * @return int
     */
    public function getIdLeague(): int
    {
        return $this->idLeague;
    }

    /**
     * @param int $idLeague
     * @return League
     */
    public function setIdLeague(int $idLeague): League
    {
        $this->idLeague = $idLeague;

        return $this;
    }

    /**
     * @return string
     */
    public function getStrLeague(): string
    {
        return $this->strLeague;
    }

    /**
     * @param string $strLeague
     * @return League
     */
    public function setStrLeague(string $strLeague): League
    {
        $this->strLeague = $strLeague;

        return $this;
    }

    /**
     * @return string
     */
    public function getStrSport(): string
    {
        return $this->strSport;
    }

    /**
     * @param string $strSport
     * @return League
     */
    public function setStrSport(string $strSport): League
    {
        $this->strSport = $strSport;

        return $this;
    }

    /**
     * @return string
     */
    public function getStrLeagueAlternate(): string
    {
        return $this->strLeagueAlternate;
    }

    /**
     * @param string $strLeagueAlternate
     * @return League
     */
    public function setStrLeagueAlternate(string $strLeagueAlternate): League
    {
        $this->strLeagueAlternate = $strLeagueAlternate;

        return $this;
    }
}
