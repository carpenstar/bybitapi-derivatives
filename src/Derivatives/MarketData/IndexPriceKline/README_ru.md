# Market Data - Index Price Kline
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/index-kline)</b>
<p>Запрос истории цены <b>INDEX</b>, рассчитанной на основе цен крупнейших бирж.</p>
<p>Каждый элемент представляет собой группу цен в зависимости от запрошенного интервала.</p>
<p>Эти данные можно использовать для построения свечных и других диаграмм.</p>

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\IndexPriceKline::class 
```

<br />
<p align="center" width="100%"><b>ПРИМЕР ВЫЗОВА</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Core\Enums\EnumIntervals;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\IndexPriceKline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Request\IndexPriceKlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Response\IndexPriceKlineResponseItem;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

$indexPriceKlineResponse = $bybit->publicEndpoint(IndexPriceKline::class, (new IndexPriceKlineRequest())
    ->setSymbol('BTCUSDT')
    ->setInterval(EnumIntervals::HOUR_1)
    ->setStart('2024-07-11 10:00:00')
    ->setEnd('2024-07-12 11:00:00')
    ->setLimit(4)
)->execute();

echo "Return code: {$indexPriceKlineResponse->getReturnCode()}\n";
echo "Return message: {$indexPriceKlineResponse->getReturnMessage()}\n";

/** @var IndexPriceKlineResponseItem $indexItem */
foreach ($indexPriceKlineResponse->getResult()->getKlineList() as $indexItem) {
    echo " --- \n";
    echo "Start Time: {$indexItem->getStartTime()->format('Y-m-d H:i:s')}\n";
    echo "Open Price: {$indexItem->getOpen()}\n";
    echo "High Price: {$indexItem->getHigh()}\n";
    echo "Low Price: {$indexItem->getLow()}\n";
    echo "Close Price: {$indexItem->getClose()}\n";
}

/**
* Return code: 0
* Return message: OK
* ---
* Start Time: 2024-07-11 13:00:00
* Open Price: 58814.49
* High Price: 58971.56
* Low Price: 58254.48
* Close Price: 58562.92
* ---
* Start Time: 2024-07-11 12:00:00
* Open Price: 58772.77
* High Price: 59508.87
* Low Price: 58478.2
* Close Price: 58814.49
* ---
* Start Time: 2024-07-11 11:00:00
* Open Price: 58462.45
* High Price: 58901.22
* Low Price: 58390.42
* Close Price: 58772.77
* ---
* Start Time: 2024-07-11 10:00:00
* Open Price: 58288.3
* High Price: 58502.26
* Low Price: 58174.91
* Close Price: 58462.45
*/
``` 
<br />
<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА:</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces;

interface IIndexPriceKlineRequestInterface
{
    /**
     * Категория продукта (только геттер) 
     * @return string
     */
    public function getCategory(): string;

    /**
     * Торговая пара
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Интервал тика. 1 3 5 15 30 60 120 240 360 720 D M W
     * @param string $interval
     * @return self
     */
    public function setInterval(string $interval): self;
    public function getInterval(): string;

    /**
     * Строка дата/времени ОТ которого берется срез данных
     * @param string $start
     * @return self
     */
    public function setStart(string $start): self;
    public function getStart(): int;

    /**
     * Строка дата/времени ДО которого берется срез данных
     * @param string $end
     * @return self
     */
    public function setEnd(string $end): self;
    public function getEnd(): int;

    /**
     * Ограничение данных на страницу, по умолчанию: 200
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
        <sup>INTERFACE:</sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineRequest::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup>DTO:</sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Request\IndexPriceKlineRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequest::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequest::setInterval(int $interval): self</td>
    <td><b>ДА</b></td>
    <td>Интервал тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequest::setStartTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>Таймштам ОТ которого берется срез данных</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequest::setEndTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>Таймштам ДО которого берется срез данных</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequest::setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Ограничение данных на страницу, по умолчанию: 200</td>
  </tr>
</table>

<br />
<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА:</b></p>

---

```php
Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineResponseInterface::class

interface IIndexPriceKlineResponseInterface
{
    /** @return IIndexPriceKlineResponseItemInterface[] */
    public function getKlineList(): array;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup>INTERFACE:</sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineResponseItemInterface::class </b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup>DTO:</sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Response\IndexPriceKlineResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponseInterface::getKlineList()</td>
    <td>IIndexPriceKlineResponseItemInterface[]</td>
    <td>Массив объектов тиков</td>
  </tr>
</table>

---

```php
Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineResponse::class

interface IIndexPriceKlineResponse
{
    public function getStartTime(): \DateTime;
    public function getOpen(): float;
    public function getHigh(): float;
    public function getLow(): float;
    public function getClose(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup>INTERFACE:</sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineResponse::class </b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup>DTO:</sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Response\IndexPriceKlineResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponse::getStartTime()</td>
    <td>DateTime</td>
    <td>Время открытия тика</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponse::getOpen()</td>
    <td>float</td>
    <td>Цена открытия тика</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponse::getHigh()</td>
    <td>float</td>
    <td>Максимальная цена тика</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponse::getLow()</td>
    <td>float</td>
    <td>Минимальная цена тика</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponse::getClose()</td>
    <td>float</td>
    <td>Цена закрытия тика</td>
  </tr>
</table>

---