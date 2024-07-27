<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces;

interface IIndexPriceKlineRequestInterface
{
    /**
     * @return string
     */
    public function getCategory(): string;

    /**
     * Trading Pair
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Kline interval. 1 3 5 15 30 60 120 240 360 720 D M W
     * @param string $interval
     * @return self
     */
    public function setInterval(string $interval): self;
    public function getInterval(): string;

    /**
     * The start datetime
     * @param string $start
     * @return self
     */
    public function setStart(string $start): self;
    public function getStart(): int;

    /**
     * The end datetime
     * @param string $end
     * @return self
     */
    public function setEnd(string $end): self;
    public function getEnd(): int;

    /**
     * Limit for data size per page. [1, 1000]. Default: 200
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;
}
