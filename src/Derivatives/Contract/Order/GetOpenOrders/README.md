# Contract - Account - Order - Get Open Orders
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/open-order)</b>
<p>Endpoint returns data on open or partially filled orders in real time.</p>

> If neither orderId nor orderLinkId is passed, no more than 500 open or partially filled orders will be returned.
> Entries are sorted by creation time from newest to oldest.

<br />

<h3 align="left" width="100%"><b>EXAMPLE</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\GetOpenOrders;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Request\GetOpenOrdersRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Response\GetOpenOrdersResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Response\GetOpenOrdersResponseItem;

$bybitApi = (new BybitAPI())
    ->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

$getOpenOrdersResponse = $bybitApi->privateEndpoint(GetOpenOrders::class,
    (new GetOpenOrdersRequest())->setSymbol('BTCUSDT'))->execute();

echo "Return code: {$getOpenOrdersResponse->getReturnCode()} \n";
echo "Return message: {$getOpenOrdersResponse->getReturnMessage()} \n";

/** @var GetOpenOrdersResponse $openOrderInfo */
$openOrderInfo = $getOpenOrdersResponse->getResult();

/** @var GetOpenOrdersResponseItem $order */
foreach ($openOrderInfo->getOpenOrders() as $order) {
    echo "-----\n";
    echo "Symbol: {$order->getSymbol()}\n";
    echo "Order ID: {$order->getOrderId()}\n";
    echo "Order Link ID {$order->getOrderLinkId()}\n";
    echo "Order Side: {$order->getSide()}\n";
    echo "Order Type {$order->getOrderType()}\n";
    echo "Order Price: {$order->getPrice()}\n";
    echo "Order Quantity: {$order->getQty()}\n";
    echo "Time in force: {$order->getTimeInForce()}\n";
    echo "Order Status: {$order->getOrderStatus()}\n";
    echo "Last Price On Created: {$order->getLastPriceOnCreated()}\n";
    echo "Create Time: {$order->getCreatedTime()->format('Y-m-d H:i:s')}\n";
    echo "Update Time {$order->getUpdatedTime()->format('Y-m-d H:i:s')}\n";
    echo "Cancel Type: {$order->getCancelType()}\n";
    echo "Stop Order Type: {$order->getStopOrderType()}\n";
    echo "Trigger Direction: {$order->getTriggerDirection()}\n";
    echo "Trigger By {$order->getTriggerBy()}\n";
    echo "Trigger Price: {$order->getTriggerPrice()}\n";
    echo "Cumulative Execution Value: {$order->getCumExecValue()}\n";
    echo "Cumulative Execution Fee: {$order->getCumExecFee()}\n";
    echo "Cumulative Execution Quantity: {$order->getCumExecQty()}\n";
    echo "Leaves Value: {$order->getLeavesValue()}\n";
    echo "Leaves Quantity: {$order->getLeavesQty()}\n";
    echo "Take Profit Price: {$order->getTakeProfit()}\n";
    echo "Stop Loss Price: {$order->getStopLoss()} {}\n";
    echo "TP/SL Mode: {$order->getTpslMode()}\n";
    echo "Take Profit Limit Price: {$order->getTpLimitPrice()}\n";
    echo "Stop Loss Limit Price: {$order->getSlLimitPrice()}\n";
    echo "Take Profit Trigger By: {$order->getTpTriggerBy()}\n";
    echo "Stop Loss Trigger By: {$order->getSlTriggerBy()}\n";
    echo "Reduce Only: {$order->isReduceOnly()}\n";
}

/**
* Return code: 0 
* Return message: OK 
*   Category:  
*   Next Page Cursor: QVAxOXRkSGtQZVBoUnpSRjZScDQxS3VENEc4UW5ZUWZaNStWZnp0Z0NSeW4wNEFyZXZNdDNJRWZtcXcwRGJpcUwrNHRpRWl0VW41NTl6aFI0SzBWU3c9PQ==
*   List:
*       -----
*       Symbol: BTCUSDT
*       Order ID: 55b6ef38-689e-46c0-a55b-e7124f90004a
*       Order Link ID 
*       Order Side: Sell
*       Order Type Limit
*       Order Price: 66037
*       Order Quantity: 0.001
*       Time in force: GoodTillCancel
*       Order Status: New
*       Last Price On Created: 64929.60
*       Create Time: 2024-06-18 21:11:47
*       Update Time 2024-06-18 21:11:47
*       Cancel Type: UNKNOWN
*       Stop Order Type: UNKNOWN
*       Trigger Direction: 0
*       Trigger By UNKNOWN
*       Trigger Price: 0
*       Cumulative Execution Value: 0
*       Cumulative Execution Fee: 0
*       Cumulative Execution Quantity: 0
*       Leaves Value: 66.037
*       Leaves Quantity: 0.001
*       Take Profit Price: 0
*       Stop Loss Price: 0 {}
*       TP/SL Mode: 
*       Take Profit Limit Price: 0
*       Stop Loss Limit Price: 0
*       Take Profit Trigger By: UNKNOWN
*       Stop Loss Trigger By: UNKNOWN
*       Reduce Only: 
*       -----
*       Symbol: BTCUSDT
*       Order ID: 4f279264-6d38-46c1-8216-7e5a2f110c11
*       Order Link ID 
*       Order Side: Sell
*       Order Type Limit
*       Order Price: 67037
*       Order Quantity: 0.001
*       Time in force: GoodTillCancel
*       Order Status: New
*       Last Price On Created: 64924.00
*       Create Time: 2024-06-18 21:11:43
*       Update Time 2024-06-18 21:11:43
*       Cancel Type: UNKNOWN
*       Stop Order Type: UNKNOWN
*       Trigger Direction: 0
*       Trigger By UNKNOWN
*       Trigger Price: 0
*       Cumulative Execution Value: 0
*       Cumulative Execution Fee: 0
*       Cumulative Execution Quantity: 0
*       Leaves Value: 67.037
*       Leaves Quantity: 0.001
*       Take Profit Price: 0
*       Stop Loss Price: 0 {}
*       TP/SL Mode: 
*       Take Profit Limit Price: 0
*       Stop Loss Limit Price: 0
*       Take Profit Trigger By: UNKNOWN
*       Stop Loss Trigger By: UNKNOWN
*       Reduce Only:
 */
```

<br />

<h3 align="left" width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;


    /**
     * Base coin
     * @param string $baseCoin
     * @return self
     */
    public function setBaseCoin(string $baseCoin): self;
    public function getBaseCoin(): string;

    /**
     * Settle coin. One of symbol,baseCoin and settleCoin is required. Priority: symbol > baseCoin > settleCoin
     * @param string $settleCoin
     * @return self
     */
    public function setSettleCoin(string $settleCoin): self;
    public function getSettleCoin(): string;


    /**
     * Order id
     * @param string $orderId
     * @return self
     */
    public function setOrderId(string $orderId): self;
    public function getOrderId(): string;

    /**
     * User customised order id
     * @param string $orderLinkId
     * @return self
     */
    public function setOrderLinkId(string $orderLinkId): self;
    public function getOrderLinkId(): string;

    /**
     * Order: active order, StopOrder: conditional order
     * @param string $orderFilter
     * @return self
     */
    public function setOrderFilter(string $orderFilter): self;
    public function getOrderFilter(): string;

    /**
     * Limit for data size per page. [1, 50]. Default: 20
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;

    /**
     * Cursor. Use the nextPageCursor token from the response to retrieve the next page of the result set
     * @param string $cursor
     * @return self
     */
    public function setCursor(string $cursor): self;
    public function getCursor(): string;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Request\GetOpenOrdersRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setBaseCoin(string $baseCoin)</td>
    <td>NO</td>
    <td> Base token </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setSettleCoin(string $settleCoin)</td>
    <td>NO</td>
    <td>Settle coin</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderId(string $orderId)</td>
    <td>NO</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>Custom order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderFilter(string $orderFilter)</td>
    <td>NO</td>
    <td>Possible values: <b>Order</b>: active order, <b>StopOrder</b>: conditional order</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setCursor(string $cursor)</td>
    <td>NO</td>
    <td>Next page cursor</td>
  </tr>
</table>

<br />

<h3 align="left" width="100%"><b>RESPONSE STRUCTURE</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersResponseInterface
{
    /**
     * Cursor. Used to pagination
     * @return mixed
     */
    public function getNextPageCursor(): string;

    /**
     * Product type
     * @return string
     */
    public function getCategory(): string;

    /**
     * @return IGetOpenOrdersResponseItemInterface[]
     */
    public function getOpenOrders(): array;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Request\GetOpenOrdersRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getNextPageCursor()()</td>
    <td>string</td>
    <td>Cursor. Used to pagination</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCategory()</td>
    <td>string</td>
    <td>Product category</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getOpenOrders()</td>
    <td>IGetOpenOrdersResponseItemInterface[]</td>
    <td>List of open orders</td>
  </tr>
</table>

<br />

```php
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
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseItemInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Response\GetOpenOrdersResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getSymbol()</td>
    <td>string</td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Custom Order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getSide()</td>
    <td>string</td>
    <td>
        Side. Buy,Sell
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getOrderType()</td>
    <td>string</td>
    <td>
        Order type. Market,Limit. For TP/SL order, it means the order type after triggered
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getPrice()</td>
    <td>float</td>
    <td>
        Order price
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getQty()</td>
    <td>float</td>
    <td>
        Order qty
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getTimeInForce()</td>
    <td>string</td>
    <td>
        Time in force
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getLastPriceOnCreated()</td>
    <td>string</td>
    <td>
        Last price when create the order
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getCreatedTime()</td>
    <td>DateTime</td>
    <td>
        Created timestamp (ms)
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getUpdatedTime()</td>
    <td>DateTime</td>
    <td>
        Updated timestamp (ms)
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getCancelType()</td>
    <td>string</td>
    <td>
        Cancel type
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getStopOrderType()</td>
    <td>string</td>
    <td>
        Stop order type
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getTriggerDirection()</td>
    <td>int</td>
    <td>
        1: rise, 2: fall
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getTriggerBy()</td>
    <td>string</td>
    <td>
        The trigger type of trigger price
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getTriggerPrice()</td>
    <td>null|float</td>
    <td>
        Trigger price
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getCumExecValue()</td>
    <td>float</td>
    <td>
        Cumulative executed position value
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getCumExecFee()</td>
    <td>float</td>
    <td>
        Cumulative trading fee
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getCumExecQty()</td>
    <td>float</td>
    <td>
        Cumulative executed qty
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getLeavesValue()</td>
    <td>float</td>
    <td>
        The remaining value waiting to be traded
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getLeavesQty()</td>
    <td>float</td>
    <td>
        The remaining quantity waiting to be traded
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getTakeProfit()</td>
    <td>float</td>
    <td>
        Take profit price
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getStopLoss()</td>
    <td>float</td>
    <td>
        Stop loss price
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getTpslMode()</td>
    <td>string</td>
    <td>
        TP/SL mode, Full: entire position for TP/SL. Partial: partial position tp/sl
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getSlTriggerBy()</td>
    <td>string</td>
    <td>
        The limit order price when stop loss price is triggered
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::isReduceOnly()</td>
    <td>bool</td>
    <td>
        Reduce only. true means reduce position size
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::isCloseOnTrigger()</td>
    <td>string</td>
    <td>
        Close on trigger. What is a close on trigger order?
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getSmpType()</td>
    <td>string</td>
    <td>
        SMP execution type
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getSmpGroup()</td>
    <td>string</td>
    <td>
        Smp group ID. If the uid has no group, it is 0 by default
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getSmpOrderId()</td>
    <td>string</td>
    <td>
        The counterparty's orderID which triggers this SMP execution
    </td>
  </tr>
</table>

---