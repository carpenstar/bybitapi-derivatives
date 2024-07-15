# Market Data - Instrument Info
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/instrument-info)</b>
<p>Endpoint provides the specifications of the trading instrument.</p> 

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\InstrumentInfo::class
```

<br />

<h3 align="left" width="100%"><b>EXAMPLE</b></h3>

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

<h3 align="left" width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces;

interface IInstrumentInfoRequestInterface
{
    /**
     * Symbol name.
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * @param string $category
     * @return self
     */
    public function setCategory(string $category): self;
    public function getCategory(): string;

    /**
     * Limit for data size per page. [1, 1000]. Default: 500
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;

    /**
     * Cursor. Use the nextPageCursor token from the response to retrieve the next page of the result set
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
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IInstrumentInfoRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IInstrumentInfoRequestInterface::setCategory(string $symbol): self</td>
    <td><b>NO</b></td>
    <td><b>Please, don't use that parameter</b></td>
  </tr>
  <tr>
    <td>IInstrumentInfoRequestInterface::setLimit(string $symbol): self</td>
    <td><b>NO</b></td>
    <td>Limit for data size per page. [1, 1000]. Default: 500</td>
  </tr>
  <tr>
    <td>IInstrumentInfoRequestInterface::setCursor(string $symbol): self</td>
    <td><b>NO</b></td>
    <td>Cursor. Use the nextPageCursor token from the response to retrieve the next page of the result set</td>
  </tr>
</table>

<br />

<h3 align="left" width="100%"><b>RESPONSE STRUCTURE</b></h3>

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
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseInterface::getInstrumentInfoList()</td>
    <td>IInstrumentInfoResponseItemInterface</td>
    <td>Instrument Info object</td>
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
     * Symbol name
     * @return string|null
     */
    public function getSymbol(): ?string;

    /**
     * Contract type. `LinearPerpetual`, `InversePerpetual`, `InverseFutures`
     * @return string|null
     */
    public function getContractType(): ?string;

    /**
     * Symbol status
     * @return string|null
     */
    public function getStatus(): ?string;

    /**
     * Base coin. e.g BTCUSDT, BTC is base coin
     * @return string|null
     */
    public function getBaseCoin(): ?string;

    /**
     * Quote coin. e.g BTCPERP, USDC is quote coin
     * @return string|null
     */
    public function getQuoteCoin(): ?string;

    /**
     * Settle coin. e.g BTCUSD, BTC is settle coin
     * @return string|null
     */
    public function getSettleCoin(): ?string;

    /**
     * The launch timestamp (ms)
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
     * Price scale
     * @return float
     */
    public function getPriceScale(): float;

    /**
     * Support unified margin trade or not
     * @return bool
     */
    public function getUnifiedMarginTrade(): bool;

    /**
     * Funding interval (minute)
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
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getSymbol()</td>
    <td>string</td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getContractType()</td>
    <td>string</td>
    <td>Contract type. <b>Note: currently only Linear is supported</b></td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getBaseCoin()</td>
    <td>string</td>
    <td>Base token. For example: BTC</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getQuoteCoin()</td>
    <td>string</td>
    <td>Relative token. For example: USDT</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getSettleCoin()</td>
    <td>string</td>
    <td>Settlement token. For example: USDT</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getFundingInterval()</td>
    <td>int</td>
    <td>Interval for debiting the funding rate in milliseconds</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getUnifiedMarginTrade()</td>
    <td>bool</td>
    <td>Support for a unified margin trading account</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getPriceScale()</td>
    <td>float</td>
    <td>Price scale</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getLaunchTime()</td>
    <td>DateTime</td>
    <td>
      Start time of trading on the instrument
    </td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponseItemInterface::getStatus()</td>
    <td>string</td>
    <td>
      Instrument trading status
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

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\ILotSizeFilterItemInterface::class
    
interface ILotSizeFilterItem
{
    /**
     * Max. trade quantity per order 
     * @return float
     */
    public function getMaxOrderQty(): float;
    
    /**
     * Min. trade quantity per order
     * @return float
    */
    public function getMinOrderQty(): float;
    
    /**
     * Min. order quantity increment 
     * @return float
    */
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
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\LotSizeFilterResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ILotSizeFilterItemInterface::getMaxOrderQty()</td>
    <td>float</td>
    <td>Maximum order size</td>
  </tr>
  <tr>
    <td>ILotSizeFilterItemInterface::getMinOrderQty()</td>
    <td>float</td>
    <td>Minimum order size</td>
  </tr>
  <tr>
    <td>ILotSizeFilterItemInterface::getQtyStep()</td>
    <td>float</td>
    <td>Step to change order size</td>
  </tr>
</table>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\ILeverageFilterItemInterface::class
    
interface ILeverageFilterItem
{
    /**
     * Minimal leverage 
     * @return int
    */
    public function getMinLeverage(): int;
    
    /**
     * Maximal leverage
     * @return float
    */
    public function getMaxLeverage(): float;
    
    /**
     * Step of leverage 
     * @return float
    */
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
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ILeverageFilterItemInterface::getMinLeverage()</td>
    <td>int</td>
    <td>Minimum leverage</td>
  </tr>
  <tr>
    <td>ILeverageFilterItemInterface::getMaxLeverage()</td>
    <td>float</td>
    <td>Maximum leverage</td>
  </tr>
  <tr>
    <td>ILeverageFilterItemInterface::getLeverageStep()</td>
    <td>float</td>
    <td>Leverage step</td>
  </tr>
</table>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IPriceFilterItemInterface::class
    
interface IPriceFilterItem
{
    /**
     * Minimal order price
     * @return float
    */
    public function getMinPrice(): float;
    
    /**
     * Maximum order price
     * @return float
    */
    public function getMaxPrice(): float;
    
    /**
     * Tick size
     * @return float
    */
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
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\PriceFilterResponseItem::class</b>
    </td>
    </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IPriceFilterItemInterface::getMinPrice()</td>
    <td>int</td>
    <td>Minimum price</td>
  </tr>
  <tr>
    <td>IPriceFilterItemInterface::getMaxPrice()</td>
    <td>float</td>
    <td>Maximum price</td>
  </tr>
  <tr>
    <td>IPriceFilterItemInterface::getTickSize()</td>
    <td>float</td>
    <td>Tick size</td>
  </tr>
</table>
