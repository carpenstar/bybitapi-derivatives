<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces;

interface IGetTradingFeeRateResponseItemInterface
{
    public function getSymbol(): string;
    public function getTakerFeeRate(): float;
    public function getMakerFeeRate(): float;
}