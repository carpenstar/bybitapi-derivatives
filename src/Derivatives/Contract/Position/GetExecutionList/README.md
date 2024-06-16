# Contract - Position - Get Execution List
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/execution-list)</b>
<p>List of executed user orders, sorted by execution time in descending order. Supports USDT perpetual currency pairs</p>

> A user can have multiple executions in one order.

<br />

<h3 align="left" width="100%"><b>EXAMPLE</b></h3>

```php

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

/** @var IResponseInterface $execListEndpointResponse */
$execListEndpointResponse = $bybit->privateEndpoint(GetExecutionList::class, (new GetExecutionListRequest())
    ->setSymbol('BTCUSDT')
    ->setLimit(3)
)->execute();

echo "Return Code: {$execListEndpointResponse->getReturnCode()}\n";
echo "Return Message: {$execListEndpointResponse->getReturnMessage()}\n";

/** @var GetExecutionListResponse $execListInfoResponse */
$execListInfoResponse = $execListEndpointResponse->getResult();

echo "Category: {$execListInfoResponse->getCategory()}\n";
echo "Next Page Cursor: {$execListInfoResponse->getNextPageCursor()}\n";
foreach ($execListInfoResponse->getExecutionList() as $exec) {
    echo "-----\n";
    echo "Symbol: {$exec->getSymbol()}\n";
    echo "Side: {$exec->getSide()}\n";
    echo "Order ID: {$exec->getOrderId()}\n";
    echo "Order Link ID: {$exec->getOrderLinkId()}\n";
    echo "Order Price: {$exec->getOrderPrice()}\n";
    echo "Order Quantity: {$exec->getOrderQty()}\n";
    echo "Order Type: {$exec->getOrderType()}\n";
    echo "Stop Order Type: {$exec->getOrderType()}\n";
    echo "Execution ID: {$exec->getExecId()}\n";
    echo "Execution Price: {$exec->getExecPrice()}\n";
    echo "Execution Quantity: {$exec->getExecQty()}\n";
    echo "Execution Fee: {$exec->getExecFee()}\n";
    echo "Execution Type: {$exec->getExecType()}\n";
    echo "Execution Value: {$exec->getExecValue()}\n";
    echo "Fee Rate: {$exec->getFeeRate()}\n";
    echo "Last Liquidity Ind: {$exec->getLastLiquidityInd()}\n";
    echo "Is Maker: {$exec->isMaker()}\n";
    echo "Leaves Quantity: {$exec->getLeavesQty()}\n";
    echo "Closed Size: {$exec->getClosedSize()}\n";
    echo "Mark Price: {$exec->getMarkPrice()}\n";
    echo "Index Price {$exec->getIndexPrice()}\n";
    echo "Underlying Price: {$exec->getUnderlyingPrice()}\n";
    echo "Execution Time: {$exec->getExecTime()->format('Y-m-d H:i:s')}\n";
}

/**
 * Return Code: 0
 * Return Message: OK
 * Category:
 * Next Page Cursor: page_token%3D91113706%26
 * -----
 * Symbol: BTCUSDT
 * Side: Sell
 * Order ID: 6e60910f-2c60-48c6-916e-c9c6946b3bc9
 * Order Link ID:
 * Order Price: 61022
 * Order Quantity: 0.015
 * Order Type: Market
 * Stop Order Type: Market
 * Execution ID: 9cb193fe-4367-5d70-95e6-2831af76586f
 * Execution Price: 64225.5
 * Execution Quantity: 0.015
 * Execution Fee: 0.52986038
 * Execution Type: Trade
 * Execution Value: 963.3825
 * Fee Rate: 0.00055
 * Last Liquidity Ind: RemovedLiquidity
 * Is Maker:
 * Leaves Quantity: 0
 * Closed Size: 0.015
 * Mark Price: 64235.6
 * Index Price 0
 * Underlying Price: 0
 * Execution Time: 2024-06-22 20:52:39
 * -----
 * Symbol: BTCUSDT
 * Side: Buy
 * Order ID: 25d14af5-62ad-472c-a8f5-4573fdb3a3f2
 * Order Link ID:
 * Order Price: 67436.7
 * Order Quantity: 0.015
 * Order Type: Market
 * Stop Order Type: Market
 * Execution ID: 6383ff73-9d54-534c-b8bc-160ba08a8edf
 * Execution Price: 64233.6
 * Execution Quantity: 0.015
 * Execution Fee: 0.5299272
 * Execution Type: Trade
 * Execution Value: 963.504
 * Fee Rate: 0.00055
 * Last Liquidity Ind: RemovedLiquidity
 * Is Maker:
 * Leaves Quantity: 0
 * Closed Size: 0
 * Mark Price: 64235.76
 * Index Price 0
 */
````

<br />

<h3 align="left" width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListRequestInterface
{
    /**
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * @param string $orderId
     * @return self
     */
    public function setOrderId(string $orderId): self;
    public function getOrderId(): string;

    /**
     * The date/time string from which data should be obtained.
     * startTime and endTime are not passed, return 7 days by default
     * Only startTime is passed, return range between startTime and startTime+7 days
     * Only endTime is passed, return range between endTime-7 days and endTime
     * If both are passed,the rule is endTime - startTime <= 7 days
     * @param int $startTime
     * @return self
     */
    public function setStartTime(int $startTime): self;
    public function getStartTime(): \DateTime;

    /**
     * @param int $endTime
     * @return self
     */
    public function setEndTime(int $endTime): self;
    public function getEndTime(): \DateTime;

    /**
     * @param string $execType
     * @return self
     */
    public function setExecType(string $execType): self;
    public function getExecType(): string;

    /**
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;

    /**
     * @param string $cursor
     * @return self
     */
    public function setCursor(string $cursor): self;
    public function getCursor(): string;
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces\IGetExecutionListRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Request\GetExecutionListRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setStartTime(int $startTime)</td>
     <td>NO</td>
     <td>Lower limit of the date from which to take records</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setEndTime(int $endTime)</td>
     <td>NO</td>
     <td>Upper limit of the date from which to take records</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setLimit(int $limit)</td>
     <td>NO</td>
     <td>Record limit per request</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setCursor(string $cursor)</td>
     <td>NO</td>
     <td>Next page cursor</td>
   </tr>
</table>

<br />

<h3 align="left" width="100%"><b>RESPONSE STRUCTURE</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListResponseInterface
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

    /**
     * @return IGetExecutionListResponseItemInterface[]
     */
    public function getExecutionList(): array;
}
````
<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces\IGetExecutionListResponseInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Response\GetExecutionListResponse::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Method</th>
     <th style="width: 20%; text-align: center">Type</th>
     <th style="width: 60%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getSymbol()</td>
     <td>string</td>
     <td>Trading pair</td>
   </tr>
</table>

<br />

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListResponseItemInterface
{
    /**
     * Symbol name
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Buy,Sell
     * @return string
     */
    public function getSide(): string;

    /**
     * Order id
     * @return string
     */
    public function getOrderId(): string;

    /**
     * User customized order id
     * @return string
     */
    public function getOrderLinkId(): string;

    /**
     * Order price
     * @return float
     */
    public function getOrderPrice(): float;

    /**
     * Order quantity
     * @return float
     */
    public function getOrderQty(): float;

    /**
     * Market,Limit
     * @return string
     */
    public function getOrderType(): string;

    /**
     * Stop order type
     * @return string
     */
    public function getStopOrderType(): string;

    /**
     * Trade Id
     * @return string
     */
    public function getExecId(): string;

    /**
     * Execution price
     * @return float
     */
    public function getExecPrice(): float;

    /**
     * Execution quantity
     * @return float
     */
    public function getExecQty(): float;

    /**
     * Execution fee
     * @return float
     */
    public function getExecFee(): float;

    /**
     * Execution type
     * @return string
     */
    public function getExecType(): string;

    /**
     * Execution position value
     * @return float
     */
    public function getExecValue(): float;

    /**
     * Trading fee rate
     * @return float
     */
    public function getFeeRate(): float;

    /**
     * AddedLiquidity, RemovedLiquidity
     * @return string
     */
    public function getLastLiquidityInd(): string;

    /**
     * Is maker
     * @return bool
     */
    public function isMaker(): bool;

    /**
     * Remaining quantity waiting for execution
     * @return float
     */
    public function getLeavesQty(): float;

    /**
     * Close size
     * @return float
     */
    public function getClosedSize(): float;

    /**
     * Block trade id
     * @return string
     */
    public function getBlockTradeId(): string;

    /**
     * Mark price
     * @return float
     */
    public function getMarkPrice(): float;

    /**
     * Index price
     * @return float
     */
    public function getIndexPrice(): float;

    /**
     * Underlying price
     * @return float
     */
    public function getUnderlyingPrice(): float;

    /**
     * Execution datetime
     * @return \DateTime
     */
    public function getExecTime(): \DateTime;
}
```
<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces\IGetExecutionListResponseInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Response\GetExecutionListResponse::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Method</th>
     <th style="width: 20%; text-align: center">Type</th>
     <th style="width: 60%; text-align: center">Description</th>
   </tr>
  <tr>
     <td>IGetExecutionListResponseItemInterface::getSymbol()</td>
     <td>string</td>
     <td>Symbol name</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getSide()</td>
     <td>string</td>
     <td>Buy,Sell</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getOrderId()</td>
     <td>string</td>
     <td>order ID</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getOrderLinkId()</td>
     <td>string</td>
     <td>User customised order id</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getOrderPrice()</td>
     <td>float</td>
     <td>Order price</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getOrderQty()</td>
     <td>float</td>
     <td>Order qty</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getOrderType()</td>
     <td>string</td>
     <td>Market,Limit</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getStopOrderType()</td>
     <td>string</td>
     <td>Stop order type</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getExecId()</td>
     <td>string</td>
     <td>Trade Id</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getExecPrice()</td>
     <td>float</td>
     <td>Execution price</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getExecQty()</td>
     <td>float</td>
     <td>Execution qty</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getExecFee()</td>
     <td>float</td>
     <td>Execution fee</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getExecType()</td>
     <td>string</td>
     <td>Execution type</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getExecValue()</td>
     <td>float</td>
     <td>Execution position value</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getFeeRate()</td>
     <td>float</td>
     <td>Trading fee rate</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getLastLiquidityInd()</td>
     <td>string</td>
     <td>AddedLiquidity, RemovedLiquidity</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::isMaker()</td>
     <td>bool</td>
     <td>Is maker</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getLeavesQty()</td>
     <td>float</td>
     <td>Remaining qty waiting for execution</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getClosedSize()</td>
     <td>float</td>
     <td>Close size</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getBlockTradeId()</td>
     <td>string</td>
     <td>Block trade id</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getMarkPrice()</td>
     <td>float</td>
     <td>Mark Price</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getIndexPrice()</td>
     <td>float</td>
     <td>Index Price</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getUnderlyingPrice()</td>
     <td>float</td>
     <td>Underlying price</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseItemInterface::getExecTime()</td>
     <td>\DateTime</td>
     <td>Execution datetime</td>
   </tr>
</table>

---