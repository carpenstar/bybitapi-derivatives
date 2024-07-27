<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Request;

use Carpenstar\ByBitAPI\Core\Enums\EnumOrderType;
use Carpenstar\ByBitAPI\Core\Enums\EnumSide;
use Carpenstar\ByBitAPI\Core\Enums\EnumTimeInForce;
use Carpenstar\ByBitAPI\Core\Enums\EnumTPSLModes;
use Carpenstar\ByBitAPI\Core\Enums\EnumTriggerDirection;
use Carpenstar\ByBitAPI\Core\Enums\EnumTriggerPriceType;
use Carpenstar\ByBitAPI\Core\Exceptions\SDKException;
use Carpenstar\ByBitAPI\Core\Helpers\ArrayHelper;
use Carpenstar\ByBitAPI\Core\Helpers\NumericHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderRequestInterface;

class PlaceOrderRequest extends AbstractParameters implements IPlaceOrderRequestInterface
{

    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Buy,Sell
     * @var string $side
     */
    protected string $side;

    /**
     * Market, Limit
     * @var string $orderType
     */
    protected string $orderType;

    /**
     * Order quantity
     * @var float $qty
     */
    protected float $qty;

    /**
     *
     * @var string $timeInForce
     */
    protected string $timeInForce = EnumTimeInForce::GOOD_TILL_CANCELED_FULL;

    /**
     * Order price. Invalid if orderType=Market
     * @var float $price
     */
    protected float $price;

    /**
     * Conditional order param. Used to identify the expected direction of the conditional order.
     * 1: triggered when market price rises to triggerPrice
     * 2: triggered when market price falls to triggerPrice
     * @var int $triggerDirection
     */
    protected int $triggerDirection;

    /**
     * Conditional order param. If you expect the price to rise to trigger your conditional order, make sure:
     * triggerPrice > market price
     * Else, triggerPrice < market price
     * @var string $triggerPrice
     */
    protected string $triggerPrice;

    /**
     * Trigger price type. default:LastPrice.
     * @var string $triggerBy
     */
    protected string $triggerBy = EnumTriggerPriceType::PRICE_TYPE_LAST;

    /**
     * Position index. It is required for hedge position mode
     * @var int
     */
    protected int $positionIdx;

    /**
     * User customised order id. A max of 36 characters. Combinations of numbers, letters (upper and lower cases), dashes, and underscores are supported.
     * rule of future:
     * optional param
     * The same orderLinkId can be used for both USDC PERP and USDT PERP.
     * An orderLinkId can be reused once the original order is either Filled or Cancelled
     * rule of option:
     * This param is required
     * always unique
     * @var string $orderLinkId
     */
    protected string $orderLinkId;

    /**
     * Take profit price
     * @var float $takeProfit
     */
    protected float $takeProfit;

    /**
     * Stop loss price
     * @var float $stopLoss
     */
    protected float $stopLoss;

    /**
     * The price type to trigger take profit. default:LastPrice
     * @var string $tpTriggerBy
     */
    protected string $tpTriggerBy;

    /**
     * The price type to trigger stop loss. default:LastPrice
     * @var string $slTriggerBy
     */
    protected string $slTriggerBy;

    /**
     * What is a reduce-only order? true means your position can only reduce in size if this order is triggered.
     * When reduce_only is true, take profit/stop loss cannot be set
     * @var bool $reduceOnly
     */
    protected bool $reduceOnly;

    /**
     * @var string $smpType
     */
    protected string $smpType;

    /**
     * What is a close on trigger order? For a closing order. It can only reduce your position, not increase it.
     * If the account has insufficient available balance when the closing order is triggered, then other active orders
     * of similar contracts will be cancelled or reduced. It can be used to ensure your stop loss reduces your position
     * regardless of current available margin.
     * @var bool $closeOnTrigger
     */
    protected bool $closeOnTrigger;

    /**
     * TP/SL mode
     * Full: entire position for TP/SL. Then, tpOrderType or slOrderType must be Market
     * Partial: partial position tp/sl. Limit TP/SL order are supported. Note: When create limit tp/sl,
     * tpslMode is required and it must be Partial
     * @var string $tpslMode
     */
    protected string $tpslMode;

    /**
     * The limit order price when take profit price is triggered. Only works when tpslMode=Partial and tpOrderType=Limit
     * @var string $tpLimitPrice
     */
    protected string $tpLimitPrice;

    /**
     * The limit order price when stop loss price is triggered. Only works when tpslMode=Partial and slOrderType=Limit
     * @var string $slLimitPrice
     */
    protected string $slLimitPrice;

    /**
     * The order type when take profit is triggered. Market(default), Limit. For tpslMode=Full,
     * it only supports tpOrderType=Market
     * @var string $tpOrderType
     */
    protected string $tpOrderType;

    /**
     * The order type when stop loss is triggered. Market(default), Limit. For tpslMode=Full,
     * it only supports slOrderType=Market
     * @var string $slOrderType
     */
    protected string $slOrderType;

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return PlaceOrderRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
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
     * @return PlaceOrderRequest
     * @throws SDKException
     */
    public function setSide(string $side): self
    {
        ArrayHelper::checkValueWithStack($side, EnumSide::ORDER_SIDE_LIST);
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
     * @return PlaceOrderRequest
     * @throws SDKException
     */
    public function setOrderType(string $orderType): self
    {
        ArrayHelper::checkValueWithStack($orderType, EnumOrderType::ORDER_TYPE_LIST);
        $this->orderType = $orderType;

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
     * @param float $quantity
     * @return PlaceOrderRequest
     * @throws SDKException
     */
    public function setQty(float $quantity): self
    {
        NumericHelper::checkValueMoreThan($quantity, 0.00000001);
        $this->qty = $quantity;

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
     * @return PlaceOrderRequest
     */
    public function setTimeInForce(string $timeInForce): self
    {
        ArrayHelper::checkValueWithStack($timeInForce, EnumTimeInForce::TIME_IN_FORCE_LIST_FULL);
        $this->timeInForce = $timeInForce;
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
     * @return PlaceOrderRequest
     * @throws SDKException
     */
    public function setPrice(float $price): self
    {
        NumericHelper::checkValueMoreThan($price, 0.000001);
        $this->price = $price;
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
     * @return PlaceOrderRequest
     * @throws SDKException
     */
    public function setTriggerDirection(int $triggerDirection): self
    {
        ArrayHelper::checkValueWithStack($triggerDirection, EnumTriggerDirection::DIRECTION_LIST);
        $this->triggerDirection = $triggerDirection;

        return $this;
    }

    /**
     * @return string
     */
    public function getTriggerPrice(): string
    {
        return $this->triggerPrice;
    }

    /**
     * @param string $triggerPrice
     * @return PlaceOrderRequest
     * @throws SDKException
     */
    public function setTriggerPrice(string $triggerPrice): self
    {
        NumericHelper::checkValueMoreThan($triggerPrice, 0.000001);
        $this->triggerPrice = $triggerPrice;
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
     * @return PlaceOrderRequest
     * @throws SDKException
     */
    public function setTriggerBy(string $triggerBy): self
    {
        ArrayHelper::checkValueWithStack($triggerBy, EnumTriggerPriceType::PRICE_TYPE_LIST);
        $this->triggerBy = $triggerBy;

        return $this;
    }

    /**
     * @return int
     */
    public function getPositionIdx(): int
    {
        return $this->positionIdx;
    }

    /**
     * @param int $positionIdx
     * @return PlaceOrderRequest
     */
    public function setPositionIdx(int $positionIdx): self
    {
        $this->positionIdx = $positionIdx;
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
     * @return PlaceOrderRequest
     */
    public function setOrderLinkId(string $orderLinkId): self
    {
        $this->orderLinkId = $orderLinkId;
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
     * @return PlaceOrderRequest
     * @throws SDKException
     */
    public function setTakeProfit(float $takeProfit): self
    {
        NumericHelper::checkValueMoreThan($takeProfit, 0.000001);
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
     * @return PlaceOrderRequest
     * @throws SDKException
     */
    public function setStopLoss(float $stopLoss): self
    {
        NumericHelper::checkValueMoreThan($stopLoss, 0.000001);
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
     * @return PlaceOrderRequest
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
     * @return PlaceOrderRequest
     */
    public function setSlTriggerBy(string $slTriggerBy): self
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
     * @return PlaceOrderRequest
     */
    public function setReduceOnly(bool $reduceOnly): self
    {
        $this->reduceOnly = $reduceOnly;
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
     * @return PlaceOrderRequest
     */
    public function setSmpType(string $smpType): self
    {
        $this->smpType = $smpType;
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
     * @return PlaceOrderRequest
     */
    public function setCloseOnTrigger(bool $closeOnTrigger): self
    {
        $this->closeOnTrigger = $closeOnTrigger;
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
     * @return PlaceOrderRequest
     * @throws SDKException
     */
    public function setTpslMode(string $tpslMode): self
    {
        ArrayHelper::checkValueWithStack($tpslMode, EnumTPSLModes::MODE_LIST);
        $this->tpslMode = $tpslMode;

        return $this;
    }

    /**
     * @return string
     */
    public function getTpLimitPrice(): string
    {
        return $this->tpLimitPrice;
    }

    /**
     * @param string $tpLimitPrice
     * @return PlaceOrderRequest
     */
    public function setTpLimitPrice(string $tpLimitPrice): self
    {
        $this->tpLimitPrice = $tpLimitPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlLimitPrice(): string
    {
        return $this->slLimitPrice;
    }

    /**
     * @param string $slLimitPrice
     * @return PlaceOrderRequest
     */
    public function setSlLimitPrice(string $slLimitPrice): self
    {
        $this->slLimitPrice = $slLimitPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getTpOrderType(): string
    {
        return $this->tpOrderType;
    }

    /**
     * @param string $tpOrderType
     * @return PlaceOrderRequest
     * @throws SDKException
     */
    public function setTpOrderType(string $tpOrderType): self
    {
        ArrayHelper::checkValueWithStack($tpOrderType, EnumOrderType::ORDER_TYPE_LIST);
        $this->tpOrderType = $tpOrderType;

        return $this;
    }

    /**
     * @return string
     */
    public function getSlOrderType(): string
    {
        return $this->slOrderType;
    }

    /**
     * @param string $slOrderType
     * @return PlaceOrderRequest
     * @throws SDKException
     */
    public function setSlOrderType(string $slOrderType): self
    {
        ArrayHelper::checkValueWithStack($slOrderType, EnumOrderType::ORDER_TYPE_LIST);
        $this->slOrderType = $slOrderType;

        return $this;
    }
}