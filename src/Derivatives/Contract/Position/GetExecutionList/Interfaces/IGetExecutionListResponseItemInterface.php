<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListResponseItemInterface
{
    /**
     * Symbol name
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Buy,Sell
     * @return string
     */
    public function getSide(): string;

    /**
     * Order id
     * @return string
     */
    public function getOrderId(): string;

    /**
     * User customized order id
     * @return string
     */
    public function getOrderLinkId(): string;

    /**
     * Order price
     * @return float
     */
    public function getOrderPrice(): float;

    /**
     * Order quantity
     * @return float
     */
    public function getOrderQty(): float;

    /**
     * Market,Limit
     * @return string
     */
    public function getOrderType(): string;

    /**
     * Stop order type
     * @return string
     */
    public function getStopOrderType(): string;

    /**
     * Trade Id
     * @return string
     */
    public function getExecId(): string;

    /**
     * Execution price
     * @return float
     */
    public function getExecPrice(): float;

    /**
     * Execution quantity
     * @return float
     */
    public function getExecQty(): float;

    /**
     * Execution fee
     * @return float
     */
    public function getExecFee(): float;

    /**
     * Execution type
     * @return string
     */
    public function getExecType(): string;

    /**
     * Execution position value
     * @return float
     */
    public function getExecValue(): float;

    /**
     * Trading fee rate
     * @return float
     */
    public function getFeeRate(): float;

    /**
     * AddedLiquidity, RemovedLiquidity
     * @return string
     */
    public function getLastLiquidityInd(): string;

    /**
     * Is maker
     * @return bool
     */
    public function isMaker(): bool;

    /**
     * Remaining quantity waiting for execution
     * @return float
     */
    public function getLeavesQty(): float;

    /**
     * Close size
     * @return float
     */
    public function getClosedSize(): float;

    /**
     * Block trade id
     * @return string
     */
    public function getBlockTradeId(): string;

    /**
     * Mark price
     * @return float
     */
    public function getMarkPrice(): float;

    /**
     * Index price
     * @return float
     */
    public function getIndexPrice(): float;

    /**
     * Underlying price
     * @return float
     */
    public function getUnderlyingPrice(): float;

    /**
     * Execution datetime
     * @return \DateTime
     */
    public function getExecTime(): \DateTime;
}