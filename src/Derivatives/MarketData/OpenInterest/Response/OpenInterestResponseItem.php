<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;

class OpenInterestResponseItem extends AbstractResponse
{
    /**
     * Open interest
     * @var float $openInterest
     */
    private float $openInterest;

    /**
     * The timestamp
     * @var \DateTime $timestamp
     */
    private \DateTime $timestamp;

    public function __construct(array $data)
    {
        $this->openInterest = $data['openInterest'];
        $this->timestamp = DateTimeHelper::makeFromTimestamp($data['timestamp']);
    }

    /**
     * @return float
     */
    public function getOpenInterest(): float
    {
        return $this->openInterest;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp(): \DateTime
    {
        return $this->timestamp;
    }
}
