# Market Data - Public Trading History
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/trade)</b>
<p>Эндпоинт возвращает данные об исполнении торговых ордеров</p>   

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\PublicTradingHistory::class
```

<br />

<h3 width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\PublicTradingHistory;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response\PublicTradingHistoryResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response\PublicTradingHistoryResponseItem;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

$endpointResponse = $bybit->publicEndpoint(PublicTradingHistory::class, (new PublicTradingHistoryRequest())
    ->setSymbol('BTCUSDT')
    ->setLimit(3)
)->execute();

echo "Return code: {$endpointResponse->getReturnCode()}\n";
echo "Return message: {$endpointResponse->getReturnMessage()}\n";

/** @var PublicTradingHistoryResponse $tradeHistoryList */
$tradeHistoryList = $endpointResponse->getResult();

echo "Trade history data: \n";
/** @var PublicTradingHistoryResponseItem $historyItem */
foreach ($tradeHistoryList->getTradingList() as $historyItem) {
    echo " --- \n";
    echo "Time: {$historyItem->getTime()->format('Y-m-d H:i:s')}\n";
    echo "Exec ID: {$historyItem->getExecId()}\n";
    echo "Symbol: {$historyItem->getSymbol()}\n";
    echo "Price: {$historyItem->getPrice()}\n";
    echo "Size: {$historyItem->getSize()}\n";
    echo "Side: {$historyItem->getSide()}\n";
    echo "Is Block Trade: {$historyItem->isBlockTrade()}\n";
}

/**
 * Return code: 0
 * Return message: OK
 * Trade history data:
 * ---
 * Time: 2024-07-14 16:14:51
 * Exec ID: e29f5b77-7e73-5cc0-9b62-a10a674113f2
 * Symbol: BTCUSDT
 * Price: 60064.6
 * Size: 0.001
 * Side: Buy
 * Is Block Trade:
 * ---
 * Time: 2024-07-14 16:14:45
 * Exec ID: 81e4ade1-9e38-5a57-94d4-98df0cff56df
 * Symbol: BTCUSDT
 * Price: 60064.5
 * Size: 0.001
 * Side: Sell
 * Is Block Trade:
 * ---
 * Time: 2024-07-14 16:14:39
 * Exec ID: 1e842038-1499-56cb-ab23-142f2fb0c95e
 * Symbol: BTCUSDT
 * Price: 60064.6
 * Size: 0.001
 * Side: Buy
 * Is Block Trade:
 */
```   

<br />

<h3 width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces;

interface IPublicTradingHistoryRequestInterface
{
    /**
     * Торговая пара
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Ограничение возвращаемых строк на один запрос. По умолчанию: 500
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;
}
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IPublicTradingHistoryRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryRequestInterface::setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Ограничение возвращаемых строк на один запрос</td>
  </tr>
</table>

<br />

<h3 width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces;

interface IPublicTradingHistoryResponseInterface
{
    /** @return IPublicTradingHistoryResponseItemInterface[] */
    public function getTradingList(): array;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryResponse::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response\PublicTradingHistoryResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getTradingList()</td>
    <td>IPublicTradingHistoryResponseItemInterface[]</td>
    <td> Список исполненных публичных трейдов </td>
  </tr>
</table>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces;

interface IPublicTradingHistoryResponseItemInterface
{
    /**
     * ID исполнения
     * @return string
     */
    public function getExecId(): string;

    /**
     * Торговая пара
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Цена исполнения
     * @return float
     */
    public function getPrice(): float;

    /**
     * Обьем исполнения
     * @return float
     */
    public function getSize(): float;

    /**
     * Направление ордера (buy, sell)
     * @return string
     */
    public function getSide(): string;

    /**
     * Время исполнения
     * @return \DateTime
     */
    public function getTime(): \DateTime;

    /**
     * Является-ли сделка внебиржевой?
     * @return bool
     */
    public function isBlockTrade(): bool;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryResponseItemInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response\PublicTradingHistoryResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponseItemInterface::getExecId()</td>
    <td>string</td>
    <td>
      ID исполнения
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponseItemInterface::getSymbol()</td>
    <td>string</td>
    <td>
      Торговая пара
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponseItemInterface::getPrice()</td>
    <td>float</td>
    <td>
      Цена исполнения
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponseItemInterface::getSize()</td>
    <td>float</td>
    <td>
      Обьем исполнения
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponseItemInterface::getSide()</td>
    <td>string</td>
    <td>
      Направление ордера (buy, sell)
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponseItemInterface::getTime()</td>
    <td>DateTime</td>
    <td>
      Время исполнения
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponseItemInterface::isBlockTrade()</td>
    <td>bool</td>
    <td>
      Является-ли сделка внебиржевой?
    </td>
  </tr>
</table>
