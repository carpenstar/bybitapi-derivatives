# Market Data - Ticker Info
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/ticker)</b>
<p>Эндпоинт возвращает данные по символу (последний снимок цены, лучшую цену покупки/продажи и объем торгов) за последние 24 часа.</p>

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfo::class
```

<br />

<h3 width="100%"><b>ПРИМЕР</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoResponseItemInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfoRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\TickerInfo;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com');

$endpointResponse = $bybit->publicEndpoint(TickerInfo::class, (new TickerInfoRequest())
    ->setSymbol('BTCUSDT')
)->execute();

echo "Return code: {$endpointResponse->getReturnCode()}\n";
echo "Return message: {$endpointResponse->getReturnMessage()}\n";

/** @var ITickerInfoResponseItemInterface $tickerInfo */
$tickerInfo = $endpointResponse->getResult()->getTickerInfo();

echo "Symbol: {$tickerInfo->getSymbol()}\n";
echo "Bid Price: {$tickerInfo->getBidPrice()}\n";
echo "Ask Price: {$tickerInfo->getAskPrice()}\n";
echo "Last Price: {$tickerInfo->getLastPrice()}\n";
echo "Last Tick Direction: {$tickerInfo->getLastTickDirection()}\n";
echo "Prev Price 24 hours: {$tickerInfo->getPrevPrice24h()}\n";
echo "Prev Price 24 hours(%): {$tickerInfo->getPrice24hPcnt()}\n";
echo "High Price 24 hours: {$tickerInfo->getHighPrice24h()}\n";
echo "Low Price 24 hours: {$tickerInfo->getLowPrice24h()}\n";
echo "Prev price 1 hour: {$tickerInfo->getPrevPrice1h()}\n";
echo "Mark Price: {$tickerInfo->getMarkPrice()}\n";
echo "Index Price: {$tickerInfo->getIndexPrice()}\n";
echo "Open Interest: {$tickerInfo->getOpenInterests()}\n";
echo "Open Interest Value: {$tickerInfo->getOpenInterestValue()}\n";
echo "Turnover 24 hours: {$tickerInfo->getTurnover24h()}\n";
echo "Volume 24 hours: {$tickerInfo->getVolume24h()}\n";
echo "Funding Rate: {$tickerInfo->getFundingRate()}\n";
echo "Next Funding Time: {$tickerInfo->getNextFundingTime()->format("Y-m-d H:i:s")}\n";
echo "Predicted Delivery Price: {$tickerInfo->getPredictedDeliveryPrice()}\n";
echo "Basis Rate: {$tickerInfo->getBasisRate()}\n";
echo "Delivery Fee Rate: {$tickerInfo->getDeliveryFeeRate()}\n";
echo "Open Interests Value: {$tickerInfo->getOpenInterestValue()}\n";
    
/** 
 * Return code: 0
 * Return message: OK
 * Symbol: BTCUSDT
 * Bid Price: 59933.6
 * Ask Price: 59935.7
 * Last Price: 59938
 * Last Tick Direction: ZeroMinusTick
 * Prev Price 24 hours: 58627.5
 * Prev Price 24 hours(%): 0.022352
 * High Price 24 hours: 63074.5
 * Low Price 24 hours: 58267.4
 * Prev price 1 hour: 59997
 * Mark Price: 59938
 * Index Price: 59957.26
 * Open Interest: 208384.158
 * Open Interest Value: 12490129662.2
 * Turnover 24 hours: 2907929540.5417
 * Volume 24 hours: 48504.964
 * Funding Rate: 8.407E-5
 * Next Funding Time: 2024-07-15 00:00:00
 * Predicted Delivery Price: 0
 * Basis Rate: 0
 * Delivery Fee Rate: 0
 * Open Interests Value: 12490129662.2 
 */
```  

<br />

<h3 width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces;

interface ITickerInfoRequestInterface
{
    /**
     * Торговая пара
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;
}
```  

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br /> 
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br /> 
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfoRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ITickerInfoRequestInterface::setSymbol(string $symbol)</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
</table>

<br />

<h3 width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---
```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces;

use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Response\TickerInfoResponseItem;

interface ITickerInfoResponseInterface
{
    /**
     * @return null|ITickerInfoResponseItemInterface
     */
    public function getTickerInfo(): ?ITickerInfoResponseItemInterface;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Response\TickerInfoResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ITickerInfoResponseInterface::getTickerInfo()</td>
    <td>ITickerInfoResponseItemInterface</td>
    <td>Информация о тикере</td>
  </tr>
</table>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces;

interface ITickerInfoResponseItemInterface
{
    /**
     * Торговая пара
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Лучшая цена покупки
     * @return float
     */
    public function getBidPrice(): float;

    /**
     * Лучшая цена продажи
     * @return float
     */
    public function getAskPrice(): float;

    /**
     * Цена последней транзакции
     * @return float
     */
    public function getLastPrice(): float;

    /**
     * Направление последнего изменения цены
     * @return string
     */
    public function getLastTickDirection(): string;

    /**
     * Цена 24 часа назад
     * @return float
     */
    public function getPrevPrice24h(): float;

    /**
     * Изменение цены за 24 часа, в процентах
     * @return float
     */
    public function getPrice24hPcnt(): float;

    /**
     * Максимальная цена за 24 часа
     * @return float
     */
    public function getHighPrice24h(): float;

    /**
     * Минимальная цена за 24 часа
     * @return float
     */
    public function getLowPrice24h(): float;

    /**
     * Рыночная цена инструмента час назад
     * @return float
     */
    public function getPrevPrice1h(): float;

    /**
     * Цена маркировки (ликвидация происходит по этому показателю)
     * @return float
     */
    public function getMarkPrice(): float;

    /**
     * Цена межбиржевого индекса
     * @return float
     */
    public function getIndexPrice(): float;

    /**
     * Открытий интерес по торговому инструменту
     * @return float
     */
    public function getOpenInterests(): float;

    /**
     * Оборот за 24 часа
     * @return float
     */
    public function getTurnover24h(): float;

    /**
     * Совокупный обьем за 24 часа
     * @return float
     */
    public function getVolume24h(): float;

    /**
     * Ставка финансирования
     * @return float
     */
    public function getFundingRate(): float;

    /**
     * Время следующего списания ставки финансирования
     * @return \DateTime
     */
    public function getNextFundingTime(): \DateTime;

    /**
     * Значение открытого интереса
     * @return float
     */
    public function getOpenInterestValue(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoResponseItemInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Response\TickerInfoResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getSymbol()</td>
    <td>string</td>
    <td>
      Торговая пара
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getBidPrice()</td>
    <td>float</td>
    <td>
      Лучшая цена покупки
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getAskPrice()</td>
    <td>float</td>
    <td>
      Лучшая цена покупки
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getLastPrice()</td>
    <td>float</td>
    <td>
      Цена последней транзакции
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getLastTickDirection()</td>
    <td>string</td>
    <td>
      Направление последнего изменения цены
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getPrevPrice24h()</td>
    <td>float</td>
    <td>
       Цена 24 часа назад
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getPrice24hPcnt()</td>
    <td>float</td>
    <td>
      Изменение цены за 24 часа, в процентах
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getHighPrice24h()</td>
    <td>float</td>
    <td>
       Максимальная цена за 24 часа
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getLowPrice24h()</td>
    <td>float</td>
    <td>
      Минимальная цена за 24 часа
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getPrevPrice1h()</td>
    <td>float</td>
    <td>
      Рыночная цена инструмента час назад
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getMarkPrice()</td>
    <td>float</td>
    <td>
      Цена маркировки (ликвидация происходит по этому показателю)
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getIndexPrice()</td>
    <td>float</td>
    <td>
      Цена межбиржевого индекса
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getOpenInterests()</td>
    <td>float</td>
    <td>
      Открытий интерес по торговому инструменту
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getTurnover24h()</td>
    <td>float</td>
    <td>
      Оборот за 24 часа
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getVolume24h()</td>
    <td>float</td>
    <td>
      Совокупный обьем за 24 часа
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getFundingRate()</td>
    <td>float</td>
    <td>
      Ставка финансирования
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getNextFundingTime()</td>
    <td>DateTime</td>
    <td>
     Время следующего списания ставки финансирования
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponseItemInterface::getOpenInterestValue()</td>
    <td>float</td>
    <td>Значение открытого интереса</td>
  </tr>
</table>

---