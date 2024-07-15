### Contract - Position - Set Auto Add Margin
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/auto-margin)</b>
<p>Включить/выключить автоматическое добавление маржи позиции. Чтобы понять больше, пожалуйста, прочитайте <a href="https://www.bybit.com/en-US/help-center/s/article/Introduction-to-Auto-Margin-Replenishment-USDT-Contract" target="_blank">здесь</a></p>

<br />

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

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

<h3 align="left" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces;

interface ISetAutoAddMarginRequestInterface
{
    /**
     * Торговая пара
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
     * Включить/выключить автоматическое добавление маржи. 0: off. 1: on
     * @param int $autoAddMargin
     * @return self
     */
    public function setAutoAddMargin(int $autoAddMargin): self;
    public function getAutoAddMargin(): int;

    /**
     * Индекс позиции
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
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setSide(string $side)</td>
     <td><b>ДА</b></td>
     <td> Side. Buy,Sell </td>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setAutoAddMargin(int $autoAddMargin)</td>
     <td><b>ДА</b></td>
     <td> Включить/выключить автоматическое добавление маржи. 0: off. 1: on </td>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setPositionIdx(int $positionIdx)</td>
     <td><b>ДА</b></td>
     <td> Индекс позиции </td>
   </tr>
</table>

<h3 align="left" width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа.

---