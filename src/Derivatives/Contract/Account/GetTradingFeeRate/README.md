# Contract - Account - Get Trading Fee Rate
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/fee-rate)</b>
<p>Endpoint returns data on the trading commission rate for ALL symbols</p>

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\GetTradingFeeRate::class
```

<br />

<h3 align="left" width="100%"><b>EXAMPLE</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\GetTradingFeeRate;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Request\GetTradingFeeRateRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response\GetTradingFeeRateResponse;

$bybit = (new BybitAPI())
    ->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

$feeRateData = $bybit->privateEndpoint(GetTradingFeeRate::class, (new GetTradingFeeRateRequest()))->execute();

echo "Return code: {$feeRateData->getReturnCode()} \n";
echo "Return message: {$feeRateData->getReturnMessage()} \n";

/** @var GetTradingFeeRateResponseItem $feeRate */
foreach (array_slice($feeRateData->getResult()->getFeeRates(), 0, 3) as $feeRate) {
    echo "---\n";
    echo "Symbol: {$feeRate->getSymbol()} \n";
    echo "Taker Fee Rate: {$feeRate->getTakerFeeRate()} \n";
    echo "Maker Fee Rate: {$feeRate->getMakerFeeRate()} \n";
}

/**
* Return code: 0
* Return message: OK 
* ---
* Symbol: ORCAUSDT 
* Taker Fee Rate: 0.00055 
* Maker Fee Rate: 0.0002 
* ---
* Symbol: BBUSDT 
* Taker Fee Rate: 0.00055 
* Maker Fee Rate: 0.0002 
* ---
* Symbol: INJUSDT 
* Taker Fee Rate: 0.00055 
* Maker Fee Rate: 0.0002
**/
```

<br />

<h3 align="left" width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateRequestInterface;

interface IGetTradingFeeRateRequestInterface
{
    public function setSymbol(string $symbol): self; // Trading pair
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Request\GetTradingFeeRateRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetTradingFeeRateRequestInterface::setSymbol(string $symbol): self</td>
    <td>NO</td>
    <td>Trading pair</td>
  </tr>
</table>


<br />

<h3 align="left" width="100%"><b>RESPONSE STRUCTURE</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces;

interface IGetTradingFeeRateResponseInterface
{
    /**
     * @return IGetTradingFeeRateResponseItemInterface[]
     */
    public function getFeeRates(): array;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response\GetTradingFeeRateResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseInterface::getSymbol()</td>
    <td>IGetTradingFeeRateResponseItemInterface[]</td>
    <td>
      List of fee rates
    </td>
  </tr>
</table>

<br />

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseInterface;

interface IGetTradingFeeRateResponseItemInterface
{
    public function getSymbol(): string; // Trading pair
    public function getTakerFeeRate(): float; // Taker (buyer) commission
    public function getMakerFeeRate(): float; // Maker (seller) commission
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseItemInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response\GetTradingFeeRateResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseItemInterface::getSymbol()</td>
    <td>string</td>
    <td>
      Trading pair
    </td>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseItemInterface::getTakerFeeRate()</td>
    <td>float</td>
    <td>
      Taker commission
    </td>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseItemInterface::getMakerFeeRate()</td>
    <td>float</td>
    <td>
      Maker commission
    </td>
  </tr>
</table>