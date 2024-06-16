# Contract - Account - Wallet Balance
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/wallet)</b>
<p>Endpoint returns the derivatives wallet balance, information about assets in each currency, and information about the risk level of the account. <br />
By default, currency information with assets or liabilities equal to 0 is not returned.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\WalletBalance::class 
```

<br />

<h3 align="left" width="100%"><b>EXAMPLE</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseItemInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Request\WalletBalanceRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\WalletBalance;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com','apiKey', 'apiSecret');

$response = $bybit->privateEndpoint(WalletBalance::class, (new WalletBalanceRequest()))->execute();

echo "Return code: {$response->getReturnCode()} \n";
echo "Return message: {$response->getReturnMessage()} \n";

$walletBalances = array_slice($response->getResult()->getBalances(), 0, 3);

/** @var IWalletBalanceResponseItemInterface $balance */
foreach ($walletBalances as $balance) {
    echo "----- \n";
    echo "Coin: {$balance->getCoin()} \n";
    echo "Equity: {$balance->getEquity()} \n";
    echo "Wallet Balance: {$balance->getWalletBalance()} \n";
    echo "Position Margin: {$balance->getPositionMargin()} \n";
    echo "Available Balance: {$balance->getAvailableBalance()} \n";
    echo "Order Margin: {$balance->getOrderMargin()} \n";
    echo "Occ Closing Fee: {$balance->getOccClosingFee()} \n";
    echo "Occ Funding Fee: {$balance->getOccFundingFee()} \n";
    echo "Unrealised PnL: {$balance->getUnrealisedPnl()} \n";
    echo "Cumulative Realised PnL: {$balance->getCumRealisedPnl()} \n";
    echo "Given Cash: {$balance->getGivenCash()} \n";
    echo "Service Cash: {$balance->getServiceCash()} \n";
    echo "Account IM: {$balance->getAccountIM()} \n";
    echo "Account MM: {$balance->getAccountMM()} \n";
}

/**
* Return code: 0
* Return message: OK 
* ----- 
* Coin: BTC 
* Equity: 0.2 
* Wallet Balance: 0.2 
* Position Margin: 0 
* Available Balance: 0.2 
* Order Margin: 0 
* Occ Closing Fee: 0 
* Occ Funding Fee: 0 
* Unrealised PnL: 0 
* Cumulative Realised PnL: 0 
* Given Cash: 0 
* Service Cash: 0 
* Account IM: 0
* Account MM: 0  
* ----- 
* Coin: ETH 
* Equity: 0 
* Wallet Balance: 0 
* Position Margin: 0 
* Available Balance: 0 
* Order Margin: 0 
* Occ Closing Fee: 0 
* Occ Funding Fee: 0 
* Unrealised PnL: 0 
* Cumulative Realised PnL: 0 
* Given Cash: 0 
* Service Cash: 0 
* Account IM: 0 
* Account MM: 0 
* ----- 
* Coin: EOS 
* Equity: 0 
* Wallet Balance: 0 
* Position Margin: 0 
* Available Balance: 0 
* Order Margin: 0 
* Occ Closing Fee: 0 
* Occ Funding Fee: 0 
* Unrealised PnL: 0 
* Cumulative Realised PnL: 0 
* Given Cash: 0 
* Service Cash: 0 
* Account IM: 0 
* Account MM: 0 
*/

```

<br />

<h3 align="left" width="100%"><b>RESPONSE STRUCTURE</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces;


use Carpenstar\ByBitAPI\Spot\Account\WalletBalance\Interfaces\IWalletBalanceResponseItemInterfaces;

interface IWalletBalanceResponseInterface
{
    /**
     * @return IWalletBalanceResponseItemInterfaces[]
     */
    public function getBalances(): array;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Response\WalletBalanceResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getBalances()</td>
    <td>IWalletBalanceResponseItemInterfaces[]</td>
    <td>List of balances</td>
  </tr>
</table>

<br />

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces;

interface IWalletBalanceResponseItemInterface
{
    /**
     * Coin
     * @return string
     */
    public function getCoin(): string;

    /**
     * Total equity
     * @return float
     */
    public function getEquity(): float;

    /**
     * Wallet balance
     * @return float
     */
    public function getWalletBalance(): float;

    /**
     * Position margin
     * @return float
     */
    public function getPositionMargin(): float;

    /**
     * Available balance
     * @return float
     */
    public function getAvailableBalance(): float;

    /**
     * Pre-occupied order margin
     * @return float
     */
    public function getOrderMargin(): float;

    /**
     * Position closing fee occupied. formula: opening fee + expected maximum closing fee
     * @return float
     */
    public function getOccClosingFee(): float;

    /**
     * Pre-occupied funding fee
     * @return float
     */
    public function getOccFundingFee(): float;

    /**
     * Unrealised pnl
     * @return float
     */
    public function getUnrealisedPnl(): float;

    /**
     * Cumulative realised pnl (all-time)
     * @return float
     */
    public function getCumRealisedPnl(): float;

    /**
     * Trial fund
     * @return float
     */
    public function getGivenCash(): float;

    /**
     * Coupon
     * @return float
     */
    public function getServiceCash(): float;

    /**
     * USDC account initial margin
     * @return string
     */
    public function getAccountIM(): string;

    /**
     * USDC account maintenance margin
     * @return string
     */
    public function getAccountMM(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseItemInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Response\WalletBalanceResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getCoin()</td>
    <td>string</td>
    <td>Coin</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getEquity()</td>
    <td>float</td>
    <td>Total capital</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getWalletBalance()</td>
    <td>float</td>
    <td>Wallet balance</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getPositionMargin()</td>
    <td>float</td>
    <td>Position Margin</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getAvailableBalance()</td>
    <td>float</td>
    <td>Available balance</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getOrderMargin()</td>
    <td>float</td>
    <td>Pre-occupied margin</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getOccClosingFee()</td>
    <td>float</td>
    <td>
      The fee for closing a position has been charged. <br />
      Formula: opening fee + expected maximum closing fee
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getOccFundingFee()</td>
    <td>float</td>
    <td>
      Pre-financing fee
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getUnrealisedPnl()</td>
    <td>float</td>
    <td>
      Unrealized PnL
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getCumRealisedPnl()</td>
    <td>float</td>
    <td>
      Cumulative realized PnL (all time)
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getGivenCash()</td>
    <td>float</td>
    <td>
      -
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getServiceCash()</td>
    <td>float</td>
    <td>
      -
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getAccountIM()</td>
    <td>string</td>
    <td>
      USDC Account Initial Margin
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getAccountMM()</td>
    <td>string</td>
    <td>
      USDC Account Maintenance Margin
    </td>
  </tr>
</table>