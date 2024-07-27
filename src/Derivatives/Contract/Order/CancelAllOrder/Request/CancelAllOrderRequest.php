<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderRequestInterface;

class CancelAllOrderRequest extends AbstractParameters implements ICancelAllOrderRequestInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Cancel all open orders by base coin
     * @var string $baseCoin
     */
    protected string $baseCoin;

    /**
     * Cancel all open orders by settle coin
     * @var string $settleCoin
     */
    protected string $settleCoin;

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return CancelAllOrderRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseCoin(): string
    {
        return $this->baseCoin;
    }

    /**
     * @param string $baseCoin
     * @return CancelAllOrderRequest
     */
    public function setBaseCoin(string $baseCoin): self
    {
        $this->baseCoin = $baseCoin;
        return $this;
    }

    /**
     * @return string
     */
    public function getSettleCoin(): string
    {
        return $this->settleCoin;
    }

    /**
     * @param string $settleCoin
     * @return CancelAllOrderRequest
     */
    public function setSettleCoin(string $settleCoin): self
    {
        $this->settleCoin = $settleCoin;
        return $this;
    }
}
