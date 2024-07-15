<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

interface IGetOrderListResponseItemInterface
{
    /**
     * Symbol name
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Order ID
     * @return string
     */
    public function getOrderId(): string;

    /**
     * User customised order ID.
     * @return string
     */
    public function getOrderLinkId(): string;

    /**
     * Buy,Sell
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
     * Order quantity
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
     * Position index. 0: one-way mode, 1: buy side hedge mode, 2: sell side hedge mode
     * @return int
     */
    public function getPositionIdx(): int;

    /**
     * Last price when place the order
     * @return float
     */
    public function getLastPriceOnCreated(): float;

    /**
     * Order created datetime
     * @return \DateTime
     */
    public function getCreatedTime(): \DateTime;

    /**
     * Order updated datetime
     * @return \DateTime
     */
    public function getUpdatedTime(): \DateTime;

    /**
     * Cancel type
     * @return string
     */
    public function getCancelType(): string;

    /**
     * Reject reason
     * @return string
     */
    public function getRejectReason(): string;

    /**
     * Stop order type
     * @return string
     */
    public function getStopOrderType(): string;

    /**
     * Trigger direction. 1: rise, 2: fall
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
     * @return float
     */
    public function getTriggerPrice(): float;

    /**
     * Cumulative executed order value
     * @return float
     */
    public function getCumExecValue(): float;

    /**
     * Cumulative executed trading fee
     * @return float
     */
    public function getCumExecFee(): float;

    /**
     * Cumulative executed order qty
     * @return float
     */
    public function getCumExecQty(): float;

    /**
     * The estimated value not executed
     * @return float
     */
    public function getLeavesValue(): float;

    /**
     * The remaining qty not executed
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
     * The price type to trigger take profit
     * @return string
     */
    public function getTpTriggerBy(): string;

    /**
     * The price type to trigger stop loss
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

    /**
     * Paradigm block trade ID
     * @return string
     */
    public function getBlockTradeId(): string;

    /**
     * SMP execution type
     * @return string
     */
    public function getSmpType(): string;

    /**
     * Smp group ID. If the uid has no group, it is 0 by default
     * @return int
     */
    public function getSmpGroup(): int;

    /**
     * The counterparty's orderID which triggers this SMP execution
     * @return string
     */
    public function getSmpOrderId(): string;
}