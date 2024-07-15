# Market Data - Funding Rate History
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/funding-rate)</b>
<p>История финансирования указанного символа за определенный период</p>

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\FundingRateHistory::class 
```  

<br />

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\FundingRateHistory;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Request\FundingRateHistoryRequest;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

$fundingRatesEndpointResponse = $bybit->publicEndpoint(FundingRateHistory::class, (new FundingRateHistoryRequest())
    ->setSymbol('BTCUSDT')
)->execute();

echo "Return code: {$fundingRatesEndpointResponse->getReturnCode()}\n";
echo "Return message: {$fundingRatesEndpointResponse->getReturnMessage()}\n";
 
/** @var IFundingRateHistoryResponseInterface $fundingRatesInfo */
$fundingRatesInfo = $fundingRatesEndpointResponse->getResult();
foreach ($fundingRatesInfo->getFundingRates() as $fundingRate) {
    echo "-----\n";
    echo "Time: {$fundingRate->getFundingRateTimestamp()->format('Y-m-d H:i:s')}\n";
    echo "Symbol: {$fundingRate->getSymbol()}\n";
    echo "Rate: {$fundingRate->getFundingRate()}\n";
}
        
/**
 * Return code: 0
 * Return message: OK
 * -----
 * Time: 2024-06-23 00:00:00
 * Symbol: BTCUSDT
 * Rate: 0.0001
 * -----
 * Time: 2024-06-22 16:00:00
 * Symbol: BTCUSDT
 * Rate: 0.0001
 * -----
 * Time: 2024-06-22 08:00:00
 * Symbol: BTCUSDT
 * Rate: 0.0001
 * -----
 * Time: 2024-06-22 00:00:00
 * Symbol: BTCUSDT
 * Rate: 0.0001
 * ..........
 */
```
  
<br />

<h3 align="left" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces;

interface IFundingRateHistoryRequestInterface
{
    /**
     * Product type. linear,inverse. Default: linear, but in the response category shows ""
     * @param string $category
     * @return self
     */
    public function setCategory(string $category): self;
    public function getCategory(): string;

    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * The start datetime
     * @param int $startTime
     * @return self
     */
    public function setStartTime(int $startTime): self;
    public function getStartTime(): \DateTime;

    /**
     * The end datetime
     * @param int $endTime
     * @return self
     */
    public function setEndTime(int $endTime): self;
    public function getEndTime(): \DateTime;

    /**
     * Limit for data size per page. [1, 200]. Default: 200
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE:</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO:</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Request\FundingRateHistoryRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequestInterface::setCategory(string $category): self</td>
    <td style="text-align: center">NO</td>
    <td>Категория. linear,inverse. По умолчанию: linear, но в ответе эндпоинта будет ""</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequestInterface::setSymbol(string $symbol): self</td>
    <td style="text-align: center">НЕТ</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequestInterface::setStartTime(int $timestamp): self</td>
    <td style="text-align: center"><b>НЕТ<sup>*</sup></b></td>
    <td>Временная метка, ОТ которой будет взят срез данных</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequestInterface::setEndTime(int $timestamp): self</td>
    <td style="text-align: center"><b>НЕТ<sup>*</sup></b></td>
    <td>Временная метка ДО того, как будет взят срез данных</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequestInterface::setLimit(int $limit): self</td>
    <td style="text-align: center">НЕТ</td>
    <td>Ограничение количества записей, возвращаемых по запросу</td>
  </tr>
</table>

> <sup>*</sup>**Warning:**
> При установке ограничений по времени выборки обязательно укажите верхнюю и нижнюю границы, используя `setStartTime(int $timestamp)` и `setEndTime(int $timestamp)`.
> В противном случае будет возвращена ошибка

> **Warning:**
> По умолчанию запрос к эндпоинту FundingRateHistory::class возвращает последние 200 записей до текущего момента для конкретного символа

<br />  

<h3 align="left" width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

````php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces;

interface IFundingRateHistoryResponseInterface
{
    /**
     * @return IFundingRateHistoryResponseItemInterface[]
     */
    public function getFundingRates(): array;
}
````

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE:</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO:</b></sup> <br /> 
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Response\FundingRateHistoryResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 30%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IFundingRateHistoryResponseInterface::getFundingRates()</td>
    <td style="text-align: center">IFundingRateHistoryResponseItemInterface[]</td>
    <td>Массив рейтов</td>
  </tr>
</table>

<br />

````php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces;

interface IFundingRateHistoryResponseItemInterface
{
    /**
     * Торговая пара
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Ставка финансирования
     * @return float
     */
    public function getFundingRate(): float;

    /**
     * Время следующего списания ставки финансирования
     * @return \DateTime
     */
    public function getFundingRateTimestamp(): \DateTime;
}
````

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE:</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryResponseItemInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO:</b></sup> <br /> 
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Response\FundingRateHistoryResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 30%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IFundingRateHistoryResponseItemInterface::getSymbol()</td>
    <td style="text-align: center">string</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryResponseItemInterface::getFundingRate()</td>
    <td style="text-align: center">float</td>
    <td>Ставка финансирования</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryResponseItemInterface::getFundingRateTimestamp()</td>
    <td style="text-align: center">DateTime</td>
    <td>Время следующего списания ставки финансирования</td>
  </tr>
</table>
