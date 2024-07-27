<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersResponseItemInterface
{
    /**
     * Symbol name
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Order id
     * @return string
     */
    public function getOrderId(): string;

    /**
     * User customised order id
     * @return string
     */
    public function getOrderLinkId(): string;

    /**
     * Side. Buy,Sell
     * @return string
     */
    public function getSide(): string;

    /**
     * Order type. Market,Limit. For TP/SL order, it means the order type after triggered
     * @return string
     */
    public function getOrderType(): string;

    /**
     * Order price
     * @return float
     */
    public function getPrice(): float;

    /**
     * Order qty
     * @return float
     */
    public function getQty(): float;

    /**
     * Time in force
     * @return string
     */
    public function getTimeInForce(): string;

    /**
     * Order status
     * @return string
     */
    public function getOrderStatus(): string;

    /**
     * Last price when create the order
     * @return string
     */
    public function getLastPriceOnCreated(): string;

    /**
     * Created datetime
     * @return \DateTime
     */
    public function getCreatedTime(): \DateTime;

    /**
     * Updated datetime
     * @return \DateTime
     */
    public function getUpdatedTime(): \DateTime;

    /**
     * Cancel type
     * @return string
     */
    public function getCancelType(): string;

    /**
     * Stop order type
     * @return string
     */
    public function getStopOrderType(): string;

    /**
     * 1: rise, 2: fall
     * @return int
     */
    public function getTriggerDirection(): int;

    /**
     * The trigger type of trigger price
     * @return string
     */
    public function getTriggerBy(): string;

    /**
     * Trigger price
     * @return float|null
     */
    public function getTriggerPrice(): ?float;

    /**
     * Cumulative executed position value
     * @return float
     */
    public function getCumExecValue(): float;

    /**
     * Cumulative trading fee
     * @return float
     */
    public function getCumExecFee(): float;

    /**
     * Cumulative executed qty
     * @return float
     */
    public function getCumExecQty(): float;

    /**
     * The remaining value waiting to be traded
     * @return float
     */
    public function getLeavesValue(): float;

    /**
     * The remaining quantity waiting to be traded
     * @return float
     */
    public function getLeavesQty(): float;

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
     * TP/SL mode, Full: entire position for TP/SL. Partial: partial position tp/sl
     * @return string
     */
    public function getTpslMode(): string;

    /**
     * The limit order price when take profit price is triggered
     * @return float
     */
    public function getTpLimitPrice(): float;

    /**
     * The limit order price when stop loss price is triggered
     * @return float
     */
    public function getSlLimitPrice(): float;

    /**
     * Trigger type of take profit
     * @return string
     */
    public function getTpTriggerBy(): string;

    /**
     * Trigger type of stop loss
     * @return string
     */
    public function getSlTriggerBy(): string;

    /**
     * Reduce only. true means reduce position size
     * @return bool
     */
    public function isReduceOnly(): bool;

    /**
     * Close on trigger
     * @return bool
     */
    public function isCloseOnTrigger(): bool;
    public function getSmpType(): string;
    public function getSmpGroup(): int;
    public function getSmpOrderId(): string;
}
