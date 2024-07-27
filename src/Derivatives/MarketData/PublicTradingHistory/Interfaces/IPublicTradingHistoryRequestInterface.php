<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces;

interface IPublicTradingHistoryRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Limit for data size per page. [1, 1000]. Default: 500
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;
}
