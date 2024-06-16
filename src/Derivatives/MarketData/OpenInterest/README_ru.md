# Market Data - Open Interest
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/open-interest)</b>
<p>Эндпоинт возвращает данные об открытом интересе по указанному символу. <br />
<b>Открытый интерес - это общее количество позиций по бессрочным контрактам, которые в настоящее время имеются на платформе.</b></p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\OpenInterest::class
```

<br />

<h3 width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\OpenInterest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response\OpenInterestResponseItem;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

$openInterestResponse = $bybit->publicEndpoint(OpenInterest::class, (new OpenInterestRequest())
    ->setSymbol('BTCUSDT')
    ->setInterval('5min')
    ->setStart('2024-07-11 10:00:00')
    ->setEnd('2024-07-12 11:00:00')
    ->setLimit(10)
)->execute();

echo "Return code: {$openInterestResponse->getReturnCode()}\n";
echo "Return message: {$openInterestResponse->getReturnMessage()}\n";

/** @var OpenInterestResponseItem $interest */
foreach ($openInterestResponse->getResult()->getOpenInterestList() as $interest) {
    echo " --- \n";
    echo "Time: {$interest->getTimestamp()->format('Y-m-d H:i:s')}\n";
    echo "Open Interest: {$interest->getOpenInterest()}\n";
}

/**
 * Return code: 0
 * Return message: OK
 * ---
 * Time: 2024-07-14 14:35:00
 * Open Interest: 208441.186
 * ---
 * Time: 2024-07-14 14:30:00
 * Open Interest: 208439.88
 * ---
 * Time: 2024-07-14 14:25:00
 * Open Interest: 208436.369
 * ---
 * Time: 2024-07-14 14:20:00
 * Open Interest: 208435.437
 * ---
 * Time: 2024-07-14 14:15:00
 * Open Interest: 208435.489
 * ---
 * Time: 2024-07-14 14:10:00
 * Open Interest: 208435.479
 * ---
 * Time: 2024-07-14 14:05:00
 * Open Interest: 208435.465
 * ---
 * Time: 2024-07-14 14:00:00
 * Open Interest: 208434.558
 * ---
 * Time: 2024-07-14 13:55:00
 * Open Interest: 208441.512
 * ---
 * Time: 2024-07-14 13:50:00
 * Open Interest: 208441.488
 */
```  

<br />

<h3 width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces;

interface IOpenInterestRequestInterface
{
    /**
     * Торговая пара
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Размер тика. Возможные значение: 1h 3h 5h 15h 30h 60h 120h 240h 360h 720h D M W
     * @param string $interval
     * @return self
     */
    public function setInterval(string $interval): self;
    public function getInterval(): string;

    /**
     * Строка даты/времени ОТ которого берется срез данных
     * @param string $start
     * @return self
     */
    public function setStart(string $start): self;
    public function getStart(): int;

    /**
     * Строка даты/времени ДО которого берется срез данных
     * @param string $end
     * @return self
     */
    public function setEnd(string $end): self;
    public function getEnd(): int;

    /**
     * Ограничение возвращаемых записей на запрос. По умолчанию: 200
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;

    /**
     * Курсор следующей или предыдущей страницы, используется для пагинации
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
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces\IOpenInterestRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IOpenInterestRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IOpenInterestRequestInterface::setInterval(int $interval): self</td>
    <td><b>ДА</b></td>
    <td>
      Размер тика. <br />
      Возможные значения: 1h 3h 5h 15h 30h 60h 120h 240h 360h 720h D M W
    </td>
  </tr>
  <tr>
    <td>IOpenInterestRequestInterface::setStart(string $start): self</td>
    <td><b>ДА</b></td>
    <td>Таймштамп ОТ которого берется срез данных</td>
  </tr>
  <tr>
    <td>IOpenInterestRequestInterface::setEnd(string $end): self</td>
    <td><b>ДА</b></td>
    <td>Таймштамп ДО которого берется срез данных</td>
  </tr>
  <tr>
    <td>IOpenInterestRequestInterface::setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Ограничение возвращаемых записей на запрос. По умолчанию: 200</td>
  </tr>
</table>

<br />

<h3 width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces;

interface IOpenInterestResponseInterface
{
    /** @return IOpenInterestResponseItemInterface[] */
    public function getOpenInterestList(): array;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces\IOpenInterestResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response\OpenInterestResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IOpenInterestResponseInterface::getTimestamp()</td>
    <td>IOpenInterestResponseItemInterface[]</td>
    <td>Список записей об открытом интересе сгруппированных по часу </td>
  </tr>
</table>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces;

interface IOpenInterestResponseItemInterface
{
    /**
     * Обьем интереса
     * @return float
     */
    public function getOpenInterest(): float;

    /**
     * За какой период агрегированы данные об открытом интересе
     * @return \DateTime
     */
    public function getTimestamp(): \DateTime;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces\IOpenInterestResponseItemInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response\OpenInterestResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IOpenInterestResponseItemInterface::getTimestamp()</td>
    <td>DateTime</td>
    <td>Время исполнения запроса</td>
  </tr>
  <tr>
    <td>IOpenInterestResponseItemInterface::getOpenInterest()</td>
    <td>float</td>
    <td>Обьем интереса</td>
  </tr>
</table>

---