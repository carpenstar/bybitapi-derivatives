# Contract - Contract - Order - Get Order List
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/order-list)</b>
<p>Список ордеров</p>

> Поскольку создание/отмена заказа происходит асинхронно, данные, возвращаемые из этого эндпоинта, могут задерживаться.

<br />

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

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

<h3 align="left" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

interface IGetOrderListRequestInterface
{
    /**
     * Торговая пара
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
     * Пользовательский ID ордера
     * @param string $orderLinkId
     * @return self
     */
    public function setOrderLinkId(string $orderLinkId): self;
    public function getOrderLinkId(): string;

    /**
     * Статус заказа. Возращает все ордера по определенному статусу
     * @param string $orderStatus
     * @return self
     */
    public function setOrderStatus(string $orderStatus): self;
    public function getOrderStatus(): string;

    /**
     * Возможные значения: Order: активный ордер, StopOrder: условный ордер.
     * @param string $orderFilter
     * @return self
     */
    public function setOrderFilter(string $orderFilter): self;
    public function getOrderFilter(): string;

    /**
     * Ограничение размера данных на странице. [1, 50]. По умолчанию: 20
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;

    /**
     * Курсор следующей страницы
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
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td> Торговая пара </td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderId(string $orderId)</td>
    <td>НЕТ</td>
    <td>order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>Пользовательский ID ордера</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderStatus(string $orderStatus)</td>
    <td>НЕТ</td>
    <td>Статус заказа. Вернуть все заказы, если параметр не был передан</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderFilter(string $orderFilter)</td>
    <td>НЕТ</td>
    <td>Возможные значения: <b>Order</b>: активный ордер, <b>StopOrder</b>: условный ордер.</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setLimit(int $limit)</td>
    <td>НЕТ</td>
    <td>Ограничение размера данных на странице. [1, 50]. По умолчанию: 20</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setCursor(string $cursor)</td>
    <td>НЕТ</td>
    <td>Курсор следующей страницы</td>
  </tr>
</table>

<br />

<h3 align="left" width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseItemInterface;

interface IGetOrderListResponseInterface
{
    /**
     * Курсор. Используется для пагинации
     * @return string
     */
    public function getNextPageCursor(): string;

    /**
     * Категория
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
    <td>Курсор. Используется для пагинации</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCategory()</td>
    <td>string</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getOrderList()</td>
    <td>IGetOpenOrdersResponseItemInterface[]</td>
    <td>Массив с объектами ордеров</td>
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
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces\IGetOrderListResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Response\GetOrderListResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getSymbol()</td>
    <td>string</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский ID ордера</td>
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
       Тип ордера. Market, Limit. Для ордера TP/SL это означает тип ордера после его срабатывания.
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getPrice()</td>
    <td>float</td>
    <td>
        Цена ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getQty()</td>
    <td>float</td>
    <td>
        Количество ордера
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
       Последняя цена при размещении ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getCreatedTime()</td>
    <td>DateTime</td>
    <td>
        Время создания ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getUpdatedTime()</td>
    <td>DateTime</td>
    <td>
        Время обновления ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getCancelType()</td>
    <td>string</td>
    <td>
        Тип отмены
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getStopOrderType()</td>
    <td>string</td>
    <td>
       Тип завершения ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getTriggerDirection()</td>
    <td>int</td>
    <td>
        Направление триггера. 1: подъем, 2: падение
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getTriggerBy()</td>
    <td>string</td>
    <td>
       Тип триггерной цены
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getTriggerPrice()</td>
    <td>null|float</td>
    <td>
        Триггерная цена
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getCumExecValue()</td>
    <td>float</td>
    <td>
        Совокупная стоимость исполненного ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getCumExecFee()</td>
    <td>float</td>
    <td>
        Совокупная комиссия за исполненную торговлю
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getCumExecQty()</td>
    <td>float</td>
    <td>
        Совокупное количество выполненных заказов
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getLeavesValue()</td>
    <td>float</td>
    <td>
        Неисполненная стоимость ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getLeavesQty()</td>
    <td>float</td>
    <td>
        Не исполненное оставшееся количество
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getTakeProfit()</td>
    <td>float</td>
    <td>
        Цена тейк-профита
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getStopLoss()</td>
    <td>float</td>
    <td>
       Цена стоп-лосса
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getTpslMode()</td>
    <td>string</td>
    <td>
        Режим TP/SL, Full: вся позиция по TP/SL. Частичное: частичное положение TP/SL
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getSlTriggerBy()</td>
    <td>string</td>
    <td>
        Тип цены для срабатывания стоп-лосса
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::isReduceOnly()</td>
    <td>bool</td>
    <td>
        Reduce only. true означает уменьшение размера позиции
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::isCloseOnTrigger()</td>
    <td>string</td>
    <td>
        Закрытие по триггеру
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
        Smp group ID. Если у uid нет группы, по умолчанию он равен 0.
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseItemInterface::getSmpOrderId()</td>
    <td>string</td>
    <td>
        Идентификатор заказа контрагента, который инициирует выполнение этого SMP.
    </td>
  </tr>
</table>

---