# Contract - Account - Order - Place Order
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/place-order)</b>
```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\PlaceOrder::class
```

<br />

<h3 align="left" width="100%"><b>EXAMPLE</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Core\Enums\EnumOrderType;
use Carpenstar\ByBitAPI\Core\Enums\EnumSide;
use Carpenstar\ByBitAPI\Core\Interfaces\IResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\PlaceOrder;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Request\PlaceOrderRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Response\PlaceOrderResponse;

$bybitApi = (new BybitAPI())
    ->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

/** @var IResponseInterface $endpointResponse */
$endpointResponse = $bybitApi->privateEndpoint(PlaceOrder::class,
    (new PlaceOrderRequest())
        ->setSymbol('BTCUSDT')
        ->setOrderType(EnumOrderType::LIMIT)
        ->setSide(EnumSide::BUY)
        ->setQty('0.01')
        ->setPrice(68100)
)->execute();

echo "Return code: {$endpointResponse->getReturnCode()} \n";
echo "Return message: {$endpointResponse->getReturnMessage()} \n";

/** @var PlaceOrderResponse $orderInfo */
$orderInfo = $endpointResponse->getResult();
echo "Order ID: {$orderInfo->getOrderId()}\n";
echo "Order Link ID: {$orderInfo->getOrderLinkId()}\n";

/**
* Return code: 0
* Return message: OK 
* Order ID: bac5bf12-edf6-433b-8ce4-d4d14de281cd
* Order Link ID:
*/
````

<h3 align="left" width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderRequestInterface;

interface IPlaceOrderRequestInterface
{
    public function setSymbol(string $symbol): self; // Trading pair
    public function setSide(string $side): self; // Enum: 'Buy' or 'Sell'
    public function setOrderType(string $orderType): self; // Enum: 'Market' or 'Limit'
    public function setQty(float $quantity): self; // Quantity
    public function setTimeInForce(string $timeInForce): self; // Order execution mode. For possible values see official documentation
    public function setPrice(float $price): self; // Limit order price. Leave empty if orderType = Market
    public function setTriggerDirection(int $triggerDirection): self; // Conditional order parameter. Used to determine the expected direction of a conditional order.
    public function setTriggerPrice(string $triggerPrice): self; // Conditional order parameter.
    public function setTriggerBy(string $triggerBy): self; // Trigger price type. Default: LastPrice.
    public function setPositionIdx(int $positionIdx): self; // Position index. Required if hedging mode is enabled.
    public function setOrderLinkId(string $orderLinkId): self; // Custom order ID. Maximum 36 characters.
    public function setTakeProfit(float $takeProfit): self; // Take profit price
    public function setStopLoss(float $stopLoss): self; // Stop loss price
    public function setTpTriggerBy(string $tpTriggerBy): self; // The type of price at which the take profit is activated. Default: LastPrice
    public function setSlTriggerBy(string $slTriggerBy): self; // The type of price at which the stop loss is activated. Default: LastPrice
    public function setReduceOnly(bool $reduceOnly): self; // true - means that your position can only decrease in size if this order is triggered
    public function setSmpType(string $smpType): self; // Execution type SMP.
    public function setCloseOnTrigger(bool $closeOnTrigger): self; // Parameter for closing an order.
    public function setTpslMode(string $tpslMode): self; // TP/SL mode
    public function setTpLimitPrice(string $tpLimitPrice): self; // The limit order price when the take profit price is triggered. Only works when tpslMode=Partial or tpOrderType=Limit.
    public function setSlLimitPrice(string $slLimitPrice): self; // Limit order price when stop loss is triggered. Only works when tpslMode=Partial and slOrderType=Limit.
    public function setTpOrderType(string $tpOrderType): self; // The type of order that triggers the take profit.
    public function setSlOrderType(string $slOrderType): self; // The type of order that triggers the stop loss.
    
    // ... Getters
    
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Request\PlaceOrderRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSymbol(string $symbol)</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSide(string $side)</td>
    <td><b>YES</b></td>
    <td>Enum: 'Buy' or 'Sell'</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setOrderType(string $orderType)</td>
    <td><b>YES</b></td>
    <td>Enum: 'Market' or 'Limit'</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setQty(float $quantity)</td>
    <td><b>YES</b></td>
    <td>Quantity</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTimeInForce(string $timeInForce)</td>
    <td><b>YES</b></td>
    <td>Order execution mode. For possible values see <a href="https://www.bybit.com/en-US/help-center/s/article/What-Are-Time-In-Force-TIF-GTC-IOC-FOK" target="_blank">official documentation</a></td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setPrice(float $price)</td>
    <td>NO</td>
    <td>Limit order price. Leave empty if orderType = Market</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTriggerDirection(int $triggerDirection)</td>
    <td>NO</td>
    <td>
      Conditional order parameter. Used to determine the expected direction of a conditional order. <br />
      1: Triggered when the market price rises to the trigger price. <br />
      2: Triggered when the market price falls to the trigger price <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTriggerPrice(string $triggerPrice)</td>
    <td>NO</td>
    <td>
      Conditional order parameter. <br /> 
      If you expect the price to rise and trigger your conditional order, make sure that: <br />
      triggerPrice > markPrice <br />
      Otherwise, triggerPrice < markPrice
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTriggerBy(string $triggerBy)</td>
    <td>NO</td>
    <td>
      Trigger price type. Default: LastPrice. <br />
      Possible values: <br />
      - LastPrice <br />
      - MarkPrice <br />
      - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setPositionIdx(int $positionIdx)</td>
    <td>NO</td>
    <td>
      Position index. Required if hedging mode is enabled. <br />
      Possible values: <br />
      - 0: Unidirectional mode (default) <br />
      - 1: Long <br />
      - 2: Short <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>
      Custom order ID. Maximum 36 characters. <br />
      Combinations of numbers, letters (uppercase and lowercase), dashes and underscores are supported. <br />
      The OrderLinkId can be reused after the original order is filled or cancelled.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTakeProfit(float $takeProfit)</td>
    <td>NO</td>
    <td>Take profit price</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setStopLoss(float $stopLoss)</td>
    <td>NO</td>
    <td>Stop loss price</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTpTriggerBy(string $tpTriggerBy)</td>
    <td>NO</td>
    <td>
      The type of price at which the take profit is activated. Default: LastPrice <br />
      Possible values: <br />
      - LastPrice <br />
      - MarkPrice <br />
      - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSlTriggerBy(string $slTriggerBy)</td>
    <td>NO</td>
    <td>
      The type of price at which the stop loss is activated. Default: LastPrice <br />
      Possible values: <br />
      - LastPrice <br />
      - MarkPrice <br />
      - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setReduceOnly(bool $reduceOnly)</td>
    <td>NO</td>
    <td>
      <a href="https://www.bybit.com/en-US/help-center/s/article/What-is-a-Reduce-Only-Order" target="_blank">Description of the parameter in the official documentation</a> <br />
      true means that your position can only decrease in size if this order is triggered. <br />
      If "reduce_only" is true, then take profit/stop loss cannot be set.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSmpType(string $smpType)</td>
    <td>NO</td>
    <td>
      <a href="https://bybit-exchange.github.io/docs/v3/smp" target="_blank">Description of the parameter in the official documentation</a> <br />
      Execution type SMP.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setCloseOnTrigger(bool $closeOnTrigger)</td>
    <td>NO</td>
    <td>
        <a href="https://www.bybit.com/en-US/help-center/bybitHC_Article?language=en_US&id=000001050" target="_blank">What is closing with a trigger order?</a> <br />
        Parameter for closing an order. This can only reduce your position, but not increase it. <br />
        If there is not enough available balance in the account when the close order is triggered, <br />
        then other active orders of similar contracts will be canceled or reduced. <br />
        It can be used to ensure that your stop loss reduces your position regardless of your current available margin.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTpslMode(string $tpslMode)</td>
    <td>NO</td>
    <td>
      TP/SL mode <br />
        - Full: entire position by TP/SL. Then tpOrderType or slOrderType should be Market. <br />
        - Partial: partial execution of tp/sl. TP/SL limit orders are supported. Note: When creating a tp/sl constraint, the tpslMode parameter is required.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTpLimitPrice(string $tpLimitPrice)</td>
    <td>NO</td>
    <td>
        The limit order price when the take profit price is triggered. <br />
        Only works when <b>tpslMode=Partial</b> or <b>tpOrderType=Limit</b>.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSlLimitPrice(string $slLimitPrice)</td>
    <td>NO</td>
    <td>
        Limit order price when stop loss is triggered. <br />
        Only works when <b>tpslMode=Partial</b> and <b>slOrderType=Limit</b>.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTpOrderType(string $tpOrderType)</td>
    <td>NO</td>
    <td>
        The type of order that triggers the take profit. <br />
        Possible values: Market (- default) or Limit. <br />
        For <b>tpslMode=Full</b> only <b>tpOrderType=Market</b> is supported.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSlOrderType(string $slOrderType)</td>
    <td>NO</td>
    <td>
        The type of order that triggers the stop loss. <br />
        Possible values: Market (- default) or Limit. <br />
        For <b>tpslMode=Full</b> only <b>tpOrderType=Market</b> is supported.
    </td>
  </tr>
</table>

<br />

<h3 align="left" width="100%"><b>RESPONSE STRUCTURE</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderResponseInterface;

interface IPlaceOrderResponseInterface
{
    public function getOrderId(): ?string; // Order ID
    public function getOrderLinkId(): string; // Custom Order ID
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
    <sup><b>DTO</b></sup> <br />
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Response\PlaceOrderResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IPlaceOrderResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IPlaceOrderResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Custom Order ID</td>
  </tr>
</table>

---