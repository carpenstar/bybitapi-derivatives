<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces;

interface IPublicTradingHistoryResponseInterface
{
    /** @return IPublicTradingHistoryResponseItemInterface[] */
    public function getTradingList(): array;
}
