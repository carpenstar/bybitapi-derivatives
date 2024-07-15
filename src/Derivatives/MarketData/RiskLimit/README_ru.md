# Market Data - Risk Limit
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/risk-limit)</b>
<p>Эндпоинт возвращает данные по лимиту рисков для указанного символа. <br />
Лимит риска — это мера управления рисками, позволяющая ограничить подверженность трейдеров риску.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\RiskLimit::class
```

<br />

<h3 width="100%"><b>ПРИМЕР</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\RiskLimit;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response\RiskLimitsResponse;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

$endpointResponse = $bybit->publicEndpoint(RiskLimit::class, (new RiskLimitsRequest())
    ->setSymbol('BTCUSDT')
)->execute();

echo "Return code: {$endpointResponse->getReturnCode()}\n";
echo "Return message: {$endpointResponse->getReturnMessage()}\n";

/** @var RiskLimitsResponse $riskLimit */
$riskLimit = $endpointResponse->getResult();
foreach ($riskLimit->getRiskLimitList() as $risk) {
    echo "--- \n";
    echo "ID: {$risk->getId()}\n";
    echo "Symbol: {$risk->getSymbol()}\n";
    echo "Limit: {$risk->getLimit()}\n";
    echo "Maintain Margin: {$risk->getMaintainMargin()}\n";
    echo "Initial Margin: {$risk->getInitialMargin()}\n";
    echo "Is Lower Risk: {$risk->getIsLowerRisk()}\n";
    echo "Maximal Leverage: {$risk->getMaxLeverage()}\n";
}

/**
 * Return code: 0
 * Return message: OK
 * --- 
 * ID: 1
 * Symbol: BTCUSDT
 * Limit: 2000000
 * Maintain Margin: 0.005
 * Initial Margin: 0.01
 * Is Lower Risk: 0
 * Maximal Leverage: 100
 * --- 
 * ID: 2
 * Symbol: BTCUSDT
 * Limit: 2600000
 * Maintain Margin: 0.0056
 * Initial Margin: 0.0111
 * Is Lower Risk: 0
 * Maximal Leverage: 90
 * --- 
 * ID: 3
 * Symbol: BTCUSDT
 * Limit: 3200000
 * Maintain Margin: 0.0063
 * Initial Margin: 0.0125
 * Is Lower Risk: 0
 * Maximal Leverage: 80
*/
```  

<br />

<h3 width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces;

interface IRiskLimitsRequestInterface
{
    /**
     * Торговая пара
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Курсор. Используйте токен nextPageCursor из ответа, чтобы получить следующую страницу набора результатов.
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
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IRiskLimitsRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IRiskLimitsRequestInterface::setCursor(string $cursor): self</td>
    <td>НЕТ</td>
    <td>Курсор. Используйте токен nextPageCursor из ответа, чтобы получить следующую страницу набора результатов.</td>
  </tr>
</table>

<br />

<h3 width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces;

interface IRiskLimitsResponseInterface
{
    /**
     * Курсор. Используйте токен nextPageCursor из ответа, чтобы получить следующую страницу набора результатов.
     * @param string $cursor
     * @return mixed
     */
    public function getCursor(string $cursor);

    /** @return IRiskLimitsResponseItemInterface[] */
    public function getRiskLimitList(): array;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsResponseInterface:class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response\RiskLimitsResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IRiskLimitsResponseInterface::getCursor()</td>
    <td>string</td>
    <td>Курсор. Используйте токен nextPageCursor из ответа, чтобы получить следующую страницу набора результатов.</td>
  </tr>
  <tr>
    <td>IRiskLimitsResponseInterface::getRiskLimitList()</td>
    <td>IRiskLimitsResponseItemInterface[]</td>
    <td>List of risk limits</td>
  </tr>
</table>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces;

interface IRiskLimitsResponseItemInterface
{
    /**
     * ID риска
     * @return string
     */
    public function getId(): string;

    /**
     * Торговая пара
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Лимит на позицию
     * @return int
     */
    public function getLimit(): int;

    /**
     * Маржа поддержки
     * @return float
     */
    public function getMaintainMargin(): float;

    /**
     * Начальная маржа
     * @return float
     */
    public function getInitialMargin(): float;

    /**
     * Торговый инструмент имеет низкий риск?
     * 1: true, 0: false
     * @return int
     */
    public function getIsLowerRisk(): int;

    /**
     * Максимальное кредитное плечо
     * @return float
     */
    public function getMaxLeverage(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsResponseItemInterface:class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response\RiskLimitsResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IRiskLimitsResponseItemInterface::getId()</td>
    <td>string</td>
    <td>
      ID риска
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponseItemInterface::getSymbol()</td>
    <td>string</td>
    <td>
      Торговая пара
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponseItemInterface::getLimit()</td>
    <td>int</td>
    <td>
      Ограничение на позицию
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponseItemInterface::getMaintainMargin()</td>
    <td>float</td>
    <td>
      Поддерживающая маржа
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponseItemInterface::getInitialMargin()</td>
    <td>float</td>
    <td>
      Начальная маржа
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponseItemInterface::getIsLowerRisk()</td>
    <td>int</td>
    <td>
     Торговый инструмент имеет низкий риск?
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponseItemInterface::getMaxLeverage()</td>
    <td>float</td>
    <td>
      Максимальное кредитное плечо
    </td>
  </tr>
</table>
