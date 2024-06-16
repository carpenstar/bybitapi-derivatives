# Contract - Position - Get Closed PnL
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/closepnl)</b>

<p>Request information about closed positions with data on the user's profits and losses.</p>

> The result is sorted by createdAt in descending order.

<br />

<h3 align="left" width="100%"><b>EXAMPLE</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\GetClosedPnL;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Request\GetClosedPnLRequest;


$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

$pnlEndpointResponse = $bybit->privateEndpoint(GetClosedPnL::class, (new GetClosedPnLRequest())
    ->setSymbol('BTCUSDT')
    ->setLimit(2)
)->execute();

echo "Return code: {$pnlEndpointResponse->getReturnCode()} \n";
echo "Return message: {$pnlEndpointResponse->getReturnMessage()} \n";

/** @var IGetClosedPnLResponseInterface $pnlInfoResponse */
$pnlInfoResponse = $pnlEndpointResponse->getResult();
echo "Next page cursor: {$pnlInfoResponse->getNextPageCursor()}\n";
foreach ($pnlInfoResponse->getClosedPnlList() as $pnl) {
    echo "----\n";
    echo "Symbol: {$pnl->getSymbol()}\n";
    echo "Order ID: {$pnl->getOrderId()}\n";
    echo "Side: {$pnl->getSide()}\n";
    echo "Quantity: {$pnl->getQty()}\n";
    echo "Leverage: {$pnl->getLeverage()}\n";
    echo "Order Price: {$pnl->getOrderPrice()}\n";
    echo "Order Type: {$pnl->getOrderType()}\n";
    echo "Executed Type: {$pnl->getExecType()}\n";
    echo "Closed Size: {$pnl->getClosedSize()}\n";
    echo "Cumulative Entry Value: {$pnl->getCumEntryValue()}\n";
    echo "Average Entry Price: {$pnl->getAvgEntryPrice()}\n";
    echo "Cumulative Exit Value {$pnl->getCumExitValue()}\n";
    echo "Average Exit Price: {$pnl->getAvgExitPrice()}\n";
    echo "Closed PnL: {$pnl->getClosedPnl()}\n";
    echo "Filled Count: {$pnl->getFillCount()}\n";
    echo "Created At: {$pnl->getCreatedAt()->format('Y-m-d H:i:s')}\n";
    echo "Created Time: {$pnl->getCreatedTime()->format('Y-m-d H:i:s')}\n";
    echo "Updated Time: {$pnl->getUpdatedTime()->format('Y-m-d H:i:s')}\n";
}

/**
 * Return code: 0
 * Return message: OK
 * Next page cursor: page_token%3D1719089535779609000%26
 * ----
 * Symbol: BTCUSDT
 * Order ID: 6e60910f-2c60-48c6-916e-c9c6946b3bc9
 * Side: Sell
 * Quantity: 0.015
 * Leverage: 10
 * Order Price: 61022
 * Order Type: Market
 * Executed Type: Trade
 * Closed Size: 0.015
 * Cumulative Entry Value: 963.504
 * Average Entry Price: 64233.6
 * Cumulative Exit Value 963.3825
 * Average Exit Price: 64225.5
 * Closed PnL: -1.18128758
 * Filled Count: 1
 * Created At: 2024-06-22 20:52:39
 * Created Time: 2024-06-22 20:52:39
 * Updated Time: 2024-06-22 20:52:39
 * ----
 * Symbol: BTCUSDT
 * Order ID: a9d52c72-0aaf-4fed-88b8-c4c714c05af5
 * Side: Sell
 * Quantity: 0.021
 * Leverage: 10
 * Order Price: 61022
 * Order Type: Market
 * Executed Type: Trade
 * Closed Size: 0.021
 * Cumulative Entry Value: 1363.4068
 * Average Entry Price: 64924.13
 * Cumulative Exit Value 1348.7355
 * Average Exit Price: 64225.5
 * Closed PnL: -16.87169641
 * Filled Count: 1
 * Created At: 2024-06-22 20:52:15
 * Created Time: 2024-06-22 20:52:15
 * Updated Time: 2024-06-22 20:52:15
 */     
````

<br />

<h3 align="left" width="100%"><b>REQUEST PARAMETERS</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLRequestInterface
{
    /**
     * Trading pair
     *
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * The date/time string from which data should be obtained.
     * startTime and endTime are not passed, return 7 days by default
     * Only startTime is passed, return range between startTime and startTime+7 days
     * Only endTime is passed, return range between endTime-7 days and endTime
     * If both are passed,the rule is endTime - startTime <= 7 days
     *
     * @param string $startTime
     * @return self
     */
    public function setStartTime(string $startTime): self;
    public function getStartTime(): \DateTime;

    /**
     * The date/time string up to which the data should be retrieved.
     *
     * @param string $endTime
     * @return self
     */
    public function setEndTime(string $endTime): self;
    public function getEndTime(): \DateTime;

    /**
     * Limit for data size per page. [1, 200]. Default: 50
     *
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;

    /**
     * Cursor. Use the nextPageCursor token from the response to retrieve the next page of the result set
     *
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
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Request\GetClosedPnLRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setStartTime(string $startTime)</td>
     <td>NO</td>
     <td>Lower limit of the date from which to take records, eq: 2024-06-20 09:00:00</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setEndTime(string $endTime)</td>
     <td>NO</td>
     <td>Upper limit of the date from which to take records, eq: 2024-06-20 10:00:00</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setLimit(int $limit)</td>
     <td>NO</td>
     <td>Record limit per request</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setCursor(string $cursor)</td>
     <td>NO</td>
     <td>Next page cursor</td>
   </tr>
</table>

<br />

<h3 align="left" width="100%"><b>RESPONSE STRUCTURE</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLResponseInterface
{
    /**
     * Cursor. Used to pagination
     * @return string
     */
    public function getNextPageCursor(): string;

    /**
     * @return IGetClosedPnLResponseItemInterface[]
     */
    public function getClosedPnlList(): array;
}
````

<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Response\GetClosedPnLResponse::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Method</th>
     <th style="width: 20%; text-align: center">Type</th>
     <th style="width: 60%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getNextPageCursor()</td>
     <td>string</td>
     <td>Cursor. Used to pagination</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getClosedPnlList()</td>
     <td>IGetClosedPnLResponseItemInterface[]</td>
     <td>List of closed PnL items data</td>
   </tr>
</table>

<br />

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLResponseItemInterface
{
    /**
     * Symbol name
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Order Id
     * @return string
     */
    public function getOrderId(): string;

    /**
     * Buy, Side
     * @return string
     */
    public function getSide(): string;

    /**
     * Order qty
     * @return float
     */
    public function getQty(): float;

    /**
     * leverage
     * @return float
     */
    public function getLeverage(): float;

    /**
     * Order price
     * @return float
     */
    public function getOrderPrice(): float;

    /**
     * Order type. Market,Limit
     * @return string
     */
    public function getOrderType(): string;

    /**
     * Exec type
     * @return string
     */
    public function getExecType(): string;

    /**
     * Closed size
     * @return float
     */
    public function getClosedSize(): float;

    /**
     * Cumulated entry position value
     * @return float
     */
    public function getCumEntryValue(): float;

    /**
     * Average entry price
     * @return float
     */
    public function getAvgEntryPrice(): float;

    /**
     * Cumulated exit position value
     * @return float
     */
    public function getCumExitValue(): float;

    /**
     * Average exit price
     * @return float
     */
    public function getAvgExitPrice(): float;

    /**
     * Closed PnL
     * @return float
     */
    public function getClosedPnl(): float;

    /**
     * The number of fills in a single order
     * @return int
     */
    public function getFillCount(): int;

    /**
     * The created datetime, same as createdTime
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime;

    /**
     * The created datetime, same as createdAt
     * @return \DateTime
     */
    public function getCreatedTime(): \DateTime;

    /**
     * The updated datetime
     * @return \DateTime
     */
    public function getUpdatedTime(): \DateTime;
}
```
<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseItemInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Response\GetClosedPnLResponseItem::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Method</th>
     <th style="width: 20%; text-align: center">Type</th>
     <th style="width: 60%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseItemInterface::getSymbol()</td>
     <td>string</td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseItemInterface::getOrderId()</td>
     <td>string</td>
     <td>order ID</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseItemInterface::getSide()</td>
     <td>string</td>
     <td>Order direction</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseItemInterface::getQty()</td>
     <td>float</td>
     <td>Order volume</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseItemInterface::getLeverage()</td>
     <td>float</td>
     <td>Leverage</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseItemInterface::getOrderPrice()</td>
     <td>float</td>
     <td>Order price</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseItemInterface::getExecType()</td>
     <td>string</td>
     <td>Execution type </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseItemInterface::getClosedSize()</td>
     <td>float</td>
     <td> Closed size </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseItemInterface::getCumEntryValue()</td>
     <td>float</td>
     <td> Cumulated entry position value </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseItemInterface::getAvgEntryPrice()</td>
     <td>float</td>
     <td> Average entry price </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseItemInterface::getCumExitValue()</td>
     <td>float</td>
     <td> Cumulated exit position value </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseItemInterface::getAvgExitPrice()</td>
     <td>float</td>
     <td> Average exit price </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseItemInterface::getClosedPnl()</td>
     <td>float</td>
     <td> Closed PnL </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseItemInterface::getFillCount()</td>
     <td>float</td>
     <td> The number of fills in a single order </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseItemInterface::getCreatedAt()</td>
     <td>DateTime</td>
     <td> The created time </td>
   </tr>
</table>
