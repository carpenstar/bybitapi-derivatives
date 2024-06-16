# Contract - Position - Switch Cross Isolated Margin
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/cross-isolated)</b>

<p>Запрос изменяет режим маржи (Кросс или Изолированная)</p>

<br />

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

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

<h3 align="left" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces;

interface ISwitchCrossIsolatedMarginRequestInterface
{
    /**
     * Торговая пара
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
     * Установка кредитного плеча направления покупки. Убедитесь, что кредитное плечо покупки равно кредитному плечу продажи.
     * @param float $buyLeverage
     * @return self
     */
    public function setBuyLeverage(float $buyLeverage): self;
    public function getBuyLeverage(): float;

    /**
     * Установка кредитного плеча направления продажи. Убедитесь, что кредитное плечо покупки равно кредитному плечу продажи.
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
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setTradeMode(int $tradeMode)</td>
     <td><b>ДА</b></td>
     <td> 0: cross margin. 1: isolated margin </td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setBuyLeverage(float $buyLeverage)</td>
     <td><b>ДА</b></td>
     <td> Установка кредитного плеча направления покупки. Убедитесь, что кредитное плечо покупки равно кредитному плечу продажи. </td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setSellLeverage(float $sellLeverage)</td>
     <td><b>ДА</b></td>
     <td> Установка кредитного плеча направления продажи. Убедитесь, что кредитное плечо покупки равно кредитному плечу продажи </td>
   </tr>
</table>

<h3 align="left" width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа

---
