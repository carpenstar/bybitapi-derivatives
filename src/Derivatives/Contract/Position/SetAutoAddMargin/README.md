# Contract - Position - Set Auto Add Margin
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/auto-margin)</b>
<p>Enable/disable automatic addition of position margin. To understand more, please read <a href="https://www.bybit.com/en-US/help-center/s/article/Introduction-to-Auto-Margin-Replenishment-USDT-Contract" target= "_blank">here</a></p>

<br />

<h3 align="left" width="100%"><b>EXAMPLE</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Core\Enums\EnumSide;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Request\SetAutoAddMarginRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\SetAutoAddMargin;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

$isSetAutoAddMargin = $bybit->privateEndpoint(SetAutoAddMargin::class, (new SetAutoAddMarginRequest())
    ->setSymbol('BTCUSDT')
    ->setSide(EnumSide::BUY)
    ->setPositionIdx(0)
    ->setAutoAddMargin(1)
)->execute();

if ($isSetAutoAddMargin->getReturnCode() == 0) {
    echo "Success auto add margin for position: {$isSetAutoAddMargin->getReturnMessage()}\n";
} else {
    echo "Not success response: {$isSetAutoAddMargin->getReturnMessage()}\n";
}

/**
* Success auto add margin for position: OK
*/
````

<br />

<h3 align="left" width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces;

interface ISetAutoAddMarginRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Side. Buy,Sell
     * @param string $side
     * @return self
     */
    public function setSide(string $side): self;
    public function getSide(): string;

    /**
     * Turn on/off auto add margin. 0: off. 1: on
     * @param int $autoAddMargin
     * @return self
     */
    public function setAutoAddMargin(int $autoAddMargin): self;
    public function getAutoAddMargin(): int;

    /**
     * Position index
     * @param int $positionIdx
     * @return self
     */
    public function setPositionIdx(int $positionIdx): self;
    public function getPositionIdx(): int;
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces\ISetAutoAddMarginRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Request\SetAutoAddMarginRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setSide(string $side)</td>
     <td><b>YES</b></td>
     <td> Side. Buy,Sell </td>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setAutoAddMargin(int $autoAddMargin)</td>
     <td><b>YES</b></td>
     <td> Turn on/off auto add margin. 0: off. 1: on </td>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setPositionIdx(int $positionIdx)</td>
     <td><b>YES</b></td>
     <td> Position index </td>
   </tr>
</table>

<h3 align="left" width="100%"><b>RESPONSE STRUCTURE</b></h3>

---

> Endpoint returns an empty array as a successful response

---