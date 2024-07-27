<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionRequestInterface;

class MyPositionRequest extends AbstractParameters implements IMyPositionRequestInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Settle coin. Either symbol or settleCoin is required. symbol has a higher priority
     * @var string $settleCoin
     */
    protected string $settleCoin;

    public function __construct()
    {
        $this->setRequiredBetweenField("symbol", "settleCoin");
    }

    /**
     * @param string $symbol
     * @return $this
     */
    public function setSymbol(string $symbol): self
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
     * @param string $symbol
     * @return $this
     */
    public function setSettleCoin(string $symbol): self
    {
        $this->settleCoin = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getSettleCoin(): string
    {
        return $this->settleCoin;
    }
}
