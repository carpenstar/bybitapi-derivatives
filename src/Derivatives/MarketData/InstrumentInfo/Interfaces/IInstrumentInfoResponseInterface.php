<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces;

use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\InstrumentInfoResponseItem;

interface IInstrumentInfoResponseInterface
{
    public function getInstrumentInfoList(): ?InstrumentInfoResponseItem;
}
