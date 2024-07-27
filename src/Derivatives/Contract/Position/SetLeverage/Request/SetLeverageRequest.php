<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces\ISetLeverageRequestInterface;

class SetLeverageRequest extends AbstractParameters implements ISetLeverageRequestInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * (0, max leverage of corresponding risk limit]. For one-way mode, make sure buyLeverage=sellLeverage
     * @var float $buyLeverage
     */
    protected float $buyLeverage;

    /**
     * (0, max leverage of corresponding risk limit]. For one-way mode, make sure buyLeverage=sellLeverage
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
     * @return SetLeverageRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
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
     * @return SetLeverageRequest
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
     * @return SetLeverageRequest
     */
    public function setSellLeverage(float $sellLeverage): self
    {
        $this->sellLeverage = $sellLeverage;
        return $this;
    }


}