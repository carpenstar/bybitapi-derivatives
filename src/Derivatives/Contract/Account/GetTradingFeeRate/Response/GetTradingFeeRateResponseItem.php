<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseItemInterface;

class GetTradingFeeRateResponseItem extends AbstractResponse implements IGetTradingFeeRateResponseItemInterface
{
    /**
     * Symbol name
     * @var string
     */
    private string $symbol;

    /**
     * Taker fee rate
     * @var float $takerFeeRate
     */
    private float $takerFeeRate;

    /**
     * Maker fee rate
     * @var float $makerFeeRate
     */
    private float $makerFeeRate;

    public function __construct(array $data)
    {
        $this
            ->setSymbol($data['symbol'])
            ->setTakerFeeRate($data['takerFeeRate'])
            ->setMakerFeeRate($data['makerFeeRate']);
    }

    /**
     * @param string $symbol
     * @return GetTradingFeeRateResponse
     */
    private function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param float $takerFeeRate
     * @return GetTradingFeeRateResponse
     */
    private function setTakerFeeRate(float $takerFeeRate): self
    {
        $this->takerFeeRate = $takerFeeRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTakerFeeRate(): float
    {
        return $this->takerFeeRate;
    }

    /**
     * @param float $makerFeeRate
     * @return GetTradingFeeRateResponse
     */
    private function setMakerFeeRate(float $makerFeeRate): self
    {
        $this->makerFeeRate = $makerFeeRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getMakerFeeRate(): float
    {
        return $this->makerFeeRate;
    }

}