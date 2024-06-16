# Market Data - Risk Limit
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/risk-limit)</b>
<p>Endpoint returns data on the risk limit for the specified symbol. </p>
<p>Risk limit is a risk management measure to limit traders' exposure to risk.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\RiskLimit::class
```

<br />

<h3 width="100%"><b>EXAMPLE</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\RiskLimit;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response\RiskLimitsResponse;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

$endpointResponse = $bybit->publicEndpoint(RiskLimit::class, (new RiskLimitsRequest())
    ->setSymbol('BTCUSDT')
)->execute();

echo "Return code: {$endpointResponse->getReturnCode()}\n";
echo "Return message: {$endpointResponse->getReturnMessage()}\n";

/** @var RiskLimitsResponse $riskLimit */
$riskLimit = $endpointResponse->getResult();
foreach ($riskLimit->getRiskLimitList() as $risk) {
    echo "--- \n";
    echo "ID: {$risk->getId()}\n";
    echo "Symbol: {$risk->getSymbol()}\n";
    echo "Limit: {$risk->getLimit()}\n";
    echo "Maintain Margin: {$risk->getMaintainMargin()}\n";
    echo "Initial Margin: {$risk->getInitialMargin()}\n";
    echo "Is Lower Risk: {$risk->getIsLowerRisk()}\n";
    echo "Maximal Leverage: {$risk->getMaxLeverage()}\n";
}

/**
 * Return code: 0
 * Return message: OK
 * --- 
 * ID: 1
 * Symbol: BTCUSDT
 * Limit: 2000000
 * Maintain Margin: 0.005
 * Initial Margin: 0.01
 * Is Lower Risk: 0
 * Maximal Leverage: 100
 * --- 
 * ID: 2
 * Symbol: BTCUSDT
 * Limit: 2600000
 * Maintain Margin: 0.0056
 * Initial Margin: 0.0111
 * Is Lower Risk: 0
 * Maximal Leverage: 90
 * --- 
 * ID: 3
 * Symbol: BTCUSDT
 * Limit: 3200000
 * Maintain Margin: 0.0063
 * Initial Margin: 0.0125
 * Is Lower Risk: 0
 * Maximal Leverage: 80
*/
```  

<br />

<h3 width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces;

interface IRiskLimitsRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

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
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IRiskLimitsRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IRiskLimitsRequestInterface::setCursor(string $cursor): self</td>
    <td>NO</td>
    <td>Cursor. Use the nextPageCursor token from the response to retrieve the next page of the result set</td>
  </tr>
</table>

<br />

<h3 width="100%"><b>RESPONSE STRUCTURE</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces;

interface IRiskLimitsResponseInterface
{
    /**
     * Cursor. Use the nextPageCursor token from the response to retrieve the next page of the result set
     * @param string $cursor
     * @return mixed
     */
    public function getCursor(string $cursor);

    /** @return IRiskLimitsResponseItemInterface[] */
    public function getRiskLimitList(): array;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsResponseInterface:class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response\RiskLimitsResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IRiskLimitsResponseInterface::getCursor()</td>
    <td>string</td>
    <td>Cursor. Use the nextPageCursor token from the response to retrieve the next page of the result set</td>
  </tr>
  <tr>
    <td>IRiskLimitsResponseInterface::getRiskLimitList()</td>
    <td>IRiskLimitsResponseItemInterface[]</td>
    <td>List of risk limits</td>
  </tr>
</table>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces;

interface IRiskLimitsResponseItemInterface
{
    /**
     * Risk id
     * @return string
     */
    public function getId(): string;

    /**
     * Symbol name
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Position limit
     * @return int
     */
    public function getLimit(): int;

    /**
     * Maintain margin rate
     * @return float
     */
    public function getMaintainMargin(): float;

    /**
     * Initial margin rate
     * @return float
     */
    public function getInitialMargin(): float;

    /**
     * 1: true, 0: false
     * @return int
     */
    public function getIsLowerRisk(): int;

    /**
     * Allowed max leverage
     * @return float
     */
    public function getMaxLeverage(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsResponseItemInterface:class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response\RiskLimitsResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IRiskLimitsResponseItemInterface::getId()</td>
    <td>string</td>
    <td>
      Risk ID
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponseItemInterface::getSymbol()</td>
    <td>string</td>
    <td>
      Trading pair
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponseItemInterface::getLimit()</td>
    <td>int</td>
    <td>
      Position limit
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponseItemInterface::getMaintainMargin()</td>
    <td>float</td>
    <td>
      Margin maintenance
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponseItemInterface::getInitialMargin()</td>
    <td>float</td>
    <td>
      Initial margin
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponseItemInterface::getIsLowerRisk()</td>
    <td>int</td>
    <td>
      Is the trading instrument low risk?
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponseItemInterface::getMaxLeverage()</td>
    <td>float</td>
    <td>
      Maximum leverage
    </td>
  </tr>
</table>
