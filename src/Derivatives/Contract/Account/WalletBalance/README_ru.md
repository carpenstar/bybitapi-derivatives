# Contract - Account - Wallet Balance
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/wallet)</b>
<p>Эндпоинт возвращает баланс деривативного кошелька, информацию об активах в каждой валюте и информацию о уровне риска счета. <br />
По умолчанию информация о валюте с активами или обязательствами, равными 0, не возвращается.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\WalletBalance::class 
```

<br />

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

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
* Account IM:  
* Account MM:  
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
* Account IM:  
* Account MM:  
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
* Account IM:  
* Account MM:
*/
```

<br />

<h3 align="left" width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

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
        <sup><b>ИНТЕРФЕЙС</b></sup> <br />
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
    <th style="width: 20%; text-align: center">МЕТОД</th>
    <th style="width: 20%; text-align: center">ТИП</th>
    <th style="width: 60%; text-align: center">ОПИСАНИЕ</th>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getBalances()</td>
    <td>IWalletBalanceResponseItemInterfaces[]</td>
    <td>Массив элементов баланса</td>
  </tr>
</table>

<br />

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseInterface;
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces;

interface IWalletBalanceResponseItemInterface
{
    /**
     * Токен
     * @return string
     */
    public function getCoin(): string;

    /**
     * Общий капитал
     * @return float
     */
    public function getEquity(): float;

    /**
     * Баланс кошелька
     * @return float
     */
    public function getWalletBalance(): float;

    /**
     * Маржа позиции
     * @return float
     */
    public function getPositionMargin(): float;

    /**
     * Доступный баланс
     * @return float
     */
    public function getAvailableBalance(): float;

    /**
     * Предварительно занятая маржа
     * @return float
     */
    public function getOrderMargin(): float;

    /**
     * Комиссия за закрытие позиции.
     * @return float
     */
    public function getOccClosingFee(): float;

    /**
     * Комиссия за предварительное финансирование
     * @return float
     */
    public function getOccFundingFee(): float;

    /**
     * Нереализованный прибыль и убыток
     * @return float
     */
    public function getUnrealisedPnl(): float;

    /**
     * Совокупный реализованный PnL (за все время)
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
     * USDC начальная маржа
     * @return string
     */
    public function getAccountIM(): float;

    /**
     * USDC поддерживающая маржа
     * @return string
     */
    public function getAccountMM(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>ИНТЕРФЕЙС</b></sup> <br />
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
    <th style="width: 20%; text-align: center">МЕТОД</th>
    <th style="width: 20%; text-align: center">ТИП</th>
    <th style="width: 60%; text-align: center">ОПИСАНИЕ</th>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getCoin()</td>
    <td>string</td>
    <td>Токен</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getEquity()</td>
    <td>float</td>
    <td> Общий капитал</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getWalletBalance()</td>
    <td>float</td>
    <td>Баланс кошелька</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getPositionMargin()</td>
    <td>float</td>
    <td>Маржа позиции</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getAvailableBalance()</td>
    <td>float</td>
    <td>Доступный баланс</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getOrderMargin()</td>
    <td>float</td>
    <td>Предварительно занятая маржа</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getOccClosingFee()</td>
    <td>float</td>
    <td>
        Комиссия за закрытие позиции. <br />
        Формула: комиссия за открытие + ожидаемая максимальная комиссия за закрытие.
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getOccFundingFee()</td>
    <td>float</td>
    <td>
      Комиссия за предварительное финансирование
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getUnrealisedPnl()</td>
    <td>float</td>
    <td>
      Нереализованный прибыль и убыток
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getCumRealisedPnl()</td>
    <td>float</td>
    <td>
      Совокупный реализованный PnL (за все время)
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
    <td>float</td>
    <td>
      USDC начальная маржа
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseItemInterface::getAccountMM()</td>
    <td>float</td>
    <td>
      USDC поддерживающая маржа
    </td>
  </tr>
</table>

---