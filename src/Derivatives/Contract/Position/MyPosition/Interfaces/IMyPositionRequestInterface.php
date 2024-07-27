<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Settle coin. Either symbol or settleCoin is required. symbol has a higher priority
     * @param string $symbol
     * @return self
     */
    public function setSettleCoin(string $symbol): self;
    public function getSettleCoin(): string;
}
