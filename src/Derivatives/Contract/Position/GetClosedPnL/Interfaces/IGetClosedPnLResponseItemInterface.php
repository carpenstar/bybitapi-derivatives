<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLResponseItemInterface
{
    /**
     * Symbol name
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Order Id
     * @return string
     */
    public function getOrderId(): string;

    /**
     * Buy, Side
     * @return string
     */
    public function getSide(): string;

    /**
     * Order qty
     * @return float
     */
    public function getQty(): float;

    /**
     * leverage
     * @return float
     */
    public function getLeverage(): float;

    /**
     * Order price
     * @return float
     */
    public function getOrderPrice(): float;

    /**
     * Order type. Market,Limit
     * @return string
     */
    public function getOrderType(): string;

    /**
     * Exec type
     * @return string
     */
    public function getExecType(): string;

    /**
     * Closed size
     * @return float
     */
    public function getClosedSize(): float;

    /**
     * Cumulated entry position value
     * @return float
     */
    public function getCumEntryValue(): float;

    /**
     * Average entry price
     * @return float
     */
    public function getAvgEntryPrice(): float;

    /**
     * Cumulated exit position value
     * @return float
     */
    public function getCumExitValue(): float;

    /**
     * Average exit price
     * @return float
     */
    public function getAvgExitPrice(): float;

    /**
     * Closed PnL
     * @return float
     */
    public function getClosedPnl(): float;

    /**
     * The number of fills in a single order
     * @return int
     */
    public function getFillCount(): int;

    /**
     * The created datetime, same as createdTime
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime;

    /**
     * The created datetime, same as createdAt
     * @return \DateTime
     */
    public function getCreatedTime(): \DateTime;

    /**
     * The updated datetime
     * @return \DateTime
     */
    public function getUpdatedTime(): \DateTime;
}
