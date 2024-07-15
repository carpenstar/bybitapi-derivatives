# Contract - Account - Get Trading Fee Rate
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/fee-rate)</b>
<p>Эндпоинт возвращает данные по ставке торговой комиссии для ВСЕХ символов</p>

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\GetTradingFeeRate::class
```

<br />

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\GetTradingFeeRate;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Request\GetTradingFeeRateRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response\GetTradingFeeRateResponse;

$bybit = (new BybitAPI())
    ->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

$feeRateData = $bybit->privateEndpoint(GetTradingFeeRate::class, (new GetTradingFeeRateRequest()))->execute();

echo "Return code: {$feeRateData->getReturnCode()} \n";
echo "Return message: {$feeRateData->getReturnMessage()} \n";

/** @var GetTradingFeeRateResponseItem $feeRate */
foreach (array_slice($feeRateData->getResult()->getFeeRates(), 0, 3) as $feeRate) {
    echo "---\n";
    echo "Symbol: {$feeRate->getSymbol()} \n";
    echo "Taker Fee Rate: {$feeRate->getTakerFeeRate()} \n";
    echo "Maker Fee Rate: {$feeRate->getMakerFeeRate()} \n";
}

/**
* Return code: 0
* Return message: OK 
* ---
* Symbol: ORCAUSDT 
* Taker Fee Rate: 0.00055 
* Maker Fee Rate: 0.0002 
* ---
* Symbol: BBUSDT 
* Taker Fee Rate: 0.00055 
* Maker Fee Rate: 0.0002 
* ---
* Symbol: INJUSDT 
* Taker Fee Rate: 0.00055 
* Maker Fee Rate: 0.0002
**/
```


<br />

<h3 align="left" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateRequestInterface;

interface IGetTradingFeeRateRequestInterface
{
    public function setSymbol(string $symbol): self; // Торговая пара
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>ИНТЕРФЕЙС</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Request\GetTradingFeeRateRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IGetTradingFeeRateRequestInterface::setSymbol(string $symbol): self</td>
    <td>НЕТ</td>
    <td>Торговая пара</td>
  </tr>
</table>


<br />

<h3 align="left" width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces;

interface IGetTradingFeeRateResponseInterface
{
    /**
     * @return IGetTradingFeeRateResponseItemInterface[]
     */
    public function getFeeRates(): array;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>ИНТЕРФЕЙС</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response\GetTradingFeeRateResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">МЕТОД</th>
    <th style="width: 20%; text-align: center">ТИП</th>
    <th style="width: 60%; text-align: center">ОПИСАНИЕ</th>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseInterface::getFeeRates()</td>
    <td>IGetTradingFeeRateResponseItemInterface[]</td>
    <td>
      Список торговых коммиссий
    </td>
  </tr>
</table>

<br />

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseInterface;

interface IGetTradingFeeRateResponseItemInterface
{
    public function getSymbol(): string; // Торговая пара
    public function getTakerFeeRate(): float; // Комиссия тэйкера
    public function getMakerFeeRate(): float; // Комиссия мэйкера
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>ИНТЕРФЕЙС</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseItemInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response\GetTradingFeeRateResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">МЕТОД</th>
    <th style="width: 20%; text-align: center">ТИП</th>
    <th style="width: 60%; text-align: center">ОПИСАНИЕ</th>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseItemInterface::getSymbol()</td>
    <td>string</td>
    <td>
      Торговая пара
    </td>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseItemInterface::getTakerFeeRate()</td>
    <td>float</td>
    <td>
      Комиссия тэйкера
    </td>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseItemInterface::getMakerFeeRate()</td>
    <td>float</td>
    <td>
      Комиссия мэйкера
    </td>
  </tr>
</table>
