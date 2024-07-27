<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces;

interface IOrderBookResponsePriceItemInterface
{
    /**
     * Order price
     * @return float
     */
    public function getPrice(): float;

    /**
     * Order book volume for price
     * @return float
     */
    public function getQuantity(): float;
}
