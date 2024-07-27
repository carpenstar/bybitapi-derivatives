<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces;

interface IFundingRateHistoryResponseItemInterface
{
    /**
     * Symbol name
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Funding rate
     * @return float
     */
    public function getFundingRate(): float;

    /**
     * Funding rate datetime
     * @return \DateTime
     */
    public function getFundingRateTimestamp(): \DateTime;
}
