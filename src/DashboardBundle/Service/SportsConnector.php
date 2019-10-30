<?php

namespace DashboardBundle\Service;

use Exception;
use GuzzleHttp\Client;
use JMS\Serializer\SerializerInterface;
use Psr\Log\LoggerInterface;

class SportsConnector
{
    const URI_PATTERN = 'https://www.thesportsdb.com/';
    const JSON_API_PATTERN = 'api/v1/json/1/';
    const JSON = 'json';

    /** @var SerializerInterface */
    protected $serializer;

    /** @var Client */
    protected $client;

    /** @var LoggerInterface */
    private $logger;

    /**
     * @param   SerializerInterface     $serializer
     * @param   LoggerInterface         $logger
     */
    public function __construct(SerializerInterface $serializer, LoggerInterface $logger)
    {
        $this->serializer = $serializer;
        $this->client = new Client();
        $this->logger = $logger;
    }

    /**
     * @param   string  $action
     * @return  string
     */
    protected function getContents(string $action)
    {
        try {
            $res = $this->client->get(self::URI_PATTERN . self::JSON_API_PATTERN . $action);

            return $res->getBody()->getContents();
        } catch (Exception $e) {
            $this->logger->error($e->getMessage());

            return '';
        }
    }

    /**
     * @param   string  $data
     * @param   string  $class
     * @param   string  $format
     * @return  mixed
     */
    protected function deserialize(string $data, string $class, string $format = self::JSON)
    {
        try {
            return $this->serializer->deserialize($data, $class, $format);
        } catch (Exception $e) {
            $this->logger->error($e->getMessage());

            return [];
        }
    }
}
