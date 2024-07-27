<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces;

interface ISetAutoAddMarginRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Side. Buy,Sell
     * @param string $side
     * @return self
     */
    public function setSide(string $side): self;
    public function getSide(): string;

    /**
     * Turn on/off auto add margin. 0: off. 1: on
     * @param int $autoAddMargin
     * @return self
     */
    public function setAutoAddMargin(int $autoAddMargin): self;
    public function getAutoAddMargin(): int;

    /**
     * Position index
     * @param int $positionIdx
     * @return self
     */
    public function setPositionIdx(int $positionIdx): self;
    public function getPositionIdx(): int;
}
