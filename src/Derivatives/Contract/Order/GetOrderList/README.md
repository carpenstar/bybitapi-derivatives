# Contract - Account - Order - Get Order List
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/order-list)</b>
<p>List of orders</p>

> Since order creation/cancellation is asynchronous, the data returned from this endpoint may be delayed.


<br />

<h3 align="left" width="100%"><b>EXAMPLE</b></h3>

---

```php
$bybitApi = (new BybitAPI())
    ->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

/** @var IResponseInterface $endpointResponse */
$endpointResponse = $bybitApi->privateEndpoint(GetOrderList::class,
    (new GetOrderListRequest())->setSymbol('BTCUSDT')->setLimit(2))
    ->execute();

echo "Return code: {$endpointResponse->getReturnCode()} \n";
echo "Return message: {$endpointResponse->getReturnMessage()} \n";

/** @var GetOrderListResponse $getOrderListResponse */
$getOrderListResponse = $endpointResponse->getResult();
echo "Product Category: {$getOrderListResponse->getCategory()}\n";
echo "Next Page Cursor: {$getOrderListResponse->getNextPageCursor()}\n";
echo "Order List:\n";
        
/** @var IGetOrderListResponseItemInterface $order */
foreach ($getOrderListResponse->getOrderList() as $order) {
    echo "-----\n";
    echo "Symbol: {$order->getSymbol()}\n";
    echo "Order ID: {$order->getOrderId()}\n";
    echo "Order Link ID: {$order->getOrderLinkId()}\n";
    echo "Side: {$order->getSide()}\n";
    echo "Order Type: {$order->getOrderType()}\n";
    echo "Order price: {$order->getPrice()}\n";
    echo "Order Quantity: {$order->getQty()}\n";
    echo "Time In Force: {$order->getTimeInForce()}\n";
    echo "Order Status: {$order->getOrderStatus()}\n";
    echo "Position Index: {$order->getPositionIdx()}\n";
    echo "Last Price On Created: {$order->getLastPriceOnCreated()}\n";
    echo "Created Time: {$order->getCreatedTime()->format('Y-m-d H:i:s')}\n";
    echo "Updated Time: {$order->getUpdatedTime()->format('Y-m-d H:i:s')}\n";
    echo "Cancel Type: {$order->getCancelType()}\n";
    echo "Reject Reason: {$order->getRejectReason()}\n";
    echo "Stop Order Price: {$order->getStopOrderType()}\n";
    echo "Trigger Direction: {$order->getTriggerDirection()}\n";
    echo "Trigger By: {$order->getTriggerBy()}\n";
    echo "Trigger Price: {$order->getTriggerPrice()}\n";
    echo "Cumulative Executed Fee: {$order->getCumExecFee()}\n";
    echo "Cumulative Executed Value: {$order->getCumExecValue()}\n";
    echo "Cumulative Executed Quantity: {$order->getCumExecQty()}\n";
    echo "Leaves Value {$order->getLeavesValue()}\n";
    echo "Leaves Quantity: {$order->getLeavesQty()}\n";
    echo "Take Profit: {$order->getTakeProfit()}\n";
    echo "Stop Loss: {$order->getStopLoss()}\n";
    echo "TP/SL Mode: {$order->getTpslMode()}\n";
    echo "Take Profit Limit Price: {$order->getTpLimitPrice()}\n";
    echo "Stop-Loss Limit Price: {$order->getSlLimitPrice()}\n";
    echo "Take Profit Trigger By {$order->getTpTriggerBy()}\n";
    echo "Stop-Loss Trigger By {$order->getSlTriggerBy()}\n";
    echo "Reduce Only: {$order->isReduceOnly()}\n";
    echo "Close On Trigger: {$order->isCloseOnTrigger()} {}\n";
    echo "Block Trade ID: {$order->getBlockTradeId()}\n";
}
        
/**
 * Return code: 0
 * Return message: OK
 * Product Category:
 * Next Page Cursor: eyJza2lwX2xvY2FsX3N5bWJvbCI6ZmFsc2UsInBhZ2VfdG9rZW4iOiIzODA1NCJ9
 * Order List:
 * -----
 *  Symbol: BTCUSDT
 *  Order ID: 55b6ef38-689e-46c0-a55b-e7124f90004a
 *  Order Link ID:
 *  Side: Sell
 *  Order Type: Limit
 *  Order price: 66037
 *  Order Quantity: 0.001
 *  Time In Force: GoodTillCancel
 *  Order Status: Filled
 *  Position Index: 0
 *  Last Price On Created: 0
 *  Created Time: 2024-06-18 21:11:47
 *  Updated Time: 2024-06-20 10:57:59
 *  Cancel Type: UNKNOWN
 *  Reject Reason: EC_NoError
 *  Stop Order Price: UNKNOWN
 *  Trigger Direction: 0
 *  Trigger By: UNKNOWN
 *  Trigger Price: 0
 *  Cumulative Executed Fee: 0.0132074
 *  Cumulative Executed Value: 66.037
 *  Cumulative Executed Quantity: 0.001
 *  Leaves Value 0
 *  Leaves Quantity: 0
 *  Take Profit: 0
 *  Stop Loss: 0
 *  TP/SL Mode:
 *  Take Profit Limit Price: 0
 *  Stop-Loss Limit Price: 0
 *  Take Profit Trigger By UNKNOWN
 *  Stop-Loss Trigger By UNKNOWN
 *  Reduce Only:
 *  Close On Trigger:  {}
 *  Block Trade ID:
 *  -----
 *  Symbol: BTCUSDT
 *  Order ID: 4f279264-6d38-46c1-8216-7e5a2f110c11
 *  Order Link ID:
 *  Side: Sell
 *  Order Type: Limit
 *  Order price: 67037
 *  Order Quantity: 0.001
 *  Time In Force: GoodTillCancel
 *  Order Status: New
 *  Position Index: 0
 *  Last Price On Created: 0
 *  Created Time: 2024-06-18 21:11:43
 *  Updated Time: 2024-06-18 21:11:43
 *  Cancel Type: UNKNOWN
 *  Reject Reason: EC_NoError
 *  Stop Order Price: UNKNOWN
 *  Trigger Direction: 0
 *  Trigger By: UNKNOWN
 *  Trigger Price: 0
 *  Cumulative Executed Fee: 0
 *  Cumulative Executed Value: 0
 *  Cumulative Executed Quantity: 0
 *  Leaves Value 67.037
 *  Leaves Quantity: 0.001
 *  Take Profit: 0
 *  Stop Loss: 0
 *  TP/SL Mode:
 *  Take Profit Limit Price: 0
 *  Stop-Loss Limit Price: 0
 *  Take Profit Trigger By UNKNOWN
 *  Stop-Loss Trigger By UNKNOWN
 *  Reduce Only:
 *  Close On Trigger:  {}
 *  Block Trade ID:
 **/
```

<br />

<h3 align="left" width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

interface IGetOrderListRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

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
     * Order status. Return all status orders if not passed
     * @param string $orderStatus
     * @return self
     */
    public function setOrderStatus(string $orderStatus): self;
    public function getOrderStatus(): string;

    /**
     * Order,StopOrder
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
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces\IGetOrderListRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Request\GetOrderListRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setSymbol(string $symbol)</td>
    <td>NO</td>
    <td> Trading pair </td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderId(string $orderId)</td>
    <td>NO</td>
    <td>order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>Custom order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderStatus(string $orderStatus)</td>
    <td>NO</td>
    <td>Order status. Return all status orders if not passed</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderFilter(string $orderFilter)</td>
    <td>NO</td>
    <td>Possible values: <b>Order</b>: active order, <b>StopOrder</b>: conditional order</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setLimit(int $limit)</td>
    <td>NO</td>
    <td>Limit for data size per page. [1, 50]. Default: 20</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setCursor(string $cursor)</td>
    <td>NO</td>
    <td>Next page cursor</td>
  </tr>
</table>

<br />

<h3 align="left" width="100%"><b>RESPONSE STRUCTURE</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseItemInterface;

interface IGetOrderListResponseInterface
{
    /**
     * Cursor. Used to pagination
     * @return string
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
    public function getOrderList(): array;
}
````
<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces\IGetOrderListResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Response\GetOrderListResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getNextPageCursor()</td>
    <td>string</td>
    <td>Cursor. Used to pagination</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCategory()</td>
    <td>string</td>
    <td>Product Category</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getOrderList()</td>
    <td>IGetOpenOrdersResponseItemInterface[]</td>
    <td>List of orders</td>
  </tr>
</table>

<br />

```php
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
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces\IGetOrderListResponseItemInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Response\GetOrderListResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getSymbol()</td>
    <td>string</td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Custom Order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getSide()</td>
    <td>string</td>
    <td>
        Buy,Sell
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getOrderType()</td>
    <td>string</td>
    <td>
        Order type. Market,Limit. For TP/SL order, it means the order type after triggered
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getPrice()</td>
    <td>float</td>
    <td>
        Order price
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getQty()</td>
    <td>float</td>
    <td>
        Order quantity
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getTimeInForce()</td>
    <td>string</td>
    <td>
        Time in force
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getLastPriceOnCreated()</td>
    <td>string</td>
    <td>
        Last price when place the order
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getCreatedTime()</td>
    <td>DateTime</td>
    <td>
        Order created timestamp (ms)
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getUpdatedTime()</td>
    <td>DateTime</td>
    <td>
        Order updated timestamp (ms)
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getCancelType()</td>
    <td>string</td>
    <td>
        Cancel type
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getStopOrderType()</td>
    <td>string</td>
    <td>
        Stop order type
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getTriggerDirection()</td>
    <td>int</td>
    <td>
        Trigger direction. 1: rise, 2: fall
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getTriggerBy()</td>
    <td>string</td>
    <td>
        The trigger type of trigger price
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getTriggerPrice()</td>
    <td>null|float</td>
    <td>
        Trigger price
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getCumExecValue()</td>
    <td>float</td>
    <td>
        Cumulative executed order value
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getCumExecFee()</td>
    <td>float</td>
    <td>
        Cumulative executed trading fee
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getCumExecQty()</td>
    <td>float</td>
    <td>
        Cumulative executed order qty
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getLeavesValue()</td>
    <td>float</td>
    <td>
        The estimated value not executed
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getLeavesQty()</td>
    <td>float</td>
    <td>
        The remaining qty not executed
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getTakeProfit()</td>
    <td>float</td>
    <td>
        Take profit price
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getStopLoss()</td>
    <td>float</td>
    <td>
        Stop loss price
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getTpslMode()</td>
    <td>string</td>
    <td>
        TP/SL mode, Full: entire position for TP/SL. Partial: partial position tp/sl
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getSlTriggerBy()</td>
    <td>string</td>
    <td>
        The price type to trigger stop loss
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::isReduceOnly()</td>
    <td>bool</td>
    <td>
        Reduce only. true means reduce position size
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::isCloseOnTrigger()</td>
    <td>string</td>
    <td>
        Close on trigger
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getSmpType()</td>
    <td>string</td>
    <td>
        SMP execution type
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getSmpGroup()</td>
    <td>string</td>
    <td>
        Smp group ID. If the uid has no group, it is 0 by default
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getSmpOrderId()</td>
    <td>string</td>
    <td>
        The counterparty's orderID which triggers this SMP execution
    </td>
  </tr>
</table>