<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionResponseItemInterface
{
    /**
     * Symbol name
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Side. Buy, Sell. Return None when zero position of one-way mode
     * @return string
     */
    public function getSide(): string;

    /**
     * Position size
     * @return float
     */
    public function getSize(): float;

    /**
     * Entry price
     * @return float
     */
    public function getEntryPrice(): float;

    /**
     * leverage
     * @return float
     */
    public function getLeverage(): float;

    /**
     * Position value
     * @return float
     */
    public function getPositionValue(): float;

    /**
     * Position index
     * @return int
     */
    public function getPositionIdx(): int;

    /**
     * Risk limit id
     * @return int
     */
    public function getRiskId(): int;

    /**
     * Position limit value corresponding to the risk id
     * @return string
     */
    public function getRiskLimitValue(): string;

    /**
     * 0: cross margin mode. 1: isolated margin mode
     * @return int
     */
    public function getTradeMode(): int;

    /**
     * 0: false. 1: true
     * @return int
     */
    public function getAutoAddMargin(): int;

    /**
     * Position margin
     * @return float
     */
    public function getPositionBalance(): float;

    /**
     * Estimated liquidation price. It returns value only when minPrice < liqPrice < maxPrice
     * @return float
     */
    public function getLiqPrice(): float;

    /**
     * Estimated bankruptcy price
     * @return float
     */
    public function getBustPrice(): float;

    /**
     * Depreciated, meaningless here, always "Full"
     * @return string
     */
    public function getTpSlMode(): string;

    /**
     * Take profit price
     * @return float
     */
    public function getTakeProfit(): float;

    /**
     * Stop loss price
     * @return float
     */
    public function getStopLoss(): float;

    /**
     * Position created datetime
     * @return \DateTime
     */
    public function getCreatedTime(): \DateTime;

    /**
     * Position data updated datetime
     * @return \DateTime
     */
    public function getUpdatedTime(): \DateTime;

    /**
     * Trailing stop
     * @return string
     */
    public function getTrailingStop(): string;

    /**
     * Activate price of trailing stop
     * @return float
     */
    public function getActivePrice(): float;

    /**
     * Real-time mark price
     * @return float
     */
    public function getMarkPrice(): float;

    /**
     * unrealised PNL
     * @return float
     */
    public function getUnrealisedPnl(): float;

    /**
     * cumulative realised PNL
     * @return float
     */
    public function getCumRealisedPnl(): float;

    /**
     * Position maintenance margin
     * @return float
     */
    public function getPositionMM(): float;

    /**
     * Position initial margin
     * @return float
     */
    public function getPositionIM(): float;

    /**
     * Position status
     * @return string
     */
    public function getPositionStatus(): string;

    /**
     * Settlement price
     * @return float
     */
    public function getSessionAvgPrice(): float;

    /**
     * Pre-occupancy closing fee
     * @return float
     */
    public function getOccClosingFee(): float;

    /**
     * Auto-deleverage rank indicator
     * https://www.bybit.com/en-US/help-center/s/article/What-is-Auto-Deleveraging-ADL
     * @return int
     */
    public function getAdlRankIndicator(): int;
}
