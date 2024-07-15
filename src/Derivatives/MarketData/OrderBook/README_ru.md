# Market Data - Order Book
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/orderbook)</b>
<p>Эндпоинт возвращает список ордеров на покупку и продажу бессрочных контрактов, организованный и отсортированный по уровню цен.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\OrderBook::class
```

<br />

<h3 width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\OrderBook;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request\OrderBookRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response\OrderBookPriceItemResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response\OrderBookResponse;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

$orderBookResponse = $bybit->publicEndpoint(OrderBook::class, (new OrderBookRequest())
    ->setSymbol('BTCUSDT')
    ->setLimit(3)
)->execute();

echo "Return code: {$orderBookResponse->getReturnCode()}\n";
echo "Return message: {$orderBookResponse->getReturnMessage()}\n";

/** @var OrderBookResponse $orderBook */
$orderBook = $orderBookResponse->getResult();

echo "Timestamp: {$orderBook->getTimestamp()->format('Y-m-d H:i:s')}\n";
echo "Symbol: {$orderBook->getSymbol()}\n";

echo "ASK: \n";
/** @var OrderBookPriceItemResponse $ask */
foreach ($orderBook->getAsk() as $ask) {
    echo " --- \n";
    echo "  Price: {$ask->getPrice()}\n";
    echo "  Volume: {$ask->getQuantity()}\n";
}

echo "BID: \n";
/** @var OrderBookPriceItemResponse $bid */
foreach ($orderBook->getBid() as $bid) {
    echo " --- \n";
    echo "Price: {$bid->getPrice()}\n";
    echo "Volume: {$bid->getQuantity()}\n";
}

/**
 * Return code: 0
 * Return message: OK
 * Timestamp: 2024-07-14 15:37:30
 * Symbol: BTCUSDT
 * 
 * ASK:
 * ---
 *  Price: 59953.5
 *  Volume: 47.074
 *  ---
 *  Price: 59953.7
 *  Volume: 83.521
 *  ---
 *  Price: 59953.9
 *  Volume: 77.681
 * 
 *  BID:
 *  ---
 *  Price: 59953.3
 *  Volume: 123.893
 *  ---
 *  Price: 59953.1
 *  Volume: 47.325
 *  ---
 *  Price: 59952.9
 *  Volume: 90.926
 */
```  

<br />

<h3 width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces;

interface IOrderBookRequestInterface
{
    /**
     * Торговая пара
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Лимит на количество ордеров в одну сторону: лимит = 50 (25 - бид + 25 - аск) 
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
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request\OrderBookRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IOrderBookRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IOrderBookRequestInterface::setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Лимит на количество ордеров в одну сторону: лимит = 50 (25 - бид + 25 - аск)</td>
  </tr>
</table>

<br />

<h3 width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces;

use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;

interface IOrderBookResponseInterface
{
    /**
     * Время исполнения запроса
     * @return \DateTime
     */
    public function getTimestamp(): \DateTime;

    /**
     * Торговая пара
     * @return string
     */
    public function getSymbol(): string;

    /**
     * ID обновления данных
     * @return int
     */
    public function getUpdateId(): int;

    /**
     * @return IOrderBookResponsePriceItemInterface[]
     */
    public function getBid(): EntityCollection;

    /**
     * @return IOrderBookResponsePriceItemInterface[]
     */
    public function getAsk(): EntityCollection;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookResponseInterface::class</b>
        </td>
      </tr>
    <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response\OrderBookResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IOrderBookResponseInterface::getSymbol()</td>
    <td>float</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IOrderBookResponseInterface::getTimestamp()</td>
    <td>DateTime</td>
    <td>Время исполнения запроса</td>
  </tr>
  <tr>
    <td>IOrderBookResponseInterface::getUpdateId()</td>
    <td>float</td>
    <td>ID обновления данных</td>
  </tr>
  <tr>
    <td>IOrderBookResponseInterface::getBid()</td>
    <td>IOrderBookResponsePriceItemInterface[]</td>
    <td>Список ордеров на продажу</td>
  </tr>
  <tr>
    <td>IOrderBookResponseInterface::getAsk()</td>
    <td>IOrderBookResponsePriceItemInterface[]</td>
    <td>Список ордеров на покупку</td>
  </tr>
</table>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces;

interface IOrderBookResponsePriceItemInterface
{
    /**
     * Order price
     * @return float
     */
    public function getPrice(): float;

    /**
     * Order book volume for price
     * @return float
     */
    public function getQuantity(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookResponsePriceItemInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\OrderBookPriceItemResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IOrderBookResponsePriceItemInterface::getPrice()</td>
    <td>float</td>
    <td>Цена</td>
  </tr>
  <tr>
    <td>IOrderBookResponsePriceItemInterface::getQuantity()</td>
    <td>float</td>
    <td>Обьем</td>
  </tr>
</table>

---