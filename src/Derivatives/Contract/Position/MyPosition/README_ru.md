# Contract - Position - My Position
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/position-list)</b>
<p>Получение списка открытых позиций пользователя</p>

<br />

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\MyPosition;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Request\MyPositionRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Response\MyPositionResponse;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

$positionsEndpointResponse = $bybit->privateEndpoint(MyPosition::class, (new MyPositionRequest())->setSymbol('BTCUSDT'))->execute();

echo "Return Code: {$positionsEndpointResponse->getReturnCode()}\n";
echo "Return Message: {$positionsEndpointResponse->getReturnMessage()}\n";

/** @var MyPositionResponse $positionsListInfoResponse */
$positionsListInfoResponse = $positionsEndpointResponse->getResult();

echo "Category: {$positionsListInfoResponse->getCategory()}\n";
echo "Next Page Cursor: {$positionsListInfoResponse->getNextPageCursor()}\n";

foreach ($positionsListInfoResponse->getPositionList() as $position) {
    echo "-----\n";
    echo "Symbol: {$position->getSymbol()}\n";
    echo "Side: {$position->getSide()}\n";
    echo "Size: {$position->getSize()}\n";
    echo "Entry Price: {$position->getEntryPrice()}\n";
    echo "Leverage: {$position->getLeverage()}\n";
    echo "Position Value: {$position->getPositionValue()}\n";
    echo "Position Index: {$position->getPositionIdx()}\n";
    echo "Risk ID: {$position->getRiskId()}\n";
    echo "Risk Limit Value: {$position->getRiskLimitValue()}\n";
    echo "Trade ModeL {$position->getTradeMode()}\n";
    echo "Auto Add Margin: {$position->getAutoAddMargin()}\n";
    echo "Position Balance: {$position->getPositionBalance()}\n";
    echo "Liquidation Price: {$position->getLiqPrice()}\n";
    echo "Bust Price: {$position->getBustPrice()}\n";
    echo "TP/SL Mode: {$position->getTpSlMode()}\n";
    echo "Take Profit: {$position->getTakeProfit()}\n";
    echo "Stop-Loss: {$position->getStopLoss()}\n";
    echo "Created time: {$position->getCreatedTime()->format('Y-m-d H:i:s')}\n";
    echo "Update Time: {$position->getUpdatedTime()->format('Y-m-d H:i:s')}\n";
    echo "Trailing Stop: {$position->getTrailingStop()}\n";
    echo "Active Price: {$position->getActivePrice()}\n";
    echo "Mark Price: {$position->getMarkPrice()}\n";
    echo "Unrealised PnL: {$position->getUnrealisedPnl()}\n";
    echo "Cumulative Realised PnL: {$position->getCumRealisedPnl()}\n";
    echo "Maintenance Margin:  {$position->getPositionMM()}\n";
    echo "Initial Margin: {$position->getPositionIM()}\n";
    echo "Position Status: {$position->getPositionStatus()}\n";
    echo "Settlement Price: {$position->getSessionAvgPrice()}\n";
    echo "Pre-occupancy Closing Fee: {$position->getOccClosingFee()}\n";
    echo "Auto-deleverage Rank Indicator: {$position->getAdlRankIndicator()}\n";
}

/**
 * Return Code: 0
 * Return Message: OK
 * Category:
 * Next Page Cursor:
 * -----
 * Symbol: BTCUSDT
 * Side: None
 * Size: 0
 * Entry Price: 0
 * Leverage: 10
 * Position Value: 0
 * Position Index: 0
 * Risk ID: 1
 * Risk Limit Value: 2000000
 * Trade ModeL 0
 * Auto Add Margin: 0
 * Position Balance: 0
 * Liquidation Price: 0
 * Bust Price: 0
 * TP/SL Mode: Full
 * Take Profit: 0
 * Stop-Loss: 0
 * Created time: 2023-08-02 16:13:32
 * Update Time: 2024-06-23 00:00:00
 * Trailing Stop: 0.00
 * Active Price: 0
 * Mark Price: 64247.8
 * Unrealised PnL: 0
 * Cumulative Realised PnL: -9751.60575724
 * Maintenance Margin:  0
 * Initial Margin: 0
 * Position Status: Normal
 * Settlement Price: 0
 * Pre-occupancy Closing Fee: 0
 * Auto-deleverage Rank Indicator: 0
 */
````

<br />

<h3 align="left" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionRequestInterface
{
    /**
     * Торговая пара
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Расчетная монета
     * @param string $symbol
     * @return self
     */
    public function setSettleCoin(string $symbol): self;
    public function getSettleCoin(): string;
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Request\MyPositionRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IMyPositionRequestInterface::setSymbol(string $symbol)</td>
     <td>НЕТ</td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IMyPositionRequestInterface::setSettleCoin(string $symbol)</td>
     <td>НЕТ</td>
     <td>Расчетный токен</td>
   </tr>
</table>

<br />

<h3 align="left" width="100%"><b>Структура ответа</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionResponseInterface
{
    /**
     * Product type
     * @return string
     */
    public function getCategory(): string;

    /**
     * Cursor. Used to pagination
     * @return string
     */
    public function getNextPageCursor(): string;

    /** @return IMyPositionResponseItemInterface[] */
    public function getPositionList(): array;
}
````

<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionResponseInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Response\MyPositionResponse::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Метод</th>
     <th style="width: 20%; text-align: center">Тип</th>
     <th style="width: 60%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSymbol()</td>
     <td>string</td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSymbol()</td>
     <td>string</td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSymbol()</td>
     <td>string</td>
     <td>Торговая пара</td>
   </tr>
</table>

<br />


```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionResponseItemInterface
{
    /**
     * Торговая пара
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Направление. Buy, Sell. Возврат None, когда нулевое положение одностороннего режима
     * @return string
     */
    public function getSide(): string;

    /**
     * Размер позиции
     * @return float
     */
    public function getSize(): float;

    /**
     * Цена входа
     * @return float
     */
    public function getEntryPrice(): float;

    /**
     * Кредитное плечо
     * @return float
     */
    public function getLeverage(): float;

    /**
     * Значение позиции
     * @return float
     */
    public function getPositionValue(): float;

    /**
     * Индекс позиции
     * @return int
     */
    public function getPositionIdx(): int;

    /**
     * ID лимита риска
     * @return int
     */
    public function getRiskId(): int;

    /**
     * Значение лимита позиции, соответствующее идентификатору риска
     * @return string
     */
    public function getRiskLimitValue(): string;

    /**
     * 0: cross margin mode. 1: isolated margin mode
     * @return int
     */
    public function getTradeMode(): int;

    /**
     * 0: false. 1: true
     * @return int
     */
    public function getAutoAddMargin(): int;

    /**
     * Маржа позиции
     * @return float
     */
    public function getPositionBalance(): float;

    /**
     * Ориентировочная цена ликвидации. Возвращается значение только тогда, когда minPrice < liqPrice < maxPrice
     * @return float
     */
    public function getLiqPrice(): float;

    /**
     * Ориентировочная цена ликвидации
     * @return float
     */
    public function getBustPrice(): float;

    /**
     * Depreciated, всегда "Full"
     * @return string
     */
    public function getTpSlMode(): string;

    /**
     * Цена тейк-профита
     * @return float
     */
    public function getTakeProfit(): float;

    /**
     * Цена стоп-лосса
     * @return float
     */
    public function getStopLoss(): float;

    /**
     * Время создания позиции
     * @return \DateTime
     */
    public function getCreatedTime(): \DateTime;

    /**
     * Время обновления позиции
     * @return \DateTime
     */
    public function getUpdatedTime(): \DateTime;

    /**
     * Трейлинг-стоп
     * @return string
     */
    public function getTrailingStop(): string;

    /**
     * Активация цены трейлинг-стопа
     * @return float
     */
    public function getActivePrice(): float;

    /**
     * Маркировочная цена в реальном времени
     * @return float
     */
    public function getMarkPrice(): float;

    /**
     * нереализованный PNL
     * @return float
     */
    public function getUnrealisedPnl(): float;

    /**
     * совокупный реализованный PNL
     * @return float
     */
    public function getCumRealisedPnl(): float;

    /**
     * Маржа поддержания позиции
     * @return float
     */
    public function getPositionMM(): float;

    /**
     * Начальная маржа позиции
     * @return float
     */
    public function getPositionIM(): float;

    /**
     * Статус позиции
     * @return string
     */
    public function getPositionStatus(): string;

    /**
     * Расчетная цена
     * @return float
     */
    public function getSessionAvgPrice(): float;

    /**
     * Pre-occupancy closing fee
     * @return float
     */
    public function getOccClosingFee(): float;

    /**
     * Auto-deleverage rank indicator
     * https://www.bybit.com/en-US/help-center/s/article/What-is-Auto-Deleveraging-ADL
     * @return int
     */
    public function getAdlRankIndicator(): int;
}
```
<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionResponseItemInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Response\MyPositionResponseItem::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Метод</th>
     <th style="width: 20%; text-align: center">Тип</th>
     <th style="width: 60%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getSymbol()</td>
     <td>string</td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getSide()</td>
     <td>string</td>
     <td> Side. Buy, Sell. Возврат None, когда нулевое положение одностороннего режима</td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getSize()</td>
     <td>float</td>
     <td> Размер позиции </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getEntryPrice()</td>
     <td>float</td>
     <td> Цена входа </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getLeverage()</td>
     <td>float</td>
     <td> Кредитое плечо </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getPositionValue()</td>
     <td>float</td>
     <td> Значение позиции </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getPositionIdx()</td>
     <td>int</td>
     <td> Индекс позиции </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getRiskId()</td>
     <td>int</td>
     <td> ID риска </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getRiskLimitValue()</td>
     <td>string</td>
     <td> Значение лимита позиции, соответствующее идентификатору риска </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getTradeMode()</td>
     <td>int</td>
     <td> 0: cross margin mode. 1: isolated margin mode </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getAutoAddMargin()</td>
     <td>int</td>
     <td> 0: false. 1: true </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getPositionBalance()</td>
     <td>float</td>
     <td> Маржа позиции </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getLiqPrice()</td>
     <td>float</td>
     <td>Ориентировочная цена ликвидации. Он возвращает значение только тогда, когда minPrice < liqPrice < maxPrice</td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getBustPrice()</td>
     <td>float</td>
     <td>Ориентировочная цена ликвидации</td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getTpSlMode()</td>
     <td>string</td>
     <td>всегда "Full" </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getTakeProfit()</td>
     <td>float</td>
     <td>Цена тейк-профита</td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getStopLoss()</td>
     <td>float</td>
     <td>Цена стоп-лоса</td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getCreatedTime()</td>
     <td>DateTime</td>
     <td>Время создания позиции</td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getUpdatedTime()</td>
     <td>DateTime</td>
     <td>Время обновления позиции</td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getTrailingStop()</td>
     <td>string</td>
     <td>Трейлинг стоп</td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getActivePrice()</td>
     <td>float</td>
     <td>Активация цены трейлинг-стопа</td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getMarkPrice()</td>
     <td>float</td>
     <td>Маркировочная цена в реальном времени</td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getUnrealisedPnl()</td>
     <td>float</td>
     <td> нереализованный PNL </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getCumRealisedPnl()</td>
     <td>float</td>
     <td> совокупный реализованный PNL </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getPositionMM()</td>
     <td>float</td>
     <td> Поддерживающая маржа </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getPositionIM()</td>
     <td>float</td>
     <td> Начальная маржа </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getPositionStatus()</td>
     <td>string</td>
     <td> Статус позиции </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getSessionAvgPrice()</td>
     <td>float</td>
     <td> Расчетная цена </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getOccClosingFee()</td>
     <td>float</td>
     <td> Pre-occupancy closing fee </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getAdlRankIndicator()</td>
     <td>string</td>
     <td> Индикатор ранга автоматического снижения кредитного плеча </td>
   </tr>
</table>

---