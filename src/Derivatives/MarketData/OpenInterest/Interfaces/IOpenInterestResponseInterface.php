<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces;

interface IOpenInterestResponseInterface
{
    /** @return IOpenInterestResponseItemInterface[] */
    public function getOpenInterestList(): array;
}
