<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Interfaces;

interface ISetTradingStopRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Cannot be less than 0, 0 means cancel TP. Partial TP/SL cannot be cancelled by set it 0
     * @param float $takeProfit
     * @return self
     */
    public function setTakeProfit(float $takeProfit): self;
    public function getTakeProfit(): float;

    /**
     * Cannot be less than 0, 0 means cancel SL. Partial TP/SL cannot be cancelled by set it 0
     * @param float $stopLoss
     * @return self
     */
    public function setStopLoss(float $stopLoss): self;
    public function getStopLoss(): float;

    /**
     * TP/SL mode. Full: entire position TP/SL, Partial: partial position TP/SL.
     * As each contract has an initial full TP/SL mode, if it has been modified before, it may be partial.
     * Therefore, if not provided, the system will automatically retrieve the current TP/SL mode configuration for the contract.
     * @param string $tpslMode
     * @return self
     */
    public function setTpslMode(string $tpslMode): self;
    public function getTpslMode(): string;

    /**
     * Take profit size. Valid in TP/SL partial mode only. Note: the value of tpSize and slSize must equal
     * @param float $tpSize
     * @return self
     */
    public function setTpSize(float $tpSize): self;
    public function getTpSize(): float;

    /**
     * Stop loss size. Valid in TP/SL partial mode only. Note: the value of tpSize and slSize must equal
     * @param float $slSize
     * @return self
     */
    public function setSlSize(float $slSize): self;
    public function getSlSize(): float;

    /**
     * Take profit trigger price type. default: LastPrice
     * @param string $tpTriggerBy
     * @return self
     */
    public function setTpTriggerBy(string $tpTriggerBy): self;
    public function getTpTriggerBy(): string;

    /**
     * Stop loss trigger price type. default: LastPrice
     * @param string $slTriggerBy
     * @return self
     */
    public function setSlTriggerBy(string $slTriggerBy): self;
    public function getSlTriggerBy(): string;

    /**
     * Cannot be less than 0, 0 means cancel TS
     * @param float $trailingStop
     * @return self
     */
    public function setTrailingStop(float $trailingStop): self;
    public function getTrailingStop(): float;

    /**
     * Trailing stop trigger price. Trailing stop will be triggered when this price is reached only
     * @param float $activePrice
     * @return self
     */
    public function setActivePrice(float $activePrice): self;
    public function getActivePrice(): float;

    /**
     * The limit order price when take profit price is triggered. Only works when tpslMode=Partial and tpOrderType=Limit
     * @param float $tpLimitPrice
     * @return self
     */
    public function setTpLimitPrice(float $tpLimitPrice): self;
    public function getTpLimitPrice(): float;

    /**
     * The limit order price when stop loss price is triggered. Only works when tpslMode=Partial and slOrderType=Limit
     * @param float $slLimitPrice
     * @return self
     */
    public function setSlLimitPrice(float $slLimitPrice): self;
    public function getSlLimitPrice(): float;

    /**
     * The order type when take profit is triggered. Market(default), Limit. For tpslMode=Full, it only supports tpOrderType=Market
     * @param string $tpOrderType
     * @return self
     */
    public function setTpOrderType(string $tpOrderType): self;
    public function getTpOrderType(): string;

    /**
     * The order type when stop loss is triggered. Market(default), Limit. For tpslMode=Full, it only supports slOrderType=Market
     * @param string $slOrderType
     * @return self
     */
    public function setSlOrderType(string $slOrderType): self;
    public function getSlOrderType(): string;

    /**
     * Used to identify positions in different position modes. For hedge-mode, this param is required
     * 0: one-way mode
     * 1: hedge-mode Buy side
     * 2: hedge-mode Sell side
     * @param int $positionIdx
     * @return self
     */
    public function setPositionIdx(int $positionIdx): self;
    public function getPositionIdx(): int;
}