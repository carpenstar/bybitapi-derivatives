<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces\IGetOrderListResponseItemInterface;

class GetOrderListResponseItem extends AbstractResponse implements IGetOrderListResponseItemInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    private string $symbol;

    /**
     * Order ID
     * @var string $orderId
     */
    private string $orderId;

    /**
     * User customised order ID.
     * @var string $orderLinkId
     */
    private string $orderLinkId;

    /**
     * Buy,Sell
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
     * Position index. 0: one-way mode, 1: buy side hedge mode, 2: sell side hedge mode
     * @var int $positionIdx
     */
    private int $positionIdx;

    /**
     * Last price when place the order
     * @var float $lastPriceOnCreated
     */
    private float $lastPriceOnCreated;

    /**
     * Order created timestamp (ms)
     * @var \DateTime $createdTime
     */
    private \DateTime $createdTime;

    /**
     * Order updated timestamp (ms)
     * @var \DateTime $updatedTime
     */
    private \DateTime $updatedTime;

    /**
     * Cancel type
     * @var string $cancelType
     */
    private string $cancelType;

    /**
     * Reject reason
     * @var string $rejectReason
     */
    private string $rejectReason;

    /**
     * Stop order type
     * @var string $stopOrderType
     */
    private string $stopOrderType;

    /**
     * Trigger direction. 1: rise, 2: fall
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
     * @var float $triggerPrice
     */
    private float $triggerPrice;

    /**
     * Cumulative executed order value
     * @var float $cumExecValue
     */
    private float $cumExecValue;

    /**
     * Cumulative executed trading fee
     * @var float $cumExecFee
     */
    private float $cumExecFee;

    /**
     * Cumulative executed order qty
     * @var float $cumExecQty
     */
    private float $cumExecQty;

    /**
     * The estimated value not executed
     * @var float $leavesValue
     */
    private float $leavesValue;

    /**
     * The remaining qty not executed
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
     * The price type to trigger take profit
     * @var string $tpTriggerBy
     */
    private string $tpTriggerBy;

    /**
     * The price type to trigger stop loss
     * @var string $slTriggerBy
     */
    private string $slTriggerBy;

    /**
     * Reduce only. true means reduce position size
     * @var bool $reduceOnly
     */
    private bool $reduceOnly;

    /**
     * Close on trigger. What is a close on trigger order?. Keeps "" for option
     * @var bool $closeOnTrigger
     */
    private bool $closeOnTrigger;

    /**
     * Paradigm block trade ID
     * @var string $blockTradeId
     */
    private string $blockTradeId;

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
        $this->symbol = $data['symbol'];
        $this->orderId = $data['orderId'];
        $this->orderLinkId = $data['orderLinkId'];
        $this->side = $data['side'];
        $this->orderType = $data['orderType'];
        $this->price = $data['price'];
        $this->qty = $data['qty'];
        $this->timeInForce = $data['timeInForce'];
        $this->orderStatus = $data['orderStatus'];
        $this->positionIdx = $data['positionIdx'];
        $this->lastPriceOnCreated = $data['lastPriceOnCreated'];
        $this->createdTime = DateTimeHelper::makeFromTimestamp($data['createdTime']);
        $this->updatedTime = DateTimeHelper::makeFromTimestamp($data['updatedTime']);
        $this->cancelType = $data['cancelType'];
        $this->rejectReason = $data['rejectReason'];
        $this->stopOrderType = $data['stopOrderType'];
        $this->triggerDirection = $data['triggerDirection'];
        $this->triggerBy = $data['triggerBy'];
        $this->cumExecFee = $data['cumExecFee'];
        $this->cumExecValue = $data['cumExecValue'];
        $this->triggerPrice = $data['triggerPrice'];
        $this->cumExecQty = $data['cumExecQty'];
        $this->leavesValue = $data['leavesValue'];
        $this->leavesQty = $data['leavesQty'];
        $this->takeProfit = $data['takeProfit'];
        $this->stopLoss = $data['stopLoss'];
        $this->tpslMode = $data['tpslMode'];
        $this->tpLimitPrice = (float) $data['tpLimitPrice'];
        $this->slLimitPrice = (float) $data['slLimitPrice'];
        $this->tpTriggerBy = $data['tpTriggerBy'];
        $this->slTriggerBy = $data['slTriggerBy'];
        $this->reduceOnly = $data['reduceOnly'];
        $this->closeOnTrigger = $data['closeOnTrigger'];
        $this->blockTradeId = $data['blockTradeId'];
        $this->smpType = $data['smpType'];
        $this->smpGroup = $data['smpGroup'];
        $this->smpOrderId = $data['smpOrderId'];
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @return string
     */
    public function getOrderLinkId(): string
    {
        return $this->orderLinkId;
    }

    /**
     * @return string
     */
    public function getSide(): string
    {
        return $this->side;
    }

    /**
     * @return string
     */
    public function getOrderType(): string
    {
        return $this->orderType;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getQty(): float
    {
        return $this->qty;
    }

    /**
     * @return string
     */
    public function getTimeInForce(): string
    {
        return $this->timeInForce;
    }

    /**
     * @return string
     */
    public function getOrderStatus(): string
    {
        return $this->orderStatus;
    }

    /**
     * @return int
     */
    public function getPositionIdx(): int
    {
        return $this->positionIdx;
    }

    /**
     * @return float
     */
    public function getLastPriceOnCreated(): float
    {
        return $this->lastPriceOnCreated;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedTime(): \DateTime
    {
        return $this->createdTime;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedTime(): \DateTime
    {
        return $this->updatedTime;
    }

    /**
     * @return string
     */
    public function getCancelType(): string
    {
        return $this->cancelType;
    }

    /**
     * @return string
     */
    public function getRejectReason(): string
    {
        return $this->rejectReason;
    }

    /**
     * @return string
     */
    public function getStopOrderType(): string
    {
        return $this->stopOrderType;
    }

    /**
     * @return int
     */
    public function getTriggerDirection(): int
    {
        return $this->triggerDirection;
    }

    /**
     * @return string
     */
    public function getTriggerBy(): string
    {
        return $this->triggerBy;
    }

    /**
     * @return float
     */
    public function getTriggerPrice(): float
    {
        return $this->triggerPrice;
    }

    /**
     * @return float
     */
    public function getCumExecValue(): float
    {
        return $this->cumExecValue;
    }

    /**
     * @return float
     */
    public function getCumExecFee(): float
    {
        return $this->cumExecFee;
    }

    /**
     * @return float
     */
    public function getCumExecQty(): float
    {
        return $this->cumExecQty;
    }

    /**
     * @return float
     */
    public function getLeavesValue(): float
    {
        return $this->leavesValue;
    }

    /**
     * @return float
     */
    public function getLeavesQty(): float
    {
        return $this->leavesQty;
    }

    /**
     * @return float
     */
    public function getTakeProfit(): float
    {
        return $this->takeProfit;
    }

    /**
     * @return float
     */
    public function getStopLoss(): float
    {
        return $this->stopLoss;
    }

    /**
     * @return string
     */
    public function getTpslMode(): string
    {
        return $this->tpslMode;
    }

    /**
     * @return float
     */
    public function getTpLimitPrice(): float
    {
        return $this->tpLimitPrice;
    }

    /**
     * @return float
     */
    public function getSlLimitPrice(): float
    {
        return $this->slLimitPrice;
    }

    /**
     * @return string
     */
    public function getTpTriggerBy(): string
    {
        return $this->tpTriggerBy;
    }

    /**
     * @return string
     */
    public function getSlTriggerBy(): string
    {
        return $this->slTriggerBy;
    }

    /**
     * @return bool
     */
    public function isReduceOnly(): bool
    {
        return $this->reduceOnly;
    }

    /**
     * @return bool
     */
    public function isCloseOnTrigger(): bool
    {
        return $this->closeOnTrigger;
    }

    /**
     * @return string
     */
    public function getBlockTradeId(): string
    {
        return $this->blockTradeId;
    }

    /**
     * @return string
     */
    public function getSmpType(): string
    {
        return $this->smpType;
    }

    /**
     * @return int
     */
    public function getSmpGroup(): int
    {
        return $this->smpGroup;
    }

    /**
     * @return string
     */
    public function getSmpOrderId(): string
    {
        return $this->smpOrderId;
    }
}
