# Contract - Position - Set Leverage
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/leverage)</b>
<p>Set position leverage</p>

<br />

<h3 align="left" width="100%"><b>EXAMPLE</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Request\SetLeverageRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\SetLeverage;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

$isSetAutoAddMargin = $bybit->privateEndpoint(SetLeverage::class, (new SetLeverageRequest())
    ->setSymbol('BTCUSDT')
    ->setSellLeverage(5)
    ->setBuyLeverage(5)
)->execute();

if ($isSetAutoAddMargin->getReturnCode() == 0) {
    echo "Success set leverage: {$isSetAutoAddMargin->getReturnMessage()}\n";
} else {
    echo "Not success set leverage: {$isSetAutoAddMargin->getReturnMessage()}\n";
}

/**
 * Success set leverage: OK
 * ---- OR
 * Not success set leverage: leverage not modified
*/
````

<br />

<h3 align="left" width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces;

interface ISetLeverageRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * (0, max leverage of corresponding risk limit]. For one-way mode, make sure buyLeverage=sellLeverage
     * @param float $buyLeverage
     * @return self
     */
    public function setBuyLeverage(float $buyLeverage): self;
    public function getBuyLeverage(): float;

    /**
     * (0, max leverage of corresponding risk limit]. For one-way mode, make sure buyLeverage=sellLeverage
     * @param float $sellLeverage
     * @return self
     */
    public function setSellLeverage(float $sellLeverage): self;
    public function getSellLeverage(): float;
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces\ISetLeverageRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Request\SetLeverageRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setBuyLeverage(float $buyLeverage)</td>
     <td><b>YES</b></td>
     <td> (0, max leverage of corresponding risk limit]. For one-way mode, make sure buyLeverage=sellLeverage </td>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setSellLeverage(float $sellLeverage)</td>
     <td><b>YES</b></td>
     <td> (0, max leverage of corresponding risk limit]. For one-way mode, make sure buyLeverage=sellLeverage </td>
   </tr>
</table>

<br />

<h3 align="left" width="100%"><b>RESPONSE STRUCTURE</b></h3>

---

> Endpoint returns an empty array as a successful response
