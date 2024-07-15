<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Order id. Either orderId or orderLinkId is required
     * @param string $orderId
     * @return self
     */
    public function setOrderId(string $orderId): self;
    public function getOrderId(): string;

    /**
     * User customised order id. Either orderId or orderLinkId is required
     * @param string $orderLinkId
     * @return self
     */
    public function setOrderLinkId(string $orderLinkId): self;
    public function getOrderLinkId(): string;

    /**
     * Order price after modification. Don't pass it if not modify the price
     * @param float $price
     * @return self
     */
    public function setPrice(float $price): self;
    public function getPrice(): float;

    /**
     * Order quantity after modification. Don't pass it if not modify the qty
     * @param float $qty
     * @return self
     */
    public function setQty(float $qty): self;
    public function getQty(): float;

    /**
     * Trigger price. Don't pass it if not modify the qty
     * @param float $triggerPrice
     * @return self
     */
    public function setTriggerPrice(float $triggerPrice): self;
    public function getTriggerPrice(): float;

    /**
     * Take profit price after modification. Don't pass it if not modify the take profit
     * @param float $takeProfit
     * @return self
     */
    public function setTakeProfit(float $takeProfit): self;
    public function getTakeProfit(): float;

    /**
     * Stop loss price after modification. Don't pass it if not modify the Stop loss
     * @param float $stopLoss
     * @return self
     */
    public function setStopLoss(float $stopLoss): self;
    public function getStopLoss(): float;

    /**
     * The price type to trigger take profit. When set a take profit, this param is required if no initial value for the order
     * @param string $tpTriggerBy
     * @return self
     */
    public function setTpTriggerBy(string $tpTriggerBy): self;
    public function getTpTriggerBy(): string;

    /**
     * The price type to trigger stop loss. When set a stop loss, this param is required if no initial value for the order
     * @param string $slTriggerBy
     * @return self
     */
    public function setSlTriggerBy(string $slTriggerBy): self;
    public function getSlTriggerBy(): string;

    /**
     * Trigger price type. LastPrice, IndexPrice, MarkPrice, LastPrice
     * @param string $triggerBy
     * @return self
     */
    public function setTriggerBy(string $triggerBy): self;
    public function getTriggerBy(): string;

    /**
     * Limit order price when take profit is triggered. Only working when original order sets partial limit tp/sl
     * @param float $tpLimitPrice
     * @return self
     */
    public function setTpLimitPrice(float $tpLimitPrice): self;
    public function getTpLimitPrice(): float;

    /**
     * Limit order price when stop loss is triggered. Only working when original order sets partial limit tp/sl
     * @param float $slLimitPrice
     * @return self
     */
    public function setSlLimitPrice(float $slLimitPrice): self;
    public function getSlLimitPrice(): float;
}