<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Cancel all open orders by base coin
     * @param string $baseCoin
     * @return self
     */
    public function setBaseCoin(string $baseCoin): self;
    public function getBaseCoin(): string;

    /**
     * Cancel all open orders by settle coin
     * @param string $settleCoin
     * @return self
     */
    public function setSettleCoin(string $settleCoin): self;
    public function getSettleCoin(): string;
}