# Market Data - Instrument Info
<b>[Официальная документация](https://bybit-exchange.github.io/docs/derivatives/public/instrument-info)</b>
<p>Эндпоинт предоставляет характеристики торгового инструмента.</p> 

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\InstrumentInfo::class
```

<br />

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\InstrumentInfo;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IInstrumentInfoResponseItemInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Request\InstrumentInfoRequest;


$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

$instrumentInfoResponse = $bybit->publicEndpoint(InstrumentInfo::class, (new InstrumentInfoRequest())
    ->setSymbol('BTCUSDT')
)->execute();

echo "Return code: {$instrumentInfoResponse->getReturnCode()}\n";
echo "Return message: {$instrumentInfoResponse->getReturnMessage()}\n";

/** @var IInstrumentInfoResponseItemInterface $instrumentInfo */
$instrumentInfo = $instrumentInfoResponse->getResult()->getInstrumentInfoList();

echo "Next Page Cursor: {$instrumentInfo->getNextPageCursor()} \n";
echo "Symbol: {$instrumentInfo->getSymbol()}\n";
echo "Contract Type: {$instrumentInfo->getContractType()}\n";
echo "Status: {$instrumentInfo->getStatus()}\n";
echo "Base Coin: {$instrumentInfo->getBaseCoin()}\n";
echo "Settle Coin: {$instrumentInfo->getSettleCoin()} \n";
echo "Quote Coin: {$instrumentInfo->getQuoteCoin()}\n";
echo "Launch Time: {$instrumentInfo->getLaunchTime()->format('Y-m-d H:i:s')}\n";
echo "Delivery Time: {$instrumentInfo->getDeliveryTime()->format('Y-m-d H:i:s')} {}\n";
echo "Delivery Fee Rate: {$instrumentInfo->getDeliveryFeeRate()} {}\n";
echo "Price Scale: {$instrumentInfo->getPriceScale()}\n";
echo "Unified Margin Trade: {$instrumentInfo->getUnifiedMarginTrade()}\n";
echo "Funding Interval: {$instrumentInfo->getFundingInterval()}\n";
echo "Leverage Filter: \n";
foreach ($instrumentInfo->getLeverageFilter()->all() as $filterItem) {
    echo "  - Minimal Leverage: {$filterItem->getMinLeverage()} \n";
    echo "  - Maximal Leverage: {$filterItem->getMaxLeverage()} \n";
    echo "  - Leverage Step: {$filterItem->getLeverageStep()} \n";
}
echo "Price Filter: \n";
foreach ($instrumentInfo->getPriceFilter()->all() as $priceFilter) {
    echo "  - Minimal Price: {$priceFilter->getMinPrice()} \n";
    echo "  - Maximal Price: {$priceFilter->getMaxPrice()} \n";
    echo "  - Tick Size: {$priceFilter->getTickSize()} \n";
}
echo "Lot Size Filter: \n";
foreach ($instrumentInfo->getLotSizeFilter()->all() as $lotSizeFilter) {
    echo "  - Maximal Order Quantity: {$lotSizeFilter->getMaxOrderQty()} \n";
    echo "  - Minimal Order Quantity: {$lotSizeFilter->getMinOrderQty()} \n";
    echo "  - Quantity Step: {$lotSizeFilter->getQtyStep()} \n";
}

/**
* Return code: 0
* Return message: OK
* Next Page Cursor:  
* Symbol: BTCUSDT
* Contract Type: LinearPerpetual
* Status: Trading
* Base Coin: BTC
* Settle Coin: USDT 
* Quote Coin: USDT
* Launch Time: 2020-03-30 00:00:00
* Delivery Time: 1970-01-01 00:00:00 {}
* Delivery Fee Rate: 0 {}
* Price Scale: 2
* Unified Margin Trade: 1
* Funding Interval: 480
* Leverage Filter: 
*   - Minimal Leverage: 1 
*   - Maximal Leverage: 100 
*   - Leverage Step: 0.01 
* Price Filter: 
*   - Minimal Price: 0.1 
*   - Maximal Price: 199999.8 
*   - Tick Size: 0.1 
* Lot Size Filter: 
*   - Maximal Order Quantity: 1190 
*   - Minimal Order Quantity: 0.001 
*   - Quantity Step: 0.001
*/

```  

<br />

<h3 align="left" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
interface IInstrumentInfoRequestInterface
{
    /**
     * Торговая пара
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Категория. Пожалуйста, не используйте этот параметр 
     * @param string $category
     * @return self
     */
    public function setCategory(string $category): self;
    public function getCategory(): string;

    /**
     * Ограничение строк на запрос. [1, 1000]. По умолчанию: 500
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;

    /**
     * Курсор страницы. Используется для пагинации.
     * @param string $cursor
     * @return self
     */
    public function setCursor(string $cursor): self;
    public function getCursor(): string;
}

```  

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IInstrumentInfoRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Request\InstrumentInfoRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IInstrumentInfoRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IInstrumentInfoRequestInterface::setCategory(string $symbol): self</td>
    <td><b>НЕТ</b></td>
    <td><b>Категория. Пожалуйста, не используйте этот параметр </b></td>
  </tr>
  <tr>
    <td>IInstrumentInfoRequestInterface::setLimit(string $symbol): self</td>
    <td><b>НЕТ</b></td>
    <td>Ограничение строк на запрос. [1, 1000]. По умолчанию: 500</td>
  </tr>
  <tr>
    <td>IInstrumentInfoRequestInterface::setCursor(string $symbol): self</td>
    <td><b>НЕТ</b></td>
    <td>Курсор страницы. Используется для пагинации.</td>
  </tr>
</table>

<br />

<h3 width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces;

use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\InstrumentInfoResponseItem;

interface IInstrumentInfoResponseInterface
{
    public function getInstrumentInfoList(): ?InstrumentInfoResponseItem;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IInstrumentInfoResponse::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\InstrumentInfoResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseInterface::getInstrumentInfoList()</td>
    <td>IInstrumentInfoResponseItemInterface</td>
    <td>Объект информации об инструменте</td>
  </tr>
</table>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces;

use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;

interface IInstrumentInfoResponseItemInterface
{
    /**
     * Cursor. Use the nextPageCursor token from the response to retrieve the next page of the result set
     * @return string|null
     */
    public function getNextPageCursor(): ?string;

    /**
     * Торговая пара
     * @return string|null
     */
    public function getSymbol(): ?string;

    /**
     * Тип контракта. `LinearPerpetual`
     * @return string|null
     */
    public function getContractType(): ?string;

    /**
     * Статус торговли по инструменту
     * @return string|null
     */
    public function getStatus(): ?string;

    /**
     * Базовый токена. Например: BTC
     * @return string|null
     */
    public function getBaseCoin(): ?string;

    /**
     * Относительный токен. Например: USDT
     * @return string|null
     */
    public function getQuoteCoin(): ?string;

    /**
     * Расчетный токена. Например: USDT
     * @return string|null
     */
    public function getSettleCoin(): ?string;

    /**
     * Время запуска торговли токеном (ms)
     * @return \DateTime|null
     */
    public function getLaunchTime(): ?\DateTime;

    /**
     * The delivery timestamp (ms). "0" for perpetual
     * @return \DateTime|null
     */
    public function getDeliveryTime(): ?\DateTime;

    /**
     * The delivery fee rate
     * @return float
     */
    public function getDeliveryFeeRate(): float;

    /**
     * Шкала цены
     * @return float
     */
    public function getPriceScale(): float;

    /**
     * Поддержка единого маржинального счета
     * @return bool
     */
    public function getUnifiedMarginTrade(): bool;

    /**
     * Интервал списания ставки финансирования (в минутах)
     * @return int
     */
    public function getFundingInterval(): int;

    /**
     * @return ILotSizeFilterItemInterface[]
     */
    public function getLotSizeFilter(): EntityCollection;

    /**
     * @return IPriceFilterItemInterface[]
     */
    public function getPriceFilter(): EntityCollection;

    /**
     * @return ILeverageFilterItemInterface[]
     */
    public function getLeverageFilter(): EntityCollection;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IInstrumentInfoResponseItemInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\InstrumentInfoResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getSymbol()</td>
    <td>string</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getContractType()</td>
    <td>string</td>
    <td> Тип контракта. <b>На текущий момент поддерживается только `LinearPerpetual`</b></td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getBaseCoin()</td>
    <td>string</td>
    <td>Базовый токен. Например: BTC</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getQuoteCoin()</td>
    <td>string</td>
    <td>Относительный токен. Например: USDT</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getSettleCoin()</td>
    <td>string</td>
    <td>Расчетный токен. Например: USDT</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getFundingInterval()</td>
    <td>int</td>
    <td>Интервал списания ставки финансирования (в минутах)</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getUnifiedMarginTrade()</td>
    <td>bool</td>
    <td>Поддержка единого маржинального счета</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getPriceScale()</td>
    <td>float</td>
    <td>Шкала цены</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getLaunchTime()</td>
    <td>DateTime</td>
    <td>
      Время запуска торговли токеном
    </td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getStatus()</td>
    <td>string</td>
    <td>
      Статус торговли по инструменту
    </td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getLotSizeFilter()</td>
    <td>ILotSizeFilterItem[]</td>
    <td></td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getPriceFilter()</td>
    <td>IPriceFilterItem[]</td>
    <td></td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getLeverageFilter()</td>
    <td>ILeverageFilterItem[]</td>
    <td></td>
  </tr>
</table>

<br />

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\ILotSizeFilterItemInterface::class
    
interface ILotSizeFilterItemInterface
{
    public function getMaxOrderQty(): float;
    public function getMinOrderQty(): float;
    public function getQtyStep(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\ILotSizeFilterItemInterface:class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\LotSizeFilterItemResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ILotSizeFilterItemInterface::getMaxOrderQty()</td>
    <td>float</td>
    <td>Максимальный размер ордера</td>
  </tr>
  <tr>
    <td>ILotSizeFilterItemInterface::getMinOrderQty()</td>
    <td>float</td>
    <td>Минимальный размер ордера</td>
  </tr>
  <tr>
    <td>ILotSizeFilterItemInterface::getQtyStep()</td>
    <td>float</td>
    <td>Шаг изменения размера ордера</td>
  </tr>
</table>

<br />

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\ILeverageFilterItemInterface::class
    
interface ILeverageFilterItemInterface
{
    public function getMinLeverage(): int;
    public function getMaxLeverage(): float;
    public function getLeverageStep(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\ILeverageFilterItemInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\LeverageFilterItemResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ILeverageFilterItemInterface::getMinLeverage()</td>
    <td>int</td>
    <td>Минимальное кредитное плеча</td>
  </tr>
  <tr>
    <td>ILeverageFilterItemInterface::getMaxLeverage()</td>
    <td>float</td>
    <td>Максимальное кредитное плечо</td>
  </tr>
  <tr>
    <td>ILeverageFilterItemInterface::getLeverageStep()</td>
    <td>float</td>
    <td>Шаг изменения кредитного плеча</td>
  </tr>
</table>

<br />

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IPriceFilterItemInterface::class
    
interface IPriceFilterItemInterface
{
    public function getMinPrice(): float;
    public function getMaxPrice(): float;
    public function getTickSize(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IPriceFilterItemInterface::class</b>
    </td>
  </tr>
    <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\PriceFilterItemResponse::class</b>
    </td>
    </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IPriceFilterItemInterface::getMinPrice()</td>
    <td>int</td>
    <td>Минимальная цена</td>
  </tr>
  <tr>
    <td>IPriceFilterItemInterface::getMaxPrice()</td>
    <td>float</td>
    <td>Максимальная цена</td>
  </tr>
  <tr>
    <td>IPriceFilterItemInterface::getTickSize()</td>
    <td>float</td>
    <td>Размер тика</td>
  </tr>
</table>

---