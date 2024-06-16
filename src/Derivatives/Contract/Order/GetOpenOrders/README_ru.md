# Contract - Contract - Order - Get Open Orders
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/open-order)</b>
<p>Эндпоинт возвращает данные об открытых или частично исполненных заказов в режиме реального времени.</p>

> Если не переданы ни orderId, ни orderLinkId, будет возвращено не более 500 открытых или частично исполненных ордеров.
> Записи сортируются по времени создания от самых новых к самым старым.

<br />

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

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

<h3 align="left" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersRequestInterface
{
    /**
     * Торговая пара
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;


    /**
     * Базовый токен
     * @param string $baseCoin
     * @return self
     */
    public function setBaseCoin(string $baseCoin): self;
    public function getBaseCoin(): string;

    /**
     * Расчетный токен. Требуется один из символов, baseCoin и SettleCoin. Приоритет: символ > baseCoin > SettleCoin
     * @param string $settleCoin
     * @return self
     */
    public function setSettleCoin(string $settleCoin): self;
    public function getSettleCoin(): string;


    /**
     * Системный идентификатор ордера
     * @param string $orderId
     * @return self
     */
    public function setOrderId(string $orderId): self;
    public function getOrderId(): string;

    /**
     * Пользовательский идентификатор ордера
     * @param string $orderLinkId
     * @return self
     */
    public function setOrderLinkId(string $orderLinkId): self;
    public function getOrderLinkId(): string;

    /**
     * Order: активный ордер, StopOrder: условный ордер
     * @param string $orderFilter
     * @return self
     */
    public function setOrderFilter(string $orderFilter): self;
    public function getOrderFilter(): string;

    /**
     * Ограничение записей на страницу. [1, 50]. По умолчанию: 20
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;

    /**
     * Cursor. Используйте токен nextPageCursor из ответа, чтобы получить следующую страницу набора результатов.
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
        <sup><b>ИНТЕРФЕЙС</b></sup> <br />
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
    <th style="width: 45%; text-align: center">МЕТОД</th>
    <th style="width: 5%; text-align: center">ОБЯЗАТЕЛЬНО</th>
    <th style="width: 50%; text-align: center">ОПИСАНИЕ</th>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setBaseCoin(string $baseCoin)</td>
    <td>НЕТ</td>
    <td>Базовый токен</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setSettleCoin(string $settleCoin)</td>
    <td>НЕТ</td>
    <td>Расчетный токен</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderId(string $orderId)</td>
    <td>НЕТ</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>Пользовательский ID ордера</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderFilter(string $orderFilter)</td>
    <td>НЕТ</td>
    <td>Возможные значения: Order: активный ордер, StopOrder: условный ордер.</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setCursor(string $cursor)</td>
    <td>НЕТ</td>
    <td>Курсор следующей страницы</td>
  </tr>
</table>

<br />

<h3 align="left" width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersResponseInterface
{
    /**
    * Cursor. Используется для пагинации
    * @return null|string
    */
    public function getNextPageCursor(): ?string;

    /**
     * Категория: linear, option, inverse
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
        <sup><b>ИНТЕРФЕЙС</b></sup> <br />
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
    <td>null|string</td>
    <td>Cursor. Используется для пагинации</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCategory()</td>
    <td>string</td>
    <td>Категория: linear, option, inverse</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getOpenOrders()</td>
    <td>IGetOpenOrdersResponseItemInterface[]</td>
    <td>Массив открытых ордеров</td>
  </tr>
</table>

<br />

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersResponseItemInterface
{
    /**
     * Торговая пара
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Order id
     * @return string
     */
    public function getOrderId(): string;

    /**
     * Пользовательский ID ордера
     * @return string
     */
    public function getOrderLinkId(): string;

    /**
     * Направление. Buy,Sell
     * @return string
     */
    public function getSide(): string;

    /**
     * Тип ордера. Market, Limit. Для ордера TP/SL это означает тип ордера после его срабатывания.
     * @return string
     */
    public function getOrderType(): string;

    /**
     * Цена ордера
     * @return float
     */
    public function getPrice(): float;

    /**
     * Объем ордера
     * @return float
     */
    public function getQty(): float;

    /**
     * Время действия ордера
     * @return string
     */
    public function getTimeInForce(): string;

    /**
     * Статус ордера
     * @return string
     */
    public function getOrderStatus(): string;

    /**
     * Последняя цена при создании ордера
     * @return string
     */
    public function getLastPriceOnCreated(): string;

    /**
     * Время создания заказа
     * @return \DateTime
     */
    public function getCreatedTime(): \DateTime;

    /**
     * Время обновления заказа
     * @return \DateTime
     */
    public function getUpdatedTime(): \DateTime;

    /**
     * Тип закрытия ордера
     * @return string
     */
    public function getCancelType(): string;

    /**
     * Тип остановки ордера
     * @return string
     */
    public function getStopOrderType(): string;

    /**
     * 1: rise, 2: fall
     * @return int
     */
    public function getTriggerDirection(): int;

    /**
     * Тип триггерной цены
     * @return string
     */
    public function getTriggerBy(): string;

    /**
     * Триггерная цена
     * @return float|null
     */
    public function getTriggerPrice(): ?float;

    /**
     * Суммарное значение исполненной позиции
     * @return float
     */
    public function getCumExecValue(): float;

    /**
     * Совокупная торговая комиссия
     * @return float
     */
    public function getCumExecFee(): float;

    /**
     * Совокупное выполненное количество
     * @return float
     */
    public function getCumExecQty(): float;

    /**
     * Оставшаяся стоимость, которая ожидает обмена
     * @return float
     */
    public function getLeavesValue(): float;

    /**
     * Оставшееся количество которая ожидает продажи
     * @return float
     */
    public function getLeavesQty(): float;

    /**
     * Цена тейк-профита
     * @return float
     */
    public function getTakeProfit(): float;

    /**
     * Цена стоп-лосса
     * @return float
     */
    public function getStopLoss(): float;

    /**
     * Режим TP/SL, Full: вся позиция по TP/SL. Partial: частичное положение tp/sl
     * @return string
     */
    public function getTpslMode(): string;

    /**
     * Цена лимитного ордера при срабатывании цены тейк-профита
     * @return float
     */
    public function getTpLimitPrice(): float;

    /**
     * Цена лимитного ордера при срабатывании стоп-лосса
     * @return float
     */
    public function getSlLimitPrice(): float;

    /**
     * Триггерный тип тейк-профита
     * @return string
     */
    public function getTpTriggerBy(): string;

    /**
     * Триггерный тип стоп-лосса
     * @return string
     */
    public function getSlTriggerBy(): string;

    /**
     * Только уменьшить. true означает уменьшение размера позиции
     * @return bool
     */
    public function isReduceOnly(): bool;

    /**
     * Закрытие по триггеру
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
        <sup><b>ИНТЕРФЕЙС</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseItemInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Request\GetOpenOrdersRequestItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">МЕТОД</th>
    <th style="width: 20%; text-align: center">ТИП</th>
    <th style="width: 60%; text-align: center">ОПИСАНИЕ</th>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getSymbol()</td>
    <td>string</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский ID ордера</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getSide()</td>
    <td>string</td>
    <td>
        Направление. Buy,Sell
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getOrderType()</td>
    <td>string</td>
    <td>
        Тип ордера. Market,Limit. Для ордера TP/SL это означает тип ордера после его срабатывания.
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getPrice()</td>
    <td>float</td>
    <td>
        Цена ордера
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getQty()</td>
    <td>float</td>
    <td>
        Количество ордера
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
        Последняя цена при создании заказа
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getCreatedTime()</td>
    <td>DateTime</td>
    <td>
        Время создания ордера
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getUpdatedTime()</td>
    <td>DateTime</td>
    <td>
        Время обновления ордера
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getCancelType()</td>
    <td>string</td>
    <td>
        Тип отмены ордера
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getStopOrderType()</td>
    <td>string</td>
    <td>
       Тип завершения ордера
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getTriggerDirection()</td>
    <td>int</td>
    <td>
        1: рост, 2: снижение
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getTriggerBy()</td>
    <td>string</td>
    <td>
        Тип триггерной цены
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getTriggerPrice()</td>
    <td>null|float</td>
    <td>
        Триггерная цена
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getCumExecValue()</td>
    <td>float</td>
    <td>
        Суммарное значение исполненной позиции
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getCumExecFee()</td>
    <td>float</td>
    <td>
        Совокупная торговая комиссия
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getCumExecQty()</td>
    <td>float</td>
    <td>
        Совокупное выполненное количество
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getLeavesValue()</td>
    <td>float</td>
    <td>
        Оставшаяся стоимость ожидает обмена
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getLeavesQty()</td>
    <td>float</td>
    <td>
        Оставшееся количество ожидает продажи
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getTakeProfit()</td>
    <td>float</td>
    <td>
        Цена тейк-профита
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getStopLoss()</td>
    <td>float</td>
    <td>
        Цена стоп-лосса
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getTpslMode()</td>
    <td>string</td>
    <td>
        TP/SL режим, Full: вся позиция по TP/SL. Partial: частичная позиция TP/SL
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getSlTriggerBy()</td>
    <td>string</td>
    <td>
        Цена лимитного ордера при срабатывании стоп-лосса
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::isReduceOnly()</td>
    <td>bool</td>
    <td>
        true означает уменьшение размера позиции
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::isCloseOnTrigger()</td>
    <td>string</td>
    <td>
        Закрытие по триггеру
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
        Smp group ID. Если у uid нет группы, по умолчанию он равен 0.
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseItemInterface::getSmpOrderId()</td>
    <td>string</td>
    <td>
        Идентификатор заказа контрагента, который инициирует выполнение этого SMP.
    </td>
  </tr>
</table>

---