<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces;

interface IMarkPriceKlineResponseInterface
{
    /** @return IMarkPriceKlineResponseItemInterface[] */
    public function getKlineList(): array;
}