# Contract - Position - Set Leverage
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/leverage)</b>
<p>Установить кредитное плечо позции</p>

<br />

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

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

<h3 align="left" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces;

interface ISetLeverageRequestInterface
{
    /**
     * Торговая пара
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     *  (0, максимальное кредитное плечо соответствующего лимита риска]. Для одностороннего режима убедитесь, что buyLeverage=sellLeverage
     * @param float $buyLeverage
     * @return self
     */
    public function setBuyLeverage(float $buyLeverage): self;
    public function getBuyLeverage(): float;

    /**
     * (0, максимальное кредитное плечо соответствующего лимита риска]. Для одностороннего режима убедитесь, что buyLeverage=sellLeverage
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
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setBuyLeverage(float $buyLeverage)</td>
     <td><b>ДА</b></td>
     <td> (0, максимальное кредитное плечо соответствующего лимита риска]. Для одностороннего режима убедитесь, что buyLeverage=sellLeverage </td>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setSellLeverage(float $sellLeverage)</td>
     <td><b>ДА</b></td>
     <td>(0, максимальное кредитное плечо соответствующего лимита риска]. Для одностороннего режима убедитесь, что buyLeverage=sellLeverage</td>
   </tr>
</table>

<h3 align="left" width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа

---