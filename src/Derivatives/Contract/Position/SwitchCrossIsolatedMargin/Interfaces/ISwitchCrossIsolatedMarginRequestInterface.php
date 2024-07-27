<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces;

interface ISwitchCrossIsolatedMarginRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * 0: cross margin. 1: isolated margin
     * @param int $tradeMode
     * @return self
     */
    public function setTradeMode(int $tradeMode): self;
    public function getTradeMode(): int;

    /**
     * Buy side leverage. Make sure buyLeverage equals to sellLeverage
     * @param float $buyLeverage
     * @return self
     */
    public function setBuyLeverage(float $buyLeverage): self;
    public function getBuyLeverage(): float;

    /**
     * Sell side leverage. Make sure buyLeverage equals to sellLeverage
     * @param float $sellLeverage
     * @return self
     */
    public function setSellLeverage(float $sellLeverage): self;
    public function getSellLeverage(): float;
}
