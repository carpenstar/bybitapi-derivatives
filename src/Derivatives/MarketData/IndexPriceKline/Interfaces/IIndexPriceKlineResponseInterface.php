<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces;

interface IIndexPriceKlineResponseInterface
{
    /** @return IIndexPriceKlineResponseItemInterface[] */
    public function getKlineList(): array;
}