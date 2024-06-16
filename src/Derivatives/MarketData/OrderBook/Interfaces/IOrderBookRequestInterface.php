<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces;

interface IOrderBookRequestInterface
{
    /**
     * Symbol name. category is required when query an option symbol
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Limit for data size per page. [1, 500]. Default: 25. option has 25 only
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;
}