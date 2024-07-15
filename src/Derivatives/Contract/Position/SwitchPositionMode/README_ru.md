# Contract - Position - Switch Position Mode
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/position-mode)</b>
<p>Запрос поддерживает переключение режима позиции для бессрочных и обратных фьючерсов USDT. <br />
Если вы находитесь в одностороннем режиме, вы можете открыть только одну позицию на стороне покупки или продажи. <br />
Если вы находитесь в режиме хеджирования, вы можете одновременно открывать позиции на покупку и продажу.</p>

<br />

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

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

<h3 align="left" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces;

interface ISwitchPositionModeRequestInterface
{
    /**
     * Имя символа. Требуется либо символ, либо монета. символ имеет более высокий приоритет
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Токен
     * @param string $coin
     * @return self
     */
    public function setCoin(string $coin): self;
    public function getCoin(): string;

    /**
     * Режим позиции. 0: Merged Single. 3: Both Side
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
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setCoin(string $coin)</td>
     <td><b>ДА</b></td>
     <td> Токен </td>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setPositionMode(int $positionMode)</td>
     <td><b>ДА</b></td>
     <td> Редим позиции. 0: Merged Single. 3: Both Side </td>
   </tr>
</table>

<br />

<h3 align="left" width="100%"><b>Структура ответа</b></h3>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа

---

