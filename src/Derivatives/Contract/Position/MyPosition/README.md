# Contract - Position - My Position
<b>[Official documentation page](https://bybit-exchange.github.io/docs/derivatives/contract/position-list)</b>
<p>Getting a list of the user's open positions</p>

<h3 align="left" width="100%"><b>EXAMPLE</b></h3>

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

<h3 align="left" width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Settle coin. Either symbol or settleCoin is required. symbol has a higher priority
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
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IMyPositionRequestInterface::setSymbol(string $symbol)</td>
     <td>NO</td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IMyPositionRequestInterface::setSettleCoin(string $symbol)</td>
     <td>NO</td>
     <td>Calculation coin</td>
   </tr>
</table>

<br />

<h3 align="left" width="100%"><b>RESPONSE STRUCTURE</b></h3>

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
     <th style="width: 20%; text-align: center">Method</th>
     <th style="width: 20%; text-align: center">Type</th>
     <th style="width: 60%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getCategory()</td>
     <td>string</td>
     <td>Product type</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getNextPageCursor()</td>
     <td>string</td>
     <td>Cursor. Used to pagination</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionList()</td>
     <td>IMyPositionResponseItemInterface[]</td>
     <td>Massive of positions</td>
   </tr>
</table>

<br />

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionResponseItemInterface
{
    /**
     * Symbol name
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Side. Buy, Sell. Return None when zero position of one-way mode
     * @return string
     */
    public function getSide(): string;

    /**
     * Position size
     * @return float
     */
    public function getSize(): float;

    /**
     * Entry price
     * @return float
     */
    public function getEntryPrice(): float;

    /**
     * leverage
     * @return float
     */
    public function getLeverage(): float;

    /**
     * Position value
     * @return float
     */
    public function getPositionValue(): float;

    /**
     * Position index
     * @return int
     */
    public function getPositionIdx(): int;

    /**
     * Risk limit id
     * @return int
     */
    public function getRiskId(): int;

    /**
     * Position limit value corresponding to the risk id
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
     * Position margin
     * @return float
     */
    public function getPositionBalance(): float;

    /**
     * Estimated liquidation price. It returns value only when minPrice < liqPrice < maxPrice
     * @return float
     */
    public function getLiqPrice(): float;

    /**
     * Estimated bankruptcy price
     * @return float
     */
    public function getBustPrice(): float;

    /**
     * Depreciated, meaningless here, always "Full"
     * @return string
     */
    public function getTpSlMode(): string;

    /**
     * Take profit price
     * @return float
     */
    public function getTakeProfit(): float;

    /**
     * Stop loss price
     * @return float
     */
    public function getStopLoss(): float;

    /**
     * Position created datetime
     * @return \DateTime
     */
    public function getCreatedTime(): \DateTime;

    /**
     * Position data updated datetime
     * @return \DateTime
     */
    public function getUpdatedTime(): \DateTime;

    /**
     * Trailing stop
     * @return string
     */
    public function getTrailingStop(): string;

    /**
     * Activate price of trailing stop
     * @return float
     */
    public function getActivePrice(): float;

    /**
     * Real-time mark price
     * @return float
     */
    public function getMarkPrice(): float;

    /**
     * unrealised PNL
     * @return float
     */
    public function getUnrealisedPnl(): float;

    /**
     * cumulative realised PNL
     * @return float
     */
    public function getCumRealisedPnl(): float;

    /**
     * Position maintenance margin
     * @return float
     */
    public function getPositionMM(): float;

    /**
     * Position initial margin
     * @return float
     */
    public function getPositionIM(): float;

    /**
     * Position status
     * @return string
     */
    public function getPositionStatus(): string;

    /**
     * Settlement price
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
     <th style="width: 20%; text-align: center">Method</th>
     <th style="width: 20%; text-align: center">Type</th>
     <th style="width: 60%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getSymbol()</td>
     <td>string</td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getSide()</td>
     <td>string</td>
     <td> Side. Buy, Sell. Return None when zero position of one-way mode </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getSize()</td>
     <td>float</td>
     <td> Position size </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getEntryPrice()</td>
     <td>float</td>
     <td> Entry price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getLeverage()</td>
     <td>float</td>
     <td> leverage </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getPositionValue()</td>
     <td>float</td>
     <td> Position value </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getPositionIdx()</td>
     <td>int</td>
     <td> Position index </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getRiskId()</td>
     <td>int</td>
     <td> Risk limit id </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getRiskLimitValue()</td>
     <td>string</td>
     <td> Position limit value corresponding to the risk id </td>
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
     <td> Position margin </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getLiqPrice()</td>
     <td>float</td>
     <td> Estimated liquidation price. It returns value only when minPrice < liqPrice < maxPrice </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getBustPrice()</td>
     <td>float</td>
     <td> Estimated bankruptcy price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getTpSlMode()</td>
     <td>string</td>
     <td> Depreciated, meaningless here, always "Full" </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getTakeProfit()</td>
     <td>float</td>
     <td> Take profit price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getStopLoss()</td>
     <td>float</td>
     <td> Stop loss price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getCreatedTime()</td>
     <td>DateTime</td>
     <td> Position created timestamp </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getUpdatedTime()</td>
     <td>DateTime</td>
     <td> Position data updated timestamp </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getTrailingStop()</td>
     <td>string</td>
     <td> Trailing stop </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getActivePrice()</td>
     <td>float</td>
     <td> Activate price of trailing stop </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getMarkPrice()</td>
     <td>float</td>
     <td> Real-time mark price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getUnrealisedPnl()</td>
     <td>float</td>
     <td> unrealised PNL </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getCumRealisedPnl()</td>
     <td>float</td>
     <td> cumulative realised PNL </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getPositionMM()</td>
     <td>float</td>
     <td> Position maintenance margin </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getPositionIM()</td>
     <td>float</td>
     <td> Position initial margin </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getPositionStatus()</td>
     <td>string</td>
     <td> Position status </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getSessionAvgPrice()</td>
     <td>float</td>
     <td> Settlement price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getOccClosingFee()</td>
     <td>float</td>
     <td> Pre-occupancy closing fee </td>
   </tr>
   <tr>
     <td>IMyPositionResponseItemInterface::getAdlRankIndicator()</td>
     <td>string</td>
     <td> Auto-deleverage rank indicator </td>
   </tr>
</table>
