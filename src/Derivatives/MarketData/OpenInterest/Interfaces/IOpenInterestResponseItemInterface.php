<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces;

interface IOpenInterestResponseItemInterface
{
    /**
     * Open interest
     * @return float
     */
    public function getOpenInterest(): float;

    /**
     * The timestamp
     * @return \DateTime
     */
    public function getTimestamp(): \DateTime;
}
