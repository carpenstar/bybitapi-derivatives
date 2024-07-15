# Market Data - Index Price Kline
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/index-kline)</b>
<p>Request for the history of the <b>INDEX</b> price calculated based on the prices of the largest exchanges.</p>
<p>Each element represents a group of prices depending on the requested interval.</p>
<p>This data can be used to construct candlestick and other charts.</p>

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\IndexPriceKline::class 
```

<br />

<h3 align="left" width="100%"><b>EXAMPLE</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Core\Enums\EnumIntervals;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\IndexPriceKline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Request\IndexPriceKlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Response\IndexPriceKlineResponseItem;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

$indexPriceKlineResponse = $bybit->publicEndpoint(IndexPriceKline::class, (new IndexPriceKlineRequest())
    ->setSymbol('BTCUSDT')
    ->setInterval(EnumIntervals::HOUR_1)
    ->setStart('2024-07-11 10:00:00')
    ->setEnd('2024-07-12 11:00:00')
    ->setLimit(4)
)->execute();

echo "Return code: {$indexPriceKlineResponse->getReturnCode()}\n";
echo "Return message: {$indexPriceKlineResponse->getReturnMessage()}\n";

/** @var IndexPriceKlineResponseItem $indexItem */
foreach ($indexPriceKlineResponse->getResult()->getKlineList() as $indexItem) {
    echo " --- \n";
    echo "Start Time: {$indexItem->getStartTime()->format('Y-m-d H:i:s')}\n";
    echo "Open Price: {$indexItem->getOpen()}\n";
    echo "High Price: {$indexItem->getHigh()}\n";
    echo "Low Price: {$indexItem->getLow()}\n";
    echo "Close Price: {$indexItem->getClose()}\n";
}

/**
* Return code: 0
* Return message: OK
* ---
* Start Time: 2024-07-11 13:00:00
* Open Price: 58814.49
* High Price: 58971.56
* Low Price: 58254.48
* Close Price: 58562.92
* ---
* Start Time: 2024-07-11 12:00:00
* Open Price: 58772.77
* High Price: 59508.87
* Low Price: 58478.2
* Close Price: 58814.49
* ---
* Start Time: 2024-07-11 11:00:00
* Open Price: 58462.45
* High Price: 58901.22
* Low Price: 58390.42
* Close Price: 58772.77
* ---
* Start Time: 2024-07-11 10:00:00
* Open Price: 58288.3
* High Price: 58502.26
* Low Price: 58174.91
* Close Price: 58462.45
*/
``` 

<br />

<h3 align="left" width="100%"><b>REQUEST PARAMETERS:</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces;

interface IIndexPriceKlineRequestInterface
{
    /**
     * Product category (only getter) 
     * @return string
     */
    public function getCategory(): string;

    /**
     * Trading Pair
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
     * The start datetime
     * @param string $start
     * @return self
     */
    public function setStart(string $start): self;
    public function getStart(): int;

    /**
     * The end datetime
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
        <sup>INTERFACE:</sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup>DTO:</sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Request\IndexPriceKlineRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequest::setInterval(int $interval): self</td>
    <td><b>YES</b></td>
    <td>Teak size. Possible values: 1 3 5 15 30 60 120 240 360 720 D M W</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequestInterface::setStart(string $start): self</td>
    <td><b>YES</b></td>
    <td>Datetime string FROM which the data slice is taken</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequestInterface::setEnd(string $start): self</td>
    <td><b>YES</b></td>
    <td>Datetime string BEFORE which the data slice is taken</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequestInterface::setLimit(int $limit): self</td>
    <td>NO</td>
    <td>Limit the records returned per query. Default: 200</td>
  </tr>
</table>
<br />


<h3 align="left" width="100%"><b>RESPONSE STRUCTURE</b></h3>

---
```php
Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineResponseInterface::class

interface IIndexPriceKlineResponseInterface
{
    /** @return IIndexPriceKlineResponseItemInterface[] */
    public function getKlineList(): array;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup>INTERFACE:</sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineResponseItemInterface::class </b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup>DTO:</sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Response\IndexPriceKlineResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponseInterface::getKlineList()</td>
    <td>IIndexPriceKlineResponseItemInterface[]</td>
    <td>List of ticks</td>
  </tr>
</table>

---

```php
Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineResponseItemInterface::class

interface IIndexPriceKlineResponseItemInterface
{
    public function getStartTime(): \DateTime;
    public function getOpen(): float;
    public function getHigh(): float;
    public function getLow(): float;
    public function getClose(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup>INTERFACE:</sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineResponseItemInterface::class </b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup>DTO:</sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Response\IndexPriceKlineResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponseItemInterface::getStartTime()</td>
    <td>DateTime</td>
    <td>Tick start time</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponseItemInterface::getOpen()</td>
    <td>float</td>
    <td>Tick opening price</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponseItemInterface::getHigh()</td>
    <td>float</td>
    <td>Maximum tick price</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponseItemInterface::getLow()</td>
    <td>float</td>
    <td>Minimum tick price</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponseItemInterface::getClose()</td>
    <td>float</td>
    <td>Tick closing price</td>
  </tr>
</table>
