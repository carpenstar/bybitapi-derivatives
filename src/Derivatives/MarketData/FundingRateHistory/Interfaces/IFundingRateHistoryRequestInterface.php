<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces;

interface IFundingRateHistoryRequestInterface
{
    /**
     * Product type. linear,inverse. Default: linear, but in the response category shows ""
     * @param string $category
     * @return self
     */
    public function setCategory(string $category): self;
    public function getCategory(): string;

    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * The start datetime
     * @param int $startTime
     * @return self
     */
    public function setStartTime(int $startTime): self;
    public function getStartTime(): \DateTime;

    /**
     * The end datetime
     * @param int $endTime
     * @return self
     */
    public function setEndTime(int $endTime): self;
    public function getEndTime(): \DateTime;

    /**
     * Limit for data size per page. [1, 200]. Default: 200
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;
}
