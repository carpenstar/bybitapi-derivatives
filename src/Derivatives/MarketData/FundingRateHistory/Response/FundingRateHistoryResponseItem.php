<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryResponseItemInterface;

class FundingRateHistoryResponseItem extends AbstractResponse implements IFundingRateHistoryResponseItemInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    private string $symbol;

    /**
     * Funding rate
     * @var float $fundingRate
     */
    private float $fundingRate;

    /**
     * Funding rate timestamp
     * @var \DateTime $fundingRateTimestamp
     */
    private \DateTime $fundingRateTimestamp;

    public function __construct(array $data)
    {
        $this
            ->setSymbol($data['symbol'])
            ->setFundingRate($data['fundingRate'])
            ->setFundingRateTimestamp($data['fundingRateTimestamp']);
    }

    /**
     * @param string $symbol
     * @return self
     */
    private function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param float $fundingRate
     * @return self
     */
    private function setFundingRate(float $fundingRate): self
    {
        $this->fundingRate = $fundingRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getFundingRate(): float
    {
        return $this->fundingRate;
    }

    /**
     * @param int $fundingRateTimestamp
     */
    private function setFundingRateTimestamp(int $fundingRateTimestamp): self
    {
        $this->fundingRateTimestamp = DateTimeHelper::makeFromTimestamp($fundingRateTimestamp);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFundingRateTimestamp(): \DateTime
    {
        return $this->fundingRateTimestamp;
    }
}