<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces\ISetAutoAddMarginRequestInterface;

class SetAutoAddMarginRequest extends AbstractParameters implements ISetAutoAddMarginRequestInterface
{

    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Side. Buy,Sell
     * @var string $side
     */
    protected string $side;

    /**
     * Turn on/off auto add margin. 0: off. 1: on
     * @var int $autoAddMargin
     */
    protected int $autoAddMargin;

    /**
     * Position index
     * @var int $positionIdx
     */
    protected int $positionIdx;

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return SetAutoAddMarginRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getSide(): string
    {
        return $this->side;
    }

    /**
     * @param string $side
     * @return SetAutoAddMarginRequest
     */
    public function setSide(string $side): self
    {
        $this->side = $side;
        return $this;
    }

    /**
     * @return int
     */
    public function getAutoAddMargin(): int
    {
        return $this->autoAddMargin;
    }

    /**
     * @param int $autoAddMargin
     * @return SetAutoAddMarginRequest
     */
    public function setAutoAddMargin(int $autoAddMargin): self
    {
        $this->autoAddMargin = $autoAddMargin;
        return $this;
    }

    /**
     * @return int
     */
    public function getPositionIdx(): int
    {
        return $this->positionIdx;
    }

    /**
     * @param int $positionIdx
     * @return SetAutoAddMarginRequest
     */
    public function setPositionIdx(int $positionIdx): self
    {
        $this->positionIdx = $positionIdx;
        return $this;
    }
}
