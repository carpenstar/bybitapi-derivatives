<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces;

interface ITickerInfoResponseInterface
{
    /**
     * @return ITickerInfoResponseItemInterface
     */
    public function getTickerInfo(): ITickerInfoResponseItemInterface;
}
