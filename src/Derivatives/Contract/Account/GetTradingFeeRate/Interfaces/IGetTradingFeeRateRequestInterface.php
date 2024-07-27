<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces;

interface IGetTradingFeeRateRequestInterface
{
    public function getSymbol(): string;
    public function setSymbol(string $symbol): self;
}
