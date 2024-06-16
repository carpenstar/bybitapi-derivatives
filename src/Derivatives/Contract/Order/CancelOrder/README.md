# Contract - Account - Order - Cancel Order
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/cancel)</b>
<p>This endpoint allows you to cancel the specified open order.</p>

> You can cancel the specified partially completed order.

<br />

<h3 align="left" width="100%"><b>EXAMPLE</b></h3>

---

```php
    use Carpenstar\ByBitAPI\BybitAPI;
    use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\CancelOrder;
    use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Request\CancelOrderRequest;
    use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Response\CancelOrderResponse;

    $bybitApi = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

    $cancelOrderResponse = $bybitApi->privateEndpoint(CancelOrder::class,
        (new CancelOrderRequest())->setSymbol('BTCUSDT')->setOrderId('78b869b7-f682-41fe-9edc-dc2dfaaf8d79'))->execute();

    echo "Return code: {$cancelOrderResponse->getReturnCode()} \n";
    echo "Return message: {$cancelOrderResponse->getReturnMessage()} \n";

    /** @var CancelOrderResponse $cancelOrderInfo */
    $cancelOrderInfo = $cancelOrderResponse->getResult();

    echo "Order ID: {$cancelOrderInfo->getOrderId()} \n";
    echo "Order Link ID: {$cancelOrderInfo->getOrderLinkId()} \n";

    /**
    * Return code: 0
    * Return message: OK 
    * Order ID: 78b869b7-f682-41fe-9edc-dc2dfaaf8d79 
    * Order Link ID:
    */
```

<br />

<h3 align="left" width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderRequestInterface
{
    /**
     * Order id. Either orderId or orderLinkId is required
     * @return string
     */
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
    
    /**
     * User customised order id. Either orderId or orderLinkId is required
     * @param string $orderLinkId
     * @return self
     */
    public function setOrderLinkId(string $orderLinkId): self;
    public function setOrderId(string $orderId): self;

    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces\ICancelOrderRequestInterface::class</b>
    </td>
  </tr>
      <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Request\CancelOrderRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ICancelOrderRequestInterface::setSymbol(string $symbol)</td>
    <td>NO</td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>ICancelOrderRequestInterface::setOrderId(string $orderId)</td>
    <td>NO (if specified orderLinkId)</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>ICancelOrderRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>NO (if specified orderId)</td>
    <td>Custom order ID</td>
  </tr>
</table>

<br />

<h3 align="left" width="100%"><b>RESPONSE STRUCTURE</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderResponseInterface
{
    /**
    * Order ID
    * @return string
    */
    public function getOrderId(): string; 
    
    /**
    * Order Link ID
    * @return string
    */
    public function getOrderLinkId(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces\ICancelOrderResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Response\CancelOrderResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ICancelOrderResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>ICancelOrderResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Custom Order ID</td>
  </tr>
</table>

---