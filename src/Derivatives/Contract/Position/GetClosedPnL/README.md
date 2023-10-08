### Contract - Position - Get Closed PnL
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/closepnl)</b>

<p>Request information about closed positions with data on the user's profits and losses.</p>

> The result is sorted by createdAt in descending order.

<p><b>Request parameters:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setStartTime(int $startTime): self;
    public function setEndTime(int $endTime): self;
    public function setLimit(int $limit): self;
    public function setCursor(string $cursor): self;
    
    // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLRequestInterface</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>:: setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>::setStartTime(int $startTime)</td>
     <td>NO</td>
     <td>Lower limit of the date from which to take records</td>
   </tr>
   <tr>
     <td>::setEndTime(int $endTime)</td>
     <td>NO</td>
     <td>Upper limit of the date from which to take records</td>
   </tr>
   <tr>
     <td>::setLimit(int $limit)</td>
     <td>NO</td>
     <td>Record limit per request</td>
   </tr>
   <tr>
     <td>::setCursor(string $cursor)</td>
     <td>NO</td>
     <td>Next page cursor</td>
   </tr>
</table>

<p><b>Response structure:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLResponseInterface
{
    public function getSymbol(): string;
    public function getOrderId(): string;
    public function getSide(): string;
    public function getQty(): float;
    public function getLeverage(): float;
    public function getOrderPrice(): float;
    public function getOrderType(): string;
    public function getExecType(): string;
    public function getClosedSize(): float;
    public function getCumEntryValue(): float;
    public function getAvgEntryPrice(): float;
    public function getCumExitValue(): float;
    public function getAvgExitPrice(): float;
    public function getClosedPnl(): float;
    public function getFillCount(): int;
    public function getCreatedAt(): \DateTime;
}
```
<table style="width: 100%">
   <tr>
     <td colspan="3">
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseInterface</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Method</th>
     <th style="width: 20%; text-align: center">Type</th>
     <th style="width: 60%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>::getSymbol()</td>
     <td>string</td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>::getOrderId()</td>
     <td>string</td>
     <td>order ID</td>
   </tr>
   <tr>
     <td>::getSide()</td>
     <td>string</td>
     <td>Order direction</td>
   </tr>
   <tr>
     <td>::getQty()</td>
     <td>float</td>
     <td>Order volume</td>
   </tr>
   <tr>
     <td>::getLeverage()</td>
     <td>float</td>
     <td>Leverage</td>
   </tr>
   <tr>
     <td>::getOrderPrice()</td>
     <td>float</td>
     <td>Order price</td>
   </tr>
   <tr>
     <td>::getExecType()</td>
     <td>string</td>
     <td> Execution type </td>
   </tr>
   <tr>
     <td>::getClosedSize()</td>
     <td>float</td>
     <td> Closed size </td>
   </tr>
   <tr>
     <td>::getCumEntryValue()</td>
     <td>float</td>
     <td> Cumulated entry position value </td>
   </tr>
   <tr>
     <td>::getAvgEntryPrice()</td>
     <td>float</td>
     <td> Average entry price </td>
   </tr>
   <tr>
     <td>::getCumExitValue()</td>
     <td>float</td>
     <td> Cumulated exit position value </td>
   </tr>
   <tr>
     <td>::getAvgExitPrice()</td>
     <td>float</td>
     <td> Average exit price </td>
   </tr>
   <tr>
     <td>::getClosedPnl()</td>
     <td>float</td>
     <td> Closed PnL </td>
   </tr>
   <tr>
     <td>::getFillCount()</td>
     <td>float</td>
     <td> The number of fills in a single order </td>
   </tr>
   <tr>
     <td>::getCreatedAt()</td>
     <td>DateTime</td>
     <td> The created time </td>
   </tr>
</table>