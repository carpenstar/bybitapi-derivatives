# Contract - Position - Get Closed PnL
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/closepnl)</b>

<p>Запрос информации о закрытых позициях с данными о прибылях и убытках пользователя.</p>

> Результат сортируется по createdAt в порядке убывания.

<br />

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\GetClosedPnL;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Request\GetClosedPnLRequest;


$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

$pnlEndpointResponse = $bybit->privateEndpoint(GetClosedPnL::class, (new GetClosedPnLRequest())
    ->setSymbol('BTCUSDT')
    ->setLimit(2)
)->execute();

echo "Return code: {$pnlEndpointResponse->getReturnCode()} \n";
echo "Return message: {$pnlEndpointResponse->getReturnMessage()} \n";

/** @var IGetClosedPnLResponseInterface $pnlInfoResponse */
$pnlInfoResponse = $pnlEndpointResponse->getResult();
echo "Next page cursor: {$pnlInfoResponse->getNextPageCursor()}\n";
foreach ($pnlInfoResponse->getClosedPnlList() as $pnl) {
    echo "----\n";
    echo "Symbol: {$pnl->getSymbol()}\n";
    echo "Order ID: {$pnl->getOrderId()}\n";
    echo "Side: {$pnl->getSide()}\n";
    echo "Quantity: {$pnl->getQty()}\n";
    echo "Leverage: {$pnl->getLeverage()}\n";
    echo "Order Price: {$pnl->getOrderPrice()}\n";
    echo "Order Type: {$pnl->getOrderType()}\n";
    echo "Executed Type: {$pnl->getExecType()}\n";
    echo "Closed Size: {$pnl->getClosedSize()}\n";
    echo "Cumulative Entry Value: {$pnl->getCumEntryValue()}\n";
    echo "Average Entry Price: {$pnl->getAvgEntryPrice()}\n";
    echo "Cumulative Exit Value {$pnl->getCumExitValue()}\n";
    echo "Average Exit Price: {$pnl->getAvgExitPrice()}\n";
    echo "Closed PnL: {$pnl->getClosedPnl()}\n";
    echo "Filled Count: {$pnl->getFillCount()}\n";
    echo "Created At: {$pnl->getCreatedAt()->format('Y-m-d H:i:s')}\n";
    echo "Created Time: {$pnl->getCreatedTime()->format('Y-m-d H:i:s')}\n";
    echo "Updated Time: {$pnl->getUpdatedTime()->format('Y-m-d H:i:s')}\n";
}

/**
 * Return code: 0
 * Return message: OK
 * Next page cursor: page_token%3D1719089535779609000%26
 * ----
 * Symbol: BTCUSDT
 * Order ID: 6e60910f-2c60-48c6-916e-c9c6946b3bc9
 * Side: Sell
 * Quantity: 0.015
 * Leverage: 10
 * Order Price: 61022
 * Order Type: Market
 * Executed Type: Trade
 * Closed Size: 0.015
 * Cumulative Entry Value: 963.504
 * Average Entry Price: 64233.6
 * Cumulative Exit Value 963.3825
 * Average Exit Price: 64225.5
 * Closed PnL: -1.18128758
 * Filled Count: 1
 * Created At: 2024-06-22 20:52:39
 * Created Time: 2024-06-22 20:52:39
 * Updated Time: 2024-06-22 20:52:39
 * ----
 * Symbol: BTCUSDT
 * Order ID: a9d52c72-0aaf-4fed-88b8-c4c714c05af5
 * Side: Sell
 * Quantity: 0.021
 * Leverage: 10
 * Order Price: 61022
 * Order Type: Market
 * Executed Type: Trade
 * Closed Size: 0.021
 * Cumulative Entry Value: 1363.4068
 * Average Entry Price: 64924.13
 * Cumulative Exit Value 1348.7355
 * Average Exit Price: 64225.5
 * Closed PnL: -16.87169641
 * Filled Count: 1
 * Created At: 2024-06-22 20:52:15
 * Created Time: 2024-06-22 20:52:15
 * Updated Time: 2024-06-22 20:52:15
 */     
````

<br />

<h3 align="left" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLRequestInterface
{
    /**
     * Торговая пара
     *
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Строка дата/времени от которой следует получить данные.
     * - Если startTime и endTime не передаются, по умолчанию возвращают 7 дней
     * - Если передается только startTime, диапазон возврата между startTime и startTime+7 дней.
     * - Если передается только endTime, диапазон возврата между endTime-7 дней и endTime.
     * - Если оба параметра переданы, то правило будет endTime - startTime <= 7 дней.
     *
     * @param string $startTime
     * @return self
     */
    public function setStartTime(string $startTime): self;
    public function getStartTime(): \DateTime;

    /**
     * Строка дата/времени до которой следует получить записи
     *
     * @param string $endTime
     * @return self
     */
    public function setEndTime(string $endTime): self;
    public function getEndTime(): \DateTime;

    /**
     * Limit for data size per page. [1, 200]. Default: 50
     *
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;

    /**
     * Cursor. Use the nextPageCursor token from the response to retrieve the next page of the result set
     *
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
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Request\GetClosedPnLRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setStartTime(string $startTime)</td>
     <td>НЕТ</td>
     <td>Нижний предел даты, начиная с которой следует вести записи. Например - 2024-06-20 09:00:00</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setEndTime(string $endTimr)</td>
     <td>НЕТ</td>
     <td>Верхний предел даты, начиная с которой следует вести учет. Например - 2024-06-20 10:00:00</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setLimit(int $limit)</td>
     <td>НЕТ</td>
     <td>Лимит записей на запрос</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setCursor(string $cursor)</td>
     <td>НЕТ</td>
     <td>Курсор следующей страницы</td>
   </tr>
</table>

<br />

<h3 align="left" width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---


```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLResponseInterface
{
    /**
     * Cursor. Используется для пагинации
     * @return string
     */
    public function getNextPageCursor(): string;

    /**
     * @return IGetClosedPnLResponseItemInterface[]
     */
    public function getClosedPnlList(): array;
}
````

<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Response\GetClosedPnLResponse::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Method</th>
     <th style="width: 20%; text-align: center">Type</th>
     <th style="width: 60%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getNextPageCursor()</td>
     <td>string</td>
     <td>Cursor. Используется для пагинации</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getClosedPnlList()</td>
     <td>IGetClosedPnLResponseItemInterface[]</td>
     <td>Массив элементов закрытых PnL</td>
   </tr>
</table>

<br />

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLResponseItemInterface
{
    /**
     * Торговая пара
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Order Id
     * @return string
     */
    public function getOrderId(): string;

    /**
     * Направление ордера
     * @return string
     */
    public function getSide(): string;

    /**
     * Объем ордера
     * @return float
     */
    public function getQty(): float;

    /**
     * Кредитное плечо
     * @return float
     */
    public function getLeverage(): float;

    /**
     * Цена ордера
     * @return float
     */
    public function getOrderPrice(): float;

    /**
     * Тип оредра: Market, Limit
     * @return string
     */
    public function getOrderType(): string;

    /**
     * Тип исполнения
     * @return string
     */
    public function getExecType(): string;

    /**
     * Закрытый размер
     * @return float
     */
    public function getClosedSize(): float;

    /**
     * Накопленное значение позиции входа
     * @return float
     */
    public function getCumEntryValue(): float;

    /**
     * Средняя цена входа
     * @return float
     */
    public function getAvgEntryPrice(): float;

    /**
     * Накопленное значение позиции выхода
     * @return float
     */
    public function getCumExitValue(): float;

    /**
     * Средняя цена выхода
     * @return float
     */
    public function getAvgExitPrice(): float;

    /**
     * Закрытый PnL
     * @return float
     */
    public function getClosedPnl(): float;

    /**
     * Количество исполнений в одном ордере
     * @return int
     */
    public function getFillCount(): int;

    /**
     * Время создания записи, эквивалент createdTime
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime;

    /**
     * Время создания записи, эквивалент createdAt
     * @return \DateTime
     */
    public function getCreatedTime(): \DateTime;

    /**
     * Время последнего обновления записи
     * @return \DateTime
     */
    public function getUpdatedTime(): \DateTime;
}
```
<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Response\GetClosedPnLResponse::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Метод</th>
     <th style="width: 20%; text-align: center">Тип</th>
     <th style="width: 60%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getSymbol()</td>
     <td>string</td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getOrderId()</td>
     <td>string</td>
     <td>order ID</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getSide()</td>
     <td>string</td>
     <td>Направление ордера</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getQty()</td>
     <td>float</td>
     <td>Обьем ордера</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getLeverage()</td>
     <td>float</td>
     <td>Кредитное плечо</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getOrderPrice()</td>
     <td>float</td>
     <td>Цена ордера</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getExecType()</td>
     <td>string</td>
     <td>Тип исполнения</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getClosedSize()</td>
     <td>float</td>
     <td>Закрытый размер</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getCumEntryValue()</td>
     <td>float</td>
     <td> Накопленное значение позиции входа </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getAvgEntryPrice()</td>
     <td>float</td>
     <td> Средняя цена входа </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getCumExitValue()</td>
     <td>float</td>
     <td> Накопленное значение позиции выхода </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getAvgExitPrice()</td>
     <td>float</td>
     <td> Средняя цена выхода </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getClosedPnl()</td>
     <td>float</td>
     <td> Закрытый PnL </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getFillCount()</td>
     <td>float</td>
     <td> Количество исполнений в одном ордере </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getCreatedAt()</td>
     <td>DateTime</td>
     <td>Время создания ордера</td>
   </tr>
</table>

---