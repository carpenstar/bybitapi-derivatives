<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces\IReplaceOrderRequestInterface;

class ReplaceOrderRequest extends AbstractParameters implements IReplaceOrderRequestInterface
{
    /**
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * @var string $orderId
     */
    protected string $orderId;

    /**
     * @var string $orderLinkId
     */
    protected string $orderLinkId;

    /**
     * Order price after modification. Don't pass it if not modify the price
     * @var float $price
     */
    protected float $price;

    /**
     * Order quantity after modification. Don't pass it if not modify the qty
     * @var float $qty
     */
    protected float $qty;

    /**
     * Trigger price. Don't pass it if not modify the qty
     * @var float $triggerPrice
     */
    protected float $triggerPrice;

    /**
     * Take profit price after modification. Don't pass it if not modify the take profit
     * @var float $takeProfit
     */
    protected float $takeProfit;

    /**
     * Stop loss price after modification. Don't pass it if not modify the Stop loss
     * @var float $stopLoss
     */
    protected float $stopLoss;

    /**
     * The price type to trigger take profit. When set a take profit, this param is required if no initial value for the order
     * @var string $tpTriggerBy
     */
    protected string $tpTriggerBy;

    /**
     * The price type to trigger stop loss. When set a stop loss, this param is required if no initial value for the order
     * @var string $slTriggerBy
     */
    protected string $slTriggerBy;

    /**
     * Trigger price type. LastPrice, IndexPrice, MarkPrice, LastPrice
     * @var string $triggerBy
     */
    protected string $triggerBy;

    /**
     * Limit order price when take profit is triggered. Only working when original order sets partial limit tp/sl
     * @var float $tpLimitPrice
     */
    protected float $tpLimitPrice;

    /**
     * Limit order price when stop loss is triggered. Only working when original order sets partial limit tp/sl
     * @var array $requiredBetweenFields
     */
    protected array $requiredBetweenFields;

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return ReplaceOrderRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return ReplaceOrderRequest
     */
    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderLinkId(): string
    {
        return $this->orderLinkId;
    }

    /**
     * @param string $orderLinkId
     * @return ReplaceOrderRequest
     */
    public function setOrderLinkId(string $orderLinkId): self
    {
        $this->orderLinkId = $orderLinkId;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return ReplaceOrderRequest
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getQty(): float
    {
        return $this->qty;
    }

    /**
     * @param float $qty
     * @return ReplaceOrderRequest
     */
    public function setQty(float $qty): self
    {
        $this->qty = $qty;
        return $this;
    }

    /**
     * @return float
     */
    public function getTriggerPrice(): float
    {
        return $this->triggerPrice;
    }

    /**
     * @param float $triggerPrice
     * @return ReplaceOrderRequest
     */
    public function setTriggerPrice(float $triggerPrice): self
    {
        $this->triggerPrice = $triggerPrice;
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
     * @return ReplaceOrderRequest
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
     * @return ReplaceOrderRequest
     */
    public function setStopLoss(float $stopLoss): self
    {
        $this->stopLoss = $stopLoss;
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
     * @return ReplaceOrderRequest
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
     * @return ReplaceOrderRequest
     */
    public function setSlTriggerBy(string $slTriggerBy): self
    {
        $this->slTriggerBy = $slTriggerBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getTriggerBy(): string
    {
        return $this->triggerBy;
    }

    /**
     * @param string $triggerBy
     * @return ReplaceOrderRequest
     */
    public function setTriggerBy(string $triggerBy): self
    {
        $this->triggerBy = $triggerBy;
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
     * @return ReplaceOrderRequest
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
        return $this->tpLimitPrice;
    }

    /**
     * @param float $slLimitPrice
     * @return ReplaceOrderRequest
     */
    public function setSlLimitPrice(float $slLimitPrice): self
    {
        $this->tpLimitPrice = $slLimitPrice;
        return $this;
    }
}
