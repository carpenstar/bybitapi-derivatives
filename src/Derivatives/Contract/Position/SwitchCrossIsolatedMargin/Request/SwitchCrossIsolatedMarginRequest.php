<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces\ISwitchCrossIsolatedMarginRequestInterface;

class SwitchCrossIsolatedMarginRequest extends AbstractParameters implements ISwitchCrossIsolatedMarginRequestInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * 0: cross margin. 1: isolated margin
     * @var int $tradeMode
     */
    protected int $tradeMode;

    /**
     * Buy side leverage. Make sure buyLeverage equals to sellLeverage
     * @var float $buyLeverage
     */
    protected float $buyLeverage;

    /**
     * Sell side leverage. Make sure buyLeverage equals to sellLeverage
     * @var float $sellLeverage
     */
    protected float $sellLeverage;

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return SwitchCrossIsolatedMarginRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return int
     */
    public function getTradeMode(): int
    {
        return $this->tradeMode;
    }

    /**
     * @param int $tradeMode
     * @return SwitchCrossIsolatedMarginRequest
     */
    public function setTradeMode(int $tradeMode): self
    {
        $this->tradeMode = $tradeMode;
        return $this;
    }

    /**
     * @return float
     */
    public function getBuyLeverage(): float
    {
        return $this->buyLeverage;
    }

    /**
     * @param float $buyLeverage
     * @return SwitchCrossIsolatedMarginRequest
     */
    public function setBuyLeverage(float $buyLeverage): self
    {
        $this->buyLeverage = $buyLeverage;
        return $this;
    }

    /**
     * @return float
     */
    public function getSellLeverage(): float
    {
        return $this->sellLeverage;
    }

    /**
     * @param float $sellLeverage
     * @return SwitchCrossIsolatedMarginRequest
     */
    public function setSellLeverage(float $sellLeverage): self
    {
        $this->sellLeverage = $sellLeverage;
        return $this;
    }


}
