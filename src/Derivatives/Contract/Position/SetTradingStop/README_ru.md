# Contract - Position - Set Trading Stop
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/trading-stop)</b>

<p>Запрос устанавливает значение тейк-профита, стоп-лоса или трейлинга</p>

> Передача этих параметров создаст внутри системы условные ордера.

> Система отменит эти ордера, если позиция будет закрыта, и скорректирует количество в соответствии с размером открытой позиции.

> Поддержка бессрочных USDT и USDC Perpetual. Примечание: USDC Perpetual не поддерживает частичный режим TP/SL.

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

<p align="center" width="100%"><b> --- </b></p>


<h3 align="left" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Interfaces;

interface ISetTradingStopRequestInterface
{
    /**
     * Торговая пара
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Не может быть меньше 0, 0 означает отмену Take Profit. Частичный TP/SL не может быть отменен установкой 0
     * @param float $takeProfit
     * @return self
     */
    public function setTakeProfit(float $takeProfit): self;
    public function getTakeProfit(): float;

    /**
     * Не может быть меньше 0, 0 означает отмену Stop Loss. Частичный TP/SL не может быть отменен установкой 0
     * @param float $stopLoss
     * @return self
     */
    public function setStopLoss(float $stopLoss): self;
    public function getStopLoss(): float;

    /**
     * Режим TP/SL. Full: вся позиция TP/SL. Частичная: частичная позиция TP/SL.
     * Поскольку каждый контракт изначально имеет полный режим TP/SL, если он был изменен ранее, он может быть частичным.
     * Поэтому, если это не указано, система автоматически получит текущую конфигурацию режима TP/SL для контракта.
     * @param string $tpslMode
     * @return self
     */
    public function setTpslMode(string $tpslMode): self;
    public function getTpslMode(): string;

    /**
     * Размер тейк-профита. Действует только в частичном режиме TP/SL. Примечание: значения tpSize и slSize должны быть равны
     * @param float $tpSize
     * @return self
     */
    public function setTpSize(float $tpSize): self;
    public function getTpSize(): float;

    /**
     * Размер стоп-лосса. Действует только в частичном режиме TP/SL. Примечание: значения tpSize и slSize должны быть равны
     * @param float $slSize
     * @return self
     */
    public function setSlSize(float $slSize): self;
    public function getSlSize(): float;

    /**
     * Тип триггерной цены тейк-профита. по умолчанию: LastPrice
     * @param string $tpTriggerBy
     * @return self
     */
    public function setTpTriggerBy(string $tpTriggerBy): self;
    public function getTpTriggerBy(): string;

    /**
     * Тип цены срабатывания стоп-лосса. по умолчанию: LastPrice
     * @param string $slTriggerBy
     * @return self
     */
    public function setSlTriggerBy(string $slTriggerBy): self;
    public function getSlTriggerBy(): string;

    /**
     * Не может быть меньше 0, 0 означает отмену Trailing Stop
     * @param float $trailingStop
     * @return self
     */
    public function setTrailingStop(float $trailingStop): self;
    public function getTrailingStop(): float;

    /**
     * Цена триггера трейлинг-стопа. Трейлинг-стоп сработает только при достижении этой цены.
     * @param float $activePrice
     * @return self
     */
    public function setActivePrice(float $activePrice): self;
    public function getActivePrice(): float;

    /**
     * Цена лимитного ордера при срабатывании цены тейк-профита. Работает только тогда, когда tpslMode=Partial и tpOrderType=Limit.
     * @param float $tpLimitPrice
     * @return self
     */
    public function setTpLimitPrice(float $tpLimitPrice): self;
    public function getTpLimitPrice(): float;

    /**
     * Цена лимитного ордера при срабатывании стоп-лосса. Работает только тогда, когда tpslMode=Partial и slOrderType=Limit.
     * @param float $slLimitPrice
     * @return self
     */
    public function setSlLimitPrice(float $slLimitPrice): self;
    public function getSlLimitPrice(): float;

    /**
     * Тип ордера, при котором срабатывает тейк-профит. Market (по умолчанию), Limit. Для tpslMode=Full поддерживается только tpOrderType=Market.
     * @param string $tpOrderType
     * @return self
     */
    public function setTpOrderType(string $tpOrderType): self;
    public function getTpOrderType(): string;

    /**
     * Тип ордера, при котором срабатывает стоп-лосс. Рынок (по умолчанию), Лимит. Для tpslMode=Full поддерживается только slOrderType=Market.
     * @param string $slOrderType
     * @return self
     */
    public function setSlOrderType(string $slOrderType): self;
    public function getSlOrderType(): string;

    /**
     * Используется для идентификации позиций в различных режимах позиции. Для режима хеджирования этот параметр является обязательным.
     * 0: one-way mode
     * 1: hedge-mode Buy side
     * 2: hedge-mode Sell side
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
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Interfaces\ISetTradingStopRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Request\SetTradingStopRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setTakeProfit(float $takeProfit)</td>
     <td>НЕТ</td>
     <td>Не может быть меньше 0, 0 означает отмену Take Profit. Частичный TP/SL не может быть отменен установкой 0</td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setStopLoss(float $stopLoss)</td>
     <td>НЕТ</td>
     <td> Не может быть меньше 0, 0 означает отмену Stop Loss. Частичный TP/SL не может быть отменен установкой 0 </td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setTpslMode(string $tpslMode)</td>
     <td>НЕТ</td>
     <td>TP/SL mode</td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setTpSize(float $tpSize)</td>
     <td>НЕТ</td>
     <td>Размер тейк-профита. Действует только в частичном режиме TP/SL. Примечание: значения tpSize и slSize должны быть равны</td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setSlSize(float $slSize)</td>
     <td>НЕТ</td>
     <td>Размер стоп-лосса. Действует только в частичном режиме TP/SL. Примечание: значения tpSize и slSize должны быть равны</td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setTpTriggerBy(string $tpTriggerBy)</td>
     <td>НЕТ</td>
     <td>Тип триггерной цены тейк-профита. по умолчанию: LastPrice</td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setSlTriggerBy(string $slTriggerBy)</td>
     <td>НЕТ</td>
     <td> Тип цены срабатывания стоп-лосса. по умолчанию: LastPrice </td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setTrailingStop(float $trailingStop)</td>
     <td>НЕТ</td>
     <td> Не может быть меньше 0, 0 означает отмену Trailing Stop </td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setActivePrice(float $activePrice)</td>
     <td>НЕТ</td>
     <td> Цена триггера трейлинг-стопа. Трейлинг-стоп сработает только при достижении этой цены. </td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setTpLimitPrice(float $tpLimitPrice)</td>
     <td>НЕТ</td>
     <td> Цена лимитного ордера при срабатывании цены тейк-профита. Работает только тогда, когда tpslMode=Partial и tpOrderType=Limit. </td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setSlLimitPrice(float $slLimitPrice)</td>
     <td>НЕТ</td>
     <td> Цена лимитного ордера при срабатывании стоп-лосса. Работает только тогда, когда tpslMode=Partial и slOrderType=Limit. </td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setTpOrderType(string $tpOrderType)</td>
     <td>НЕТ</td>
     <td> Тип ордера, при котором срабатывает тейк-профит. Рынок (по умолчанию), Лимит. Для tpslMode=Full поддерживается только tpOrderType=Market. </td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setSlOrderType(string $slOrderType)</td>
     <td>НЕТ</td>
     <td> Тип ордера при срабатывании тейк-профита </td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setPositionIdx(int $positionIdx)</td>
     <td>НЕТ</td>
     <td> 
        Используется для идентификации позиций в различных режимах позиции. Для режима хеджирования этот параметр является обязательным.
        0: односторонний режим
        1: Режим хеджирования Buy side
        2: Режим хеджирования Sell side 
     </td>
   </tr>
</table>

<h3 align="left" width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа

---
