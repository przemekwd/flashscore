<?php

namespace DashboardBundle\Service;

interface ApiGetConnector
{
    public function getAll();

    public function searchBy(array $searchBy);
}
