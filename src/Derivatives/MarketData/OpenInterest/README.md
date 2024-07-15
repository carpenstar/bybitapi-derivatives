# Market Data - Open Interest
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/open-interest)</b>
<p>Endpoint returns data about open interest for the specified symbol. <br />
<b>Open Interest is the total number of perpetual contract positions currently held on the platform.</b></p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\OpenInterest::class
```

<br />

<h3 width="100%"><b>EXAMPLE</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\OpenInterest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response\OpenInterestResponseItem;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

$openInterestResponse = $bybit->publicEndpoint(OpenInterest::class, (new OpenInterestRequest())
    ->setSymbol('BTCUSDT')
    ->setInterval('5min')
    ->setStart('2024-07-11 10:00:00')
    ->setEnd('2024-07-12 11:00:00')
    ->setLimit(10)
)->execute();

echo "Return code: {$openInterestResponse->getReturnCode()}\n";
echo "Return message: {$openInterestResponse->getReturnMessage()}\n";

/** @var OpenInterestResponseItem $interest */
foreach ($openInterestResponse->getResult()->getOpenInterestList() as $interest) {
    echo " --- \n";
    echo "Time: {$interest->getTimestamp()->format('Y-m-d H:i:s')}\n";
    echo "Open Interest: {$interest->getOpenInterest()}\n";
}

/**
 * Return code: 0
 * Return message: OK
 * ---
 * Time: 2024-07-14 14:35:00
 * Open Interest: 208441.186
 * ---
 * Time: 2024-07-14 14:30:00
 * Open Interest: 208439.88
 * ---
 * Time: 2024-07-14 14:25:00
 * Open Interest: 208436.369
 * ---
 * Time: 2024-07-14 14:20:00
 * Open Interest: 208435.437
 * ---
 * Time: 2024-07-14 14:15:00
 * Open Interest: 208435.489
 * ---
 * Time: 2024-07-14 14:10:00
 * Open Interest: 208435.479
 * ---
 * Time: 2024-07-14 14:05:00
 * Open Interest: 208435.465
 * ---
 * Time: 2024-07-14 14:00:00
 * Open Interest: 208434.558
 * ---
 * Time: 2024-07-14 13:55:00
 * Open Interest: 208441.512
 * ---
 * Time: 2024-07-14 13:50:00
 * Open Interest: 208441.488
 */
```  

<br />

<h3 width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces;

interface IOpenInterestRequestInterface
{
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

    /**
     * Next page cursor
     * @param string $cursor
     * @return self
     */
    public function setCursor(string $cursor): self;
    public function getCursor(): string;
}
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces\IOpenInterestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IOpenInterestInterface::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trding pair</td>
  </tr>
  <tr>
    <td>IOpenInterestInterface::setInterval(int $interval): self</td>
    <td><b>YES</b></td>
    <td>
      Tick size. <br />
      Possible values: 1h 3h 5h 15h 30h 60h 120h 240h 360h 720h D M W
    </td>
  </tr>
  <tr>
    <td>IOpenInterestInterface::setStartTime(int $startTime): self</td>
    <td><b>Yes</b></td>
    <td>Timestamp FROM which the data slice is taken </td>
  </tr>
  <tr>
    <td>IOpenInterestInterface::setEndTime(string $end): self</td>
    <td><b>YES</b></td>
    <td>Timestamp BEFORE which the data slice is taken</td>
  </tr>
  <tr>
    <td>IOpenInterestInterface::setLimit(int $limit): self</td>
    <td>NO</td>
    <td>Limit the records returned per query. Default 200</td>
  </tr>
</table>

<br />

<h3 width="100%"><b>RESPONSE STRUCTURE</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces;

interface IOpenInterestResponseInterface
{
    /** @return IOpenInterestResponseItemInterface[] */
    public function getOpenInterestList(): array;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces\IOpenInterestResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response\OpenInterestResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IOpenInterestResponseInterface::getTimestamp()</td>
    <td>IOpenInterestResponseItemInterface[]</td>
    <td>List of open interests grouped by hour </td>
  </tr>
</table>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces;

interface IOpenInterestResponseItemInterface
{
    /**
     * Open interest
     * @return float
     */
    public function getOpenInterest(): float;

    /**
     * The timestamp
     * @return \DateTime
     */
    public function getTimestamp(): \DateTime;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces\IOpenInterestResponseItemInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response\OpenInterestResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IOpenInterestResponseItemInterface::getTimestamp()</td>
    <td>DateTime</td>
    <td>Request execution time</td>
  </tr>
  <tr>
    <td>IOpenInterestResponseItemInterface::getOpenInterest()</td>
    <td>float</td>
    <td>Volume of interest</td>
  </tr>
</table>