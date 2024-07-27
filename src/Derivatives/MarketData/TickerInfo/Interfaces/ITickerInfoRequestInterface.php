<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces;

interface ITickerInfoRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;
}
