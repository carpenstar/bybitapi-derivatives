# Contract - Position - Switch Position Mode
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/position-mode)</b>
<p>The request supports position mode switching for perpetual and inverse USDT futures. <br />
If you are in one-way mode, you can only open one position on the buy or sell side. <br />
If you are in hedging mode, you can open buy and sell positions simultaneously.</p>

<br />

<h3 align="left" width="100%"><b>EXAMPLE</b></h3>

---

````php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Request\SwitchPositionModeRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\SwitchPositionMode;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

$isSwitchCrossMargin = $bybit->privateEndpoint(SwitchPositionMode::class, (new SwitchPositionModeRequest())
    ->setSymbol('BTCUSDT')
    ->setMode(3)
)->execute();

if ($isSwitchCrossMargin->getReturnCode() == 0) {
    echo "Success set position mode: {$isSwitchCrossMargin->getReturnMessage()}\n";
} else {
    echo "Failed set position mode: {$isSwitchCrossMargin->getReturnMessage()}\n";
}

/**
* Success set position mode: OK
* ----- OR
* Failed set position mode: symbol has order, can not switch mode
*/
````

<br />

<h3 align="left" width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces;

interface ISwitchPositionModeRequestInterface
{
    /**
     * Symbol name. Either symbol or coin is required. symbol has a higher priority
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Coin
     * @param string $coin
     * @return self
     */
    public function setCoin(string $coin): self;
    public function getCoin(): string;

    /**
     * Position mode. 0: Merged Single. 3: Both Side
     * @param int $positionMode
     * @return self
     */
    public function setMode(int $positionMode): self;
    public function getMode(): int;
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces\ISwitchPositionModeRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Request\SwitchPositionModeRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setCoin(string $coin)</td>
     <td><b>YES</b></td>
     <td> Coin </td>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setPositionMode(int $positionMode)</td>
     <td><b>YES</b></td>
     <td> Position mode. 0: Merged Single. 3: Both Side </td>
   </tr>
</table>

<br />

<h3 align="left" width="100%"><b>RESPONSE STRUCTURE</b></h3>

---

> Endpoint returns an empty array as a successful response
