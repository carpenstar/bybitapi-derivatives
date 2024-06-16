# Contract - Account - Order - Replace Order
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/replace-order)</b>
<p>Order modification</p>

> You can change open or partially filled orders.

<br />

<h3 align="left" width="100%"><b>EXAMPLE</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Core\Interfaces\IResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\ReplaceOrder;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Request\ReplaceOrderRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Response\ReplaceOrderResponse;

$bybitApi = (new BybitAPI())
    ->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

/** @var IResponseInterface $endpointResponse */
$endpointResponse = $bybitApi->privateEndpoint(ReplaceOrder::class,
    (new ReplaceOrderRequest())
        ->setSymbol('BTCUSDT')
        ->setOrderId('4f279264-6d38-46c1-8216-7e5a2f110c11')
        ->setPrice(68100)
)->execute();

echo "Return code: {$endpointResponse->getReturnCode()} \n";
echo "Return message: {$endpointResponse->getReturnMessage()} \n";

/** @var ReplaceOrderResponse $orderInfo */
$orderInfo = $endpointResponse->getResult();
echo "Order ID: {$orderInfo->getOrderId()}\n";
echo "Order Link ID: {$orderInfo->getOrderLinkId()}\n";
        
/**
* Return code: 0
* Return message: OK 
* Order ID: 4f279264-6d38-46c1-8216-7e5a2f110c11
* Order Link ID:
*/
````

<br />

<h3 align="left" width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
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
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces\IReplaceOrderRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Request\ReplaceOrderRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setSymbol(string $symbol)</td>
    <td>NO</td>
    <td>Trading pair </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setOrderId(string $orderId)</td>
    <td>NO</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>Custom order ID</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setPrice(float $price)</td>
    <td>NO</td>
    <td>New order price </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setQty(float $qty)</td>
    <td>NO</td>
    <td>
      New order quantity
    </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTriggerPrice(float $triggerPrice)</td>
    <td>NO</td>
    <td>Setting/changing trigger price</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTakeProfit(float $takeProfit)</td>
    <td>NO</td>
    <td>Setting/changing take profit</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setStopLoss(float $stopLoss)</td>
    <td>NO</td>
    <td>Setting/changing stop loss</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTpTriggerBy(string $tpTriggerBy)</td>
    <td>NO</td>
    <td>The price type to trigger take profit. When set a take profit, this param is required if no initial value for the order </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setSlTriggerBy(string $slTriggerBy)</td>
    <td>NO</td>
    <td>The price type to trigger stop loss. When set a stop loss, this param is required if no initial value for the order</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTriggerBy(string $triggerBy)</td>
    <td>NO</td>
    <td>Trigger price type. LastPrice, IndexPrice, MarkPrice, LastPrice</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTpLimitPrice(float $tpLimitPrice)</td>
    <td>NO</td>
    <td>Limit order price when take profit is triggered. Only working when original order sets partial limit tp/sl</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setSlLimitPrice(float $slLimitPrice)</td>
    <td>NO</td>
    <td>Limit order price when stop loss is triggered. Only working when original order sets partial limit tp/sl</td>
  </tr>
</table>

<br />

<h3 align="left" width="100%"><b>RESPONSE STRUCTURE</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderResponseInterface
{
    /**
     * Order ID
     * @return string
     */
    public function getOrderId(): string;

    /**
     * User customised order id
     * @return string
     */
    public function getOrderLinkId(): string;
}
```


<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces\IReplaceOrderRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Request\ReplaceOrderRequest::class</b>
    </td>
  </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Type</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IReplaceOrderRequestInterface::getOrderId()</td>
     <td>string</td>
     <td>Order ID</td>
   </tr>
   <tr>
     <td>IReplaceOrderRequestInterface::getOrderLinkId()</td>
     <td>string</td>
     <td>User customised order id</td>
   </tr>
</table>

---