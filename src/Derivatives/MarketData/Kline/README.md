# Market Data - Kline
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/kline)</b>
<p>Endpoint returns historical data for plotting. Candles are returned in groups depending on the requested interval.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Kline::class
```

<br />

<h3 width="100%"><b>EXAMPLE</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Core\Enums\EnumIntervals;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Kline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Request\KlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Response\KlineResponseItem;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

$klineResponse = $bybit->publicEndpoint(Kline::class, (new KlineRequest())
    ->setSymbol('BTCUSDT')
    ->setInterval(EnumIntervals::HOUR_1)
    ->setStart('2024-07-11 10:00:00')
    ->setEnd('2024-07-12 11:00:00')
    ->setLimit(4)
)->execute();

echo "Return code: {$klineResponse->getReturnCode()}\n";
echo "Return message: {$klineResponse->getReturnMessage()}\n";

/** @var KlineResponseItem $klineItem */
foreach ($klineResponse->getResult()->getKlineList() as $klineItem) {
    echo " --- \n";
    echo "Start Time: {$klineItem->getStartTime()->format('Y-m-d H:i:s')}\n";
    echo "Open Price: {$klineItem->getOpen()}\n";
    echo "High Price: {$klineItem->getHigh()}\n";
    echo "Low Price: {$klineItem->getLow()}\n";
    echo "Close Price: {$klineItem->getClose()}\n";
}

/**
 * Return code: 0
 * Return message: OK
 * ---
 * Start Time: 2024-07-11 13:00:00
 * Open Price: 58797.4
 * High Price: 58952.1
 * Low Price: 58366.4
 * Close Price: 58532.4
 * ---
 * Start Time: 2024-07-11 12:00:00
 * Open Price: 58760.6
 * High Price: 59375.7
 * Low Price: 56666
 * Close Price: 58797.4
 * ---
 * Start Time: 2024-07-11 11:00:00
 * Open Price: 58445.9
 * High Price: 58877.1
 * Low Price: 58369.9
 * Close Price: 58760.6
 * ---
 * Start Time: 2024-07-11 10:00:00
 * Open Price: 58271.4
 * High Price: 58475.9
 * Low Price: 58154.1
 * Close Price: 58445.9
*/
```  

<br />

<h3 width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces;

interface IKlineRequestInterface
{
    /**
     * Product type. linear,inverse. Default: linear, but in the response category shows ""
     * @return string
     */
    public function getCategory(): string;

    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Kline interval. 1 3 5 15 30 60 120 240 360 720 D M W
     * @param string $interval
     * @return self
     */
    public function setInterval(string $interval): self;
    public function getInterval(): string;

    /**
     * The start date string
     * @param string $start
     * @return self
     */
    public function setStart(string $start): self;
    public function getStart(): int;

    /**
     * The end date string
     * @param string $end
     * @return self
     */
    public function setEnd(string $end): self;
    public function getEnd(): int;

    /**
     * Limit for data size per page. [1, 1000]. Default: 200
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
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Request\KlineRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setInterval(int $interval): self</td>
    <td><b>YES</b></td>
    <td>Teak size. Possible values: 1 3 5 15 30 60 120 240 360 720 D M W</td>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setStartTime(int $timestamp): self</td>
    <td><b>YES</b></td>
    <td>Timestamp FROM which the data slice is taken </td>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setEndTime(int $timestamp): self</td>
    <td><b>YES</b></td>
    <td>Timestamp BEFORE which the data slice is taken</td>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setLimit(int $limit): self</td>
    <td>NO</td>
    <td>Limit the records returned per query. Default 200</td>
  </tr>
</table>

<br />

<h3 width="100%"><b>RESPONSE STRUCTURE</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces;

interface IKlineResponseInterface 
{
    public function getKlineList(): array;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Response\KlineResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>

  <tr>
    <td>IKlineResponseInterface::getKlineList()</td>
    <td>IKlineResponseItemInterface[]</td>
    <td>List of klines</td>
  </tr>
</table>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces;

interface IKlineResponseItemInterface
{
    /**
     * Time of candle
     * @return \DateTime
     */
    public function getStartTime(): \DateTime;

    /**
     * Open Price
     * @return float
     */
    public function getOpen(): float;

    /**
     * High Price
     * @return float
     */
    public function getHigh(): float;

    /**
     * Low Price
     * @return float
     */
    public function getLow(): float;

    /**
     * Close Price
     * @return float
     */
    public function getClose(): float;

    /**
     * Trade volume of candle
     * @return float
     */
    public function getVolume(): float;

    /**
     * Turnover of candle
     * @return float
     */
    public function getTurnover(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineResponseItemInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Response\KlineResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>

  <tr>
    <td>IKlineResponseItemInterface::getStartTime()</td>
    <td>DateTime</td>
    <td>Tick start time</td>
  </tr>
  <tr>
    <td>IKlineResponseItemInterface::getOpen()</td>
    <td>float</td>
    <td>Opening price</td>
  </tr>
  <tr>
    <td>IKlineResponseItemInterface::getHigh()</td>
    <td>float</td>
    <td>Highest price</td>
  </tr>
  <tr>
    <td>IKlineResponseItemInterface::getLow()</td>
    <td>float</td>
    <td>Lowest price</td>
  </tr>
  <tr>
    <td>IKlineResponseItemInterface::getClose()</td>
    <td>float</td>
    <td>Closing price</td>
  </tr>
  <tr>
    <td>IKlineResponseItemInterface::getVolume()</td>
    <td>float</td>
    <td>Volume</td>
  </tr>
  <tr>
    <td>IKlineResponseItemInterface::getTurnover()</td>
    <td>float</td>
    <td>Turnover</td>
  </tr>
</table>
