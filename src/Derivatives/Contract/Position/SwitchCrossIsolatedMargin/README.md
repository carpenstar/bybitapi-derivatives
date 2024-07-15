# Contract - Position - Switch Cross Isolated Margin
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/cross-isolated)</b>

<p>The request changes the margin mode (Cross or Isolated)</p>

<br />

<h3 align="left" width="100%"><b>EXAMPLE</b></h3>

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Request\SwitchCrossIsolatedMarginRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\SwitchCrossIsolatedMargin;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

$isSwitchCrossMargin = $bybit->privateEndpoint(SwitchCrossIsolatedMargin::class, (new SwitchCrossIsolatedMarginRequest())
    ->setSymbol('BTCUSDT')
    ->setSellLeverage(6)
    ->setBuyLeverage(6)
)->execute();

if ($isSwitchCrossMargin->getReturnCode() == 0) {
    echo "Success set margin: {$isSwitchCrossMargin->getReturnMessage()}\n";
} else {
    echo "Not success set margin: {$isSwitchCrossMargin->getReturnMessage()}\n";
}

/**
* Success set cross margin: OK
*/
````

<br />

<h3 align="left" width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces;

interface ISwitchCrossIsolatedMarginRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * 0: cross margin. 1: isolated margin
     * @param int $tradeMode
     * @return self
     */
    public function setTradeMode(int $tradeMode): self;
    public function getTradeMode(): int;

    /**
     * Buy side leverage. Make sure buyLeverage equals to sellLeverage
     * @param float $buyLeverage
     * @return self
     */
    public function setBuyLeverage(float $buyLeverage): self;
    public function getBuyLeverage(): float;

    /**
     * Sell side leverage. Make sure buyLeverage equals to sellLeverage
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
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces\ISwitchCrossIsolatedMarginRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Request\SwitchCrossIsolatedMarginRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setTradeMode(int $tradeMode)</td>
     <td><b>YES</b></td>
     <td> 0: cross margin. 1: isolated margin </td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setBuyLeverage(float $buyLeverage)</td>
     <td><b>YES</b></td>
     <td> Buy side leverage. Make sure buyLeverage equals to sellLeverage </td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setSellLeverage(float $sellLeverage)</td>
     <td><b>YES</b></td>
     <td> Sell side leverage. Make sure buyLeverage equals to sellLeverage </td>
   </tr>
</table>

<h3 align="left" width="100%"><b>RESPONSE STRUCTURE</b></h3>

---

> Endpoint returns an empty array as a successful response
