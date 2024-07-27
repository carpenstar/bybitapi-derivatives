<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces;

interface IKlineResponseInterface
{
    public function getKlineList(): array;
}
