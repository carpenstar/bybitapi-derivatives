# Contract - Position - Get Execution List
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/execution-list)</b>
<p>Список исполненных ордеров пользователя, отсортированный по времени исполнения в порядке убывания. Поддерживает бессрочные валютные пары USDT</p>

> У пользователя может быть несколько исполнений в одном ордере.

<br />

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

```php

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

/** @var IResponseInterface $execListEndpointResponse */
$execListEndpointResponse = $bybit->privateEndpoint(GetExecutionList::class, (new GetExecutionListRequest())
    ->setSymbol('BTCUSDT')
    ->setLimit(3)
)->execute();

echo "Return Code: {$execListEndpointResponse->getReturnCode()}\n";
echo "Return Message: {$execListEndpointResponse->getReturnMessage()}\n";

/** @var GetExecutionListResponse $execListInfoResponse */
$execListInfoResponse = $execListEndpointResponse->getResult();

echo "Category: {$execListInfoResponse->getCategory()}\n";
echo "Next Page Cursor: {$execListInfoResponse->getNextPageCursor()}\n";
foreach ($execListInfoResponse->getExecutionList() as $exec) {
    echo "-----\n";
    echo "Symbol: {$exec->getSymbol()}\n";
    echo "Side: {$exec->getSide()}\n";
    echo "Order ID: {$exec->getOrderId()}\n";
    echo "Order Link ID: {$exec->getOrderLinkId()}\n";
    echo "Order Price: {$exec->getOrderPrice()}\n";
    echo "Order Quantity: {$exec->getOrderQty()}\n";
    echo "Order Type: {$exec->getOrderType()}\n";
    echo "Stop Order Type: {$exec->getOrderType()}\n";
    echo "Execution ID: {$exec->getExecId()}\n";
    echo "Execution Price: {$exec->getExecPrice()}\n";
    echo "Execution Quantity: {$exec->getExecQty()}\n";
    echo "Execution Fee: {$exec->getExecFee()}\n";
    echo "Execution Type: {$exec->getExecType()}\n";
    echo "Execution Value: {$exec->getExecValue()}\n";
    echo "Fee Rate: {$exec->getFeeRate()}\n";
    echo "Last Liquidity Ind: {$exec->getLastLiquidityInd()}\n";
    echo "Is Maker: {$exec->isMaker()}\n";
    echo "Leaves Quantity: {$exec->getLeavesQty()}\n";
    echo "Closed Size: {$exec->getClosedSize()}\n";
    echo "Mark Price: {$exec->getMarkPrice()}\n";
    echo "Index Price {$exec->getIndexPrice()}\n";
    echo "Underlying Price: {$exec->getUnderlyingPrice()}\n";
    echo "Execution Time: {$exec->getExecTime()->format('Y-m-d H:i:s')}\n";
}

/**
 * Return Code: 0
 * Return Message: OK
 * Category:
 * Next Page Cursor: page_token%3D91113706%26
 * -----
 * Symbol: BTCUSDT
 * Side: Sell
 * Order ID: 6e60910f-2c60-48c6-916e-c9c6946b3bc9
 * Order Link ID:
 * Order Price: 61022
 * Order Quantity: 0.015
 * Order Type: Market
 * Stop Order Type: Market
 * Execution ID: 9cb193fe-4367-5d70-95e6-2831af76586f
 * Execution Price: 64225.5
 * Execution Quantity: 0.015
 * Execution Fee: 0.52986038
 * Execution Type: Trade
 * Execution Value: 963.3825
 * Fee Rate: 0.00055
 * Last Liquidity Ind: RemovedLiquidity
 * Is Maker:
 * Leaves Quantity: 0
 * Closed Size: 0.015
 * Mark Price: 64235.6
 * Index Price 0
 * Underlying Price: 0
 * Execution Time: 2024-06-22 20:52:39
 * -----
 * Symbol: BTCUSDT
 * Side: Buy
 * Order ID: 25d14af5-62ad-472c-a8f5-4573fdb3a3f2
 * Order Link ID:
 * Order Price: 67436.7
 * Order Quantity: 0.015
 * Order Type: Market
 * Stop Order Type: Market
 * Execution ID: 6383ff73-9d54-534c-b8bc-160ba08a8edf
 * Execution Price: 64233.6
 * Execution Quantity: 0.015
 * Execution Fee: 0.5299272
 * Execution Type: Trade
 * Execution Value: 963.504
 * Fee Rate: 0.00055
 * Last Liquidity Ind: RemovedLiquidity
 * Is Maker:
 * Leaves Quantity: 0
 * Closed Size: 0
 * Mark Price: 64235.76
 * Index Price 0
 */
````

<br />

<h3 align="left" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListRequestInterface
{
    /**
     * Торговая пара
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * @param string $orderId
     * @return self
     */
    public function setOrderId(string $orderId): self;
    public function getOrderId(): string;

    /** 
     * Дата/время, начиная с которой следует получить записи. Например: 2024-06-20 10:00:00
     * Строка дата/времени от которой следует получить данные.
     * - Если startTime и endTime не передаются, по умолчанию возвращают 7 дней
     * - Если передается только startTime, диапазон возврата между startTime и startTime+7 дней.
     * - Если передается только endTime, диапазон возврата между endTime-7 дней и endTime.
     * - Если оба параметра переданы, то правило будет endTime - startTime <= 7 дней.
     *
     * @param int $startTime
     * @return self
     */
    public function setStartTime(string $startTime): self;
    public function getStartTime(): \DateTime;

    /**
     * Дата/время, до которой следует получить записи. Например: 2024-06-20 10:00:00
     * @param int $endTime
     * @return self
     */
    public function setEndTime(string $endTime): self;
    public function getEndTime(): \DateTime;

    /**
     * Тип исполнения
     * https://bybit-exchange.github.io/docs/derivatives/enum#exectype
     * @param string $execType
     * @return self
     */
    public function setExecType(string $execType): self;
    public function getExecType(): string;

    /**
     * Лимит записей на запрос
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
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces\IGetExecutionListRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Request\GetExecutionListRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setStartTime(int $startTime)</td>
     <td>НЕТ</td>
     <td> Таймштамп, начиная с которого следует получить записи</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setEndTime(int $endTime)</td>
     <td>НЕТ</td>
     <td>Таймштамп, до которого следует получить записи</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setLimit(int $limit)</td>
     <td>НЕТ</td>
     <td>Лимит записей на запрос</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setCursor(string $cursor)</td>
     <td>НЕТ</td>
     <td>Курсор следующей страницы</td>
   </tr>
</table>

<br />

<h3 align="left" width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListResponseInterface
{
    /**
     * Категории деривативов
     * @return string
     */
    public function getCategory(): string;

    /**
     * Cursor. Используется для пагинации
     * @return string
     */
    public function getNextPageCursor(): string;

    /**
     * @return IGetExecutionListResponseItemInterface[]
     */
    public function getExecutionList(): array;
}
````

<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces\IGetExecutionListResponseInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Response\GetExecutionListResponse::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Метод</th>
     <th style="width: 20%; text-align: center">Тип</th>
     <th style="width: 60%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getSymbol()</td>
     <td>string</td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getNextPageCursor()</td>
     <td>string</td>
     <td>Курсор. Используется для пагинации</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getExecutionList()</td>
     <td>string</td>
     <td>Массив записей</td>
   </tr>
</table>

<br />

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListResponseItemInterface
{
    /**
     * Торговая пара
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Направление ордера
     * @return string
     */
    public function getSide(): string;

    /**
     * Системный идентификатор ордера
     * @return string
     */
    public function getOrderId(): string;

    /**
     * Пользовательский идентификатор ордера
     * @return string
     */
    public function getOrderLinkId(): string;

    /**
     * Цена ордера
     * @return float
     */
    public function getOrderPrice(): float;

    /**
     * Объем ордера
     * @return float
     */
    public function getOrderQty(): float;

    /**
     * Тип ордера: Market, Limit
     * @return string
     */
    public function getOrderType(): string;

    /**
     * Тип стоп-ордера
     * @return string
     */
    public function getStopOrderType(): string;

    /**
     * Идентификатор записи исполнения (trade ID)
     * @return string
     */
    public function getExecId(): string;

    /**
     * Цена исполнения
     * @return float
     */
    public function getExecPrice(): float;

    /**
     * Исполненный объем
     * @return float
     */
    public function getExecQty(): float;

    /**
     * Комиссия исполнения
     * Execution fee
     * @return float
     */
    public function getExecFee(): float;

    /**
     * Тип исполнения
     * @return string
     */
    public function getExecType(): string;

    /**
     * Значение позиции исполнения
     * @return float
     */
    public function getExecValue(): float;

    /**
     * Ставка торговой комиссии
     * @return float
     */
    public function getFeeRate(): float;

    /**
     * AddedLiquidity, RemovedLiquidity
     * @return string
     */
    public function getLastLiquidityInd(): string;

    /**
     * Is maker
     * @return bool
     */
    public function isMaker(): bool;

    /**
     * Оставшееся количество которое ожидает исполнения
     * @return float
     */
    public function getLeavesQty(): float;

    /**
     * Закрытый объем
     * @return float
     */
    public function getClosedSize(): float;

    /**
     * Block trade id
     * @return string
     */
    public function getBlockTradeId(): string;

    /**
     * Цена маркировки
     * @return float
     */
    public function getMarkPrice(): float;

    /**
     * Цена индекса
     * @return float
     */
    public function getIndexPrice(): float;

    /**
     * Базовая цена
     * @return float
     */
    public function getUnderlyingPrice(): float;

    /**
     * Время исполнения
     * @return \DateTime
     */
    public function getExecTime(): \DateTime;
}
```
<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces\IGetExecutionListResponseItemInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Response\GetExecutionListResponseItem::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Метод</th>
     <th style="width: 20%; text-align: center">Тип</th>
     <th style="width: 60%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getSymbol()</td>
     <td>string</td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getSide()</td>
     <td>string</td>
     <td>Направление ордера</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getOrderId()</td>
     <td>string</td>
     <td>order ID</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getOrderLinkId()</td>
     <td>string</td>
     <td>Пользовательский идентификатор ордера</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getOrderPrice()</td>
     <td>float</td>
     <td>Цена ордера</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getOrderQty()</td>
     <td>float</td>
     <td>Обьем ордера</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getOrderType()</td>
     <td>string</td>
     <td>Тип ордера: Market, Limit</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getStopOrderType()</td>
     <td>string</td>
     <td>Тип стоп-ордера</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getExecId()</td>
     <td>string</td>
     <td>Идентификатор записи исполнения (trade ID)</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getExecPrice()</td>
     <td>float</td>
     <td>Цена исполнения</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getExecQty()</td>
     <td>float</td>
     <td>Исполненный объем</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getExecFee()</td>
     <td>float</td>
     <td>Комиссия исполнения</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getExecType()</td>
     <td>string</td>
     <td>Тип исполнения</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getExecValue()</td>
     <td>float</td>
     <td>Значение позиции исполнения</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getFeeRate()</td>
     <td>float</td>
     <td>Ставка торговой комиссии</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getLastLiquidityInd()</td>
     <td>string</td>
     <td>AddedLiquidity, RemovedLiquidity</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::isMaker()</td>
     <td>bool</td>
     <td>Is maker</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getLeavesQty()</td>
     <td>float</td>
     <td>Оставшееся количество которое ожидает исполнения</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getClosedSize()</td>
     <td>float</td>
     <td>Закрытый объем</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getBlockTradeId()</td>
     <td>string</td>
     <td>Block trade id</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getMarkPrice()</td>
     <td>float</td>
     <td>Цена маркировки</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getIndexPrice()</td>
     <td>float</td>
     <td>Цена индекса</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getUnderlyingPrice()</td>
     <td>float</td>
     <td>Базовая цена</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getExecTime()</td>
     <td>\DateTime</td>
     <td>Время исполнения</td>
   </tr>
</table>

---