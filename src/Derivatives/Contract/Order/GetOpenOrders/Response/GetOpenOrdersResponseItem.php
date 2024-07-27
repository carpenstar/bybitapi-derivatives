<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseItemInterface;

class GetOpenOrdersResponseItem extends AbstractResponse implements IGetOpenOrdersResponseItemInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    private string $symbol;

    /**
     * Order id
     * @var string $orderId
     */
    private string $orderId;

    /**
     * User customised order id
     * @var string $orderLinkId
     */
    private string $orderLinkId;

    /**
     * Side. Buy,Sell
     * @var string $side
     */
    private string $side;

    /**
     * Order type. Market,Limit. For TP/SL order, it means the order type after triggered
     * @var string $orderType
     */
    private string $orderType;

    /**
     * Order price
     * @var float $price
     */
    private float $price;

    /**
     * Order quantity
     * @var float $qty
     */
    private float $qty;

    /**
     * Time in force
     * @var string $timeInForce
     */
    private string $timeInForce;

    /**
     * Order status
     * @var string $orderStatus
     */
    private string $orderStatus;

    /**
     * Last price when create the order
     * @var string $lastPriceOnCreated
     */
    private string $lastPriceOnCreated;

    /**
     * Created timestamp (ms)
     * @var \DateTime $createdTime
     */
    private \DateTime $createdTime;

    /**
     * Updated timestamp (ms)
     * @var \DateTime $updatedTime
     */
    private \DateTime $updatedTime;

    /**
     * Cancel type
     * @var string $cancelType
     */
    private string $cancelType;

    /**
     * Stop order type
     * @var string $stopOrderType
     */
    private string $stopOrderType;

    /**
     * 1: rise, 2: fall
     * @var int $triggerDirection
     */
    private int $triggerDirection;

    /**
     * The trigger type of trigger price
     * @var string $triggerBy
     */
    private string $triggerBy;

    /**
     * Trigger price
     * @var float|null $triggerPrice
     */
    private ?float $triggerPrice;

    /**
     * Cumulative executed position value
     * @var float $cumExecValue
     */
    private float $cumExecValue;

    /**
     * Cumulative trading fee
     * @var float $cumExecFee
     */
    private float $cumExecFee;

    /**
     * Cumulative executed qty
     * @var float $cumExecQty
     */
    private float $cumExecQty;

    /**
     * The remaining value waiting to be traded
     * @var float $leavesValue
     */
    private float $leavesValue;

    /**
     * The remaining quantity waiting to be traded
     * @var float $leavesQty
     */
    private float $leavesQty;

    /**
     * Take profit price
     * @var float $takeProfit
     */
    private float $takeProfit;

    /**
     * Stop loss price
     * @var float $stopLoss
     */
    private float $stopLoss;

    /**
     * TP/SL mode, Full: entire position for TP/SL. Partial: partial position tp/sl
     * @var string $tpslMode
     */
    private string $tpslMode;

    /**
     * The limit order price when take profit price is triggered
     * @var float $tpLimitPrice
     */
    private float $tpLimitPrice;

    /**
     * The limit order price when stop loss price is triggered
     * @var float $slLimitPrice
     */
    private float $slLimitPrice;

    /**
     * Trigger type of take profit
     * @var string $tpTriggerBy
     */
    private string $tpTriggerBy;

    /**
     * Trigger type of stop loss
     * @var string $slTriggerBy
     */
    private string $slTriggerBy;

    /**
     * Reduce only. true means reduce position size
     * @var bool $reduceOnly
     */
    private bool $reduceOnly;

    /**
     * Close on trigger. What is a close on trigger order?
     * @var bool $closeOnTrigger
     */
    private bool $closeOnTrigger;

    /**
     * SMP execution type
     * @var string $smpType
     */
    private string $smpType;

    /**
     * Smp group ID. If the uid has no group, it is 0 by default
     * @var int $smpGroup
     */
    private int $smpGroup;

    /**
     * The counterparty's orderID which triggers this SMP execution
     * @var string $smpOrderId
     */
    private string $smpOrderId;

    public function __construct(array $data)
    {
        $this
            ->setSymbol($data['symbol'])
            ->setOrderId($data['orderId'])
            ->setSide($data['side'])
            ->setOrderType($data['orderType'])
            ->setStopOrderType($data['stopOrderType'])
            ->setPrice($data['price'])
            ->setQty($data['qty'])
            ->setTimeInForce($data['timeInForce'])
            ->setOrderStatus($data['orderStatus'])
            ->setTriggerPrice($data['triggerPrice'])
            ->setOrderLinkId($data['orderLinkId'])
            ->setCreatedTime($data['createdTime'])
            ->setUpdatedTime($data['updatedTime'])
            ->setTakeProfit($data['takeProfit'])
            ->setStopLoss($data['stopLoss'])
            ->setTpTriggerBy($data['tpTriggerBy'])
            ->setSlTriggerBy($data['slTriggerBy'])
            ->setTriggerBy($data['triggerBy'])
            ->setReduceOnly($data['reduceOnly'])
            ->setLeavesQty($data['leavesQty'])
            ->setLeavesValue($data['leavesValue'])
            ->setCumExecQty($data['cumExecQty'])
            ->setCumExecValue($data['cumExecValue'])
            ->setCumExecFee($data['cumExecFee'])
            ->setTriggerDirection($data['triggerDirection'])
            ->setCancelType($data['cancelType'])
            ->setLastPriceOnCreated($data['lastPriceOnCreated'])
            ->setCloseOnTrigger($data['closeOnTrigger'])
            ->setTpslMode($data['tpslMode'])
            ->setTpLimitPrice((float)$data['tpLimitPrice'])
            ->setSlLimitPrice((float)$data['slLimitPrice'])
            ->setSmpType($data['smpType'])
            ->setSmpGroup($data['smpGroup'])
            ->setSmpOrderId($data['smpOrderId']);
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return GetOpenOrdersResponse
     */
    private function setSymbol(string $symbol): self
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
     * @return GetOpenOrdersResponse
     */
    private function setOrderId(string $orderId): self
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
     * @return GetOpenOrdersResponse
     */
    private function setOrderLinkId(string $orderLinkId): self
    {
        $this->orderLinkId = $orderLinkId;
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
     * @return GetOpenOrdersResponse
     */
    private function setSide(string $side): self
    {
        $this->side = $side;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderType(): string
    {
        return $this->orderType;
    }

    /**
     * @param string $orderType
     * @return GetOpenOrdersResponse
     */
    private function setOrderType(string $orderType): self
    {
        $this->orderType = $orderType;
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
     * @return GetOpenOrdersResponse
     */
    private function setPrice(float $price): self
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
     * @return GetOpenOrdersResponse
     */
    private function setQty(float $qty): self
    {
        $this->qty = $qty;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeInForce(): string
    {
        return $this->timeInForce;
    }

    /**
     * @param string $timeInForce
     * @return GetOpenOrdersResponse
     */
    private function setTimeInForce(string $timeInForce): self
    {
        $this->timeInForce = $timeInForce;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderStatus(): string
    {
        return $this->orderStatus;
    }

    /**
     * @param string $orderStatus
     * @return GetOpenOrdersResponse
     */
    private function setOrderStatus(string $orderStatus): self
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastPriceOnCreated(): string
    {
        return $this->lastPriceOnCreated;
    }

    /**
     * @param string $lastPriceOnCreated
     * @return GetOpenOrdersResponse
     */
    private function setLastPriceOnCreated(string $lastPriceOnCreated): self
    {
        $this->lastPriceOnCreated = $lastPriceOnCreated;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedTime(): \DateTime
    {
        return $this->createdTime;
    }

    /**
     * @param string $createdTime
     * @return GetOpenOrdersResponse
     */
    private function setCreatedTime(string $createdTime): self
    {
        $this->createdTime = DateTimeHelper::makeFromTimestamp($createdTime);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedTime(): \DateTime
    {
        return $this->updatedTime;
    }

    /**
     * @param string $updatedTime
     * @return GetOpenOrdersResponse
     */
    private function setUpdatedTime(string $updatedTime): self
    {
        $this->updatedTime = DateTimeHelper::makeFromTimestamp($updatedTime);
        return $this;
    }

    /**
     * @return string
     */
    public function getCancelType(): string
    {
        return $this->cancelType;
    }

    /**
     * @param string $cancelType
     * @return GetOpenOrdersResponse
     */
    private function setCancelType(string $cancelType): self
    {
        $this->cancelType = $cancelType;
        return $this;
    }

    /**
     * @return string
     */
    public function getStopOrderType(): string
    {
        return $this->stopOrderType;
    }

    /**
     * @param string $stopOrderType
     * @return GetOpenOrdersResponse
     */
    private function setStopOrderType(string $stopOrderType): self
    {
        $this->stopOrderType = $stopOrderType;
        return $this;
    }

    /**
     * @return int
     */
    public function getTriggerDirection(): int
    {
        return $this->triggerDirection;
    }

    /**
     * @param int $triggerDirection
     * @return GetOpenOrdersResponse
     */
    private function setTriggerDirection(int $triggerDirection): self
    {
        $this->triggerDirection = $triggerDirection;
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
     * @return GetOpenOrdersResponse
     */
    private function setTriggerBy(string $triggerBy): self
    {
        $this->triggerBy = $triggerBy;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getTriggerPrice(): ?float
    {
        return $this->triggerPrice;
    }

    /**
     * @param float|null $triggerPrice
     * @return GetOpenOrdersResponse
     */
    private function setTriggerPrice(?float $triggerPrice): self
    {
        $this->triggerPrice = $triggerPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getCumExecValue(): float
    {
        return $this->cumExecValue;
    }

    /**
     * @param float $cumExecValue
     * @return GetOpenOrdersResponse
     */
    private function setCumExecValue(float $cumExecValue): self
    {
        $this->cumExecValue = $cumExecValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getCumExecFee(): float
    {
        return $this->cumExecFee;
    }

    /**
     * @param float $cumExecFee
     * @return GetOpenOrdersResponse
     */
    private function setCumExecFee(float $cumExecFee): self
    {
        $this->cumExecFee = $cumExecFee;
        return $this;
    }

    /**
     * @return float
     */
    public function getCumExecQty(): float
    {
        return $this->cumExecQty;
    }

    /**
     * @param float $cumExecQty
     * @return GetOpenOrdersResponse
     */
    private function setCumExecQty(float $cumExecQty): self
    {
        $this->cumExecQty = $cumExecQty;
        return $this;
    }

    /**
     * @return float
     */
    public function getLeavesValue(): float
    {
        return $this->leavesValue;
    }

    /**
     * @param float $leavesValue
     * @return GetOpenOrdersResponse
     */
    private function setLeavesValue(float $leavesValue): self
    {
        $this->leavesValue = $leavesValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getLeavesQty(): float
    {
        return $this->leavesQty;
    }

    /**
     * @param float $leavesQty
     * @return GetOpenOrdersResponse
     */
    private function setLeavesQty(float $leavesQty): self
    {
        $this->leavesQty = $leavesQty;
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
     * @return GetOpenOrdersResponse
     */
    private function setTakeProfit(float $takeProfit): self
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
     * @return GetOpenOrdersResponse
     */
    private function setStopLoss(float $stopLoss): self
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
     * @return GetOpenOrdersResponse
     */
    private function setTpslMode(string $tpslMode): self
    {
        $this->tpslMode = $tpslMode;
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
     * @return GetOpenOrdersResponse
     */
    private function setTpLimitPrice(float $tpLimitPrice): self
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
     * @return GetOpenOrdersResponse
     */
    private function setSlLimitPrice(float $slLimitPrice): self
    {
        $this->slLimitPrice = $slLimitPrice;
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
     * @return GetOpenOrdersResponse
     */
    private function setTpTriggerBy(string $tpTriggerBy): self
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
     * @return GetOpenOrdersResponse
     */
    private function setSlTriggerBy(string $slTriggerBy): self
    {
        $this->slTriggerBy = $slTriggerBy;
        return $this;
    }

    /**
     * @return bool
     */
    public function isReduceOnly(): bool
    {
        return $this->reduceOnly;
    }

    /**
     * @param bool $reduceOnly
     * @return GetOpenOrdersResponse
     */
    private function setReduceOnly(bool $reduceOnly): self
    {
        $this->reduceOnly = $reduceOnly;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCloseOnTrigger(): bool
    {
        return $this->closeOnTrigger;
    }

    /**
     * @param bool $closeOnTrigger
     * @return GetOpenOrdersResponse
     */
    private function setCloseOnTrigger(bool $closeOnTrigger): self
    {
        $this->closeOnTrigger = $closeOnTrigger;
        return $this;
    }

    /**
     * @return string
     */
    public function getSmpType(): string
    {
        return $this->smpType;
    }

    /**
     * @param string $smpType
     * @return GetOpenOrdersResponse
     */
    private function setSmpType(string $smpType): self
    {
        $this->smpType = $smpType;
        return $this;
    }

    /**
     * @return int
     */
    public function getSmpGroup(): int
    {
        return $this->smpGroup;
    }

    /**
     * @param int $smpGroup
     * @return GetOpenOrdersResponse
     */
    private function setSmpGroup(int $smpGroup): self
    {
        $this->smpGroup = $smpGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getSmpOrderId(): string
    {
        return $this->smpOrderId;
    }

    /**
     * @param string $smpOrderId
     * @return GetOpenOrdersResponse
     */
    private function setSmpOrderId(string $smpOrderId): self
    {
        $this->smpOrderId = $smpOrderId;
        return $this;
    }
}
