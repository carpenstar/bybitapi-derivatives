# Market Data - Mark Price Kline
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/mark-kline)</b>
<p>Эндпоинт возвращает исторические данные о цене <b>МАРКИРОВКИ</b>.</p>
<p>Данные возвращаются группами в зависимости от запрошенного интервала. </p>
<p>Может использоваться для создания свечных диаграмм.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKline::class
```

<br />

<h3 width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Core\Enums\EnumIntervals;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Request\MarkPriceKlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Response\MarkPriceKlineResponseItem;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

$klineResponse = $bybit->publicEndpoint(MarkPriceKline::class, (new MarkPriceKlineRequest())
    ->setSymbol('BTCUSDT')
    ->setInterval(EnumIntervals::HOUR_1)
    ->setStart('2024-07-11 10:00:00')
    ->setEnd('2024-07-12 11:00:00')
    ->setLimit(4)
)->execute();

echo "Return code: {$klineResponse->getReturnCode()}\n";
echo "Return message: {$klineResponse->getReturnMessage()}\n";

/** @var MarkPriceKlineResponseItem $klineItem */
foreach ($klineResponse->getResult()->getKlineList() as $klineItem) {
    echo " --- \n";
    echo "Start Time: {$klineItem->getStartTime()->format('Y-m-d H:i:s')}\n";
    echo "Open Price: {$klineItem->getOpen()}\n";
    echo "High Price: {$klineItem->getHigh()}\n";
    echo "Low Price: {$klineItem->getLow()}\n";
    echo "Close Price: {$klineItem->getClose()}\n";
}

/**
 * Return code: 0
 * Return message: OK
 * ---
 * Start Time: 2024-07-11 13:00:00
 * Open Price: 58816.19
 * High Price: 58952.38
 * Low Price: 58272.28
 * Close Price: 58537.28
 * ---
 * Start Time: 2024-07-11 12:00:00
 * Open Price: 58777.3
 * High Price: 59456.38
 * Low Price: 58491.5
 * Close Price: 58816.19
 * ---
 * Start Time: 2024-07-11 11:00:00
 * Open Price: 58445.9
 * High Price: 58879.27
 * Low Price: 58371.09
 * Close Price: 58777.3
 * ---
 * Start Time: 2024-07-11 10:00:00
 * Open Price: 58271.4
 * High Price: 58476.99
 * Low Price: 58159.11
 * Close Price: 58445.9
*/
```  

<br />

<h3 width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces;

interface IMarkPriceKlineRequestInterface
{
    /**
     * @return string
     */
    public function getCategory(): string;

    /**
     * Обязательный параметр. Линия с тикером торговой пары.
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Обязательный параметр. Размер тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W
     * @param string $interval
     * @return self
     */
    public function setInterval(string $interval): self;
    public function getInterval(): string;

    /**
     * Обязательный параметр. Строка даты времени ОТ которого будет взят срез данных
     * @param string $start
     * @return self
     */
    public function setStart(string $start): self;
    public function getStart(): int;

    /**
     * Обязательный параметр. Строка даты времени ДО которого будет взят срез данных
     * @param string $end
     * @return self
     */
    public function setEnd(string $end): self;
    public function getEnd(): int;

    /**
     * Необязательный параметр. Ограничение количества записей, возвращаемых для каждого запроса. По умолчанию 200
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
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces\IMarkPriceKlineRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Request\MarkPriceKlineRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IMarkPriceKlineRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IMarkPriceKlineRequestInterface::setInterval(int $interval): self</td>
    <td><b>ДА</b></td>
    <td>
      Размер тика. <br />
      Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W
    </td>
  </tr>
  <tr>
    <td>IMarkPriceKlineRequestInterface::setStart(string $start): self</td>
    <td><b>ДА</b></td>
    <td>
      Строка даты времени ОТ которого будет взят срез данных
    </td>
  </tr>
  <tr>
    <td>IMarkPriceKlineRequestInterface::setEnd(string $end): self</td>
    <td><b>ДА</b></td>
    <td>
      Строка даты времени ДО которого будет взят срез данных
    </td>
  </tr>
  <tr>
    <td>IMarkPriceKlineRequestInterface::setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>
      Ограничение количества записей, возвращаемых для каждого запроса. По умолчанию 200
    </td>
  </tr>
</table>

<br />

<h3 width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces;

interface IMarkPriceKlineResponseInterface
{
    /** @return IMarkPriceKlineResponseItemInterface[] */
    public function getKlineList(): array;
}
```

<table style="width: 100%">
    <tr>
        <td colspan="3">
            <sup><b>INTERFACE</b></sup> <br />
            <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces\IMarkPriceKlineResponseInterface::class</b>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <sup><b>DTO</b></sup> <br />
            <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Response\MarkPriceKlineResponse::class</b>
        </td>
    </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IMarkPriceKline::getKlineList()</td>
    <td>IMarkPriceKlineResponseItemInterface[]</td>
    <td>List of candles</td>
  </tr>
</table>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces;

interface IMarkPriceKlineResponseItemInterface
{
    /**
     * Time of candle
     * @return \DateTime
     */
    public function getStartTime(): \DateTime;

    /**
     * Open Price
     * @return float
     */
    public function getOpen(): float;

    /**
     * High Price
     * @return float
     */
    public function getHigh(): float;

    /**
     * Low Price
     * @return float
     */
    public function getLow(): float;

    /**
     * Close Price
     * @return float
     */
    public function getClose(): float;
}
```

<table style="width: 100%">
    <tr>
        <td colspan="3">
            <sup><b>INTERFACE</b></sup> <br />
            <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces\IMarkPriceKlineResponseItemInterface::class</b>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <sup><b>DTO</b></sup> <br />
            <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Response\MarkPriceKlineResponseItem::class</b>
        </td>
    </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IMarkPriceKlineResponseItemInterface::getStartTime()</td>
    <td>DateTime</td>
    <td>Время открытия тика</td>
  </tr>
  <tr>
    <td>IMarkPriceKlineResponseItemInterface::getOpen()</td>
    <td>float</td>
    <td>Цена открытия тика</td>
  </tr>
  <tr>
    <td>IMarkPriceKlineResponseItemInterface::getHigh()</td>
    <td>float</td>
    <td>Максимальная цена тика</td>
  </tr>
  <tr>
    <td>IMarkPriceKlineResponseItemInterface::getLow()</td>
    <td>float</td>
    <td>Минимальная цена тика</td>
  </tr>
  <tr>
    <td>IMarkPriceKlineResponseItemInterface::getClose()</td>
    <td>float</td>
    <td>Цена закрытия тика</td>
  </tr>
  <tr>
    <td>IMarkPriceKlineResponseItemInterface::getVolume()</td>
    <td>float</td>
    <td>Обьем</td>
  </tr>
</table>

---