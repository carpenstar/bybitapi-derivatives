<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Interfaces\ISetTradingStopRequestInterface;

class SetTradingStopRequest extends AbstractParameters implements ISetTradingStopRequestInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Cannot be less than 0, 0 means cancel TP. Partial TP/SL cannot be cancelled by set it 0
     * @var float $takeProfit
     */
    protected float $takeProfit;

    /**
     * Cannot be less than 0, 0 means cancel SL. Partial TP/SL cannot be cancelled by set it 0
     * @var float $stopLoss
     */
    protected float $stopLoss;

    /**
     * TP/SL mode. Full: entire position TP/SL, Partial: partial position TP/SL.
     * As each contract has an initial full TP/SL mode, if it has been modified before, it may be partial.
     * Therefore, if not provided, the system will automatically retrieve the current TP/SL mode configuration for the contract.
     * @var string $tpslMode
     */
    protected string $tpslMode;

    /**
     * Take profit size. Valid in TP/SL partial mode only. Note: the value of tpSize and slSize must equal
     * @var float $tpSize
     */
    protected float $tpSize;

    /**
     * Stop loss size. Valid in TP/SL partial mode only. Note: the value of tpSize and slSize must equal
     * @var float $slSize
     */
    protected float $slSize;

    /**
     * Take profit trigger price type. default: LastPrice
     * @var string $tpTriggerBy
     */
    protected string $tpTriggerBy;

    /**
     * Stop loss trigger price type. default: LastPrice
     * @var string $slTriggerBy
     */
    protected string $slTriggerBy;

    /**
     * Cannot be less than 0, 0 means cancel TS
     * @var float $trailingStop
     */
    protected float $trailingStop;

    /**
     * Trailing stop trigger price. Trailing stop will be triggered when this price is reached only
     * @var float $activePrice
     */
    protected float $activePrice;

    /**
     * The limit order price when take profit price is triggered. Only works when tpslMode=Partial and tpOrderType=Limit
     * @var float $tpLimitPrice
     */
    protected float $tpLimitPrice;

    /**
     * The limit order price when stop loss price is triggered. Only works when tpslMode=Partial and slOrderType=Limit
     * @var float $slLimitPrice
     */
    protected float $slLimitPrice;

    /**
     * The order type when take profit is triggered. Market(default), Limit. For tpslMode=Full, it only supports tpOrderType=Market
     * @var string $tpOrderType
     */
    protected string $tpOrderType;

    /**
     * The order type when stop loss is triggered. Market(default), Limit. For tpslMode=Full, it only supports slOrderType=Market
     * @var string $slOrderType
     */
    protected string $slOrderType;

    /**
     * Used to identify positions in different position modes. For hedge-mode, this param is required
     *  0: one-way mode
     *  1: hedge-mode Buy side
     *  2: hedge-mode Sell side
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
     * @return SetTradingStopRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return float
     */
    public function getTakeProfit(): float
    {
        return $this->takeProfit;
    }

    /**
     * @param float $takeProfit
     * @return SetTradingStopRequest
     */
    public function setTakeProfit(float $takeProfit): self
    {
        $this->takeProfit = $takeProfit;
        return $this;
    }

    /**
     * @return float
     */
    public function getStopLoss(): float
    {
        return $this->stopLoss;
    }

    /**
     * @param float $stopLoss
     * @return SetTradingStopRequest
     */
    public function setStopLoss(float $stopLoss): self
    {
        $this->stopLoss = $stopLoss;
        return $this;
    }

    /**
     * @return string
     */
    public function getTpslMode(): string
    {
        return $this->tpslMode;
    }

    /**
     * @param string $tpslMode
     * @return SetTradingStopRequest
     */
    public function setTpslMode(string $tpslMode): self
    {
        $this->tpslMode = $tpslMode;
        return $this;
    }

    /**
     * @return float
     */
    public function getTpSize(): float
    {
        return $this->tpSize;
    }

    /**
     * @param float $tpSize
     * @return SetTradingStopRequest
     */
    public function setTpSize(float $tpSize): self
    {
        $this->tpSize = $tpSize;
        return $this;
    }

    /**
     * @return float
     */
    public function getSlSize(): float
    {
        return $this->slSize;
    }

    /**
     * @param float $slSize
     * @return SetTradingStopRequest
     */
    public function setSlSize(float $slSize): self
    {
        $this->slSize = $slSize;
        return $this;
    }

    /**
     * @return string
     */
    public function getTpTriggerBy(): string
    {
        return $this->tpTriggerBy;
    }

    /**
     * @param string $tpTriggerBy
     * @return SetTradingStopRequest
     */
    public function setTpTriggerBy(string $tpTriggerBy): self
    {
        $this->tpTriggerBy = $tpTriggerBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlTriggerBy(): string
    {
        return $this->slTriggerBy;
    }

    /**
     * @param string $slTriggerBy
     * @return SetTradingStopRequest
     */
    public function setSlTriggerBy(string $slTriggerBy): self
    {
        $this->slTriggerBy = $slTriggerBy;
        return $this;
    }

    /**
     * @return float
     */
    public function getTrailingStop(): float
    {
        return $this->trailingStop;
    }

    /**
     * @param float $trailingStop
     * @return SetTradingStopRequest
     */
    public function setTrailingStop(float $trailingStop): self
    {
        $this->trailingStop = $trailingStop;
        return $this;
    }

    /**
     * @return float
     */
    public function getActivePrice(): float
    {
        return $this->activePrice;
    }

    /**
     * @param float $activePrice
     * @return SetTradingStopRequest
     */
    public function setActivePrice(float $activePrice): self
    {
        $this->activePrice = $activePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getTpLimitPrice(): float
    {
        return $this->tpLimitPrice;
    }

    /**
     * @param float $tpLimitPrice
     * @return SetTradingStopRequest
     */
    public function setTpLimitPrice(float $tpLimitPrice): self
    {
        $this->tpLimitPrice = $tpLimitPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getSlLimitPrice(): float
    {
        return $this->slLimitPrice;
    }

    /**
     * @param float $slLimitPrice
     * @return SetTradingStopRequest
     */
    public function setSlLimitPrice(float $slLimitPrice): self
    {
        $this->slLimitPrice = $slLimitPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getTpOrderType(): string
    {
        return $this->tpOrderType;
    }

    /**
     * @param string $tpOrderType
     * @return SetTradingStopRequest
     */
    public function setTpOrderType(string $tpOrderType): self
    {
        $this->tpOrderType = $tpOrderType;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlOrderType(): string
    {
        return $this->slOrderType;
    }

    /**
     * @param string $slOrderType
     * @return SetTradingStopRequest
     */
    public function setSlOrderType(string $slOrderType): self
    {
        $this->slOrderType = $slOrderType;
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
     * @return SetTradingStopRequest
     */
    public function setPositionIdx(int $positionIdx): self
    {
        $this->positionIdx = $positionIdx;
        return $this;
    }
}