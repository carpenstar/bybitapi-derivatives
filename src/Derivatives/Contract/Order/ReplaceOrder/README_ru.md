# Contract - Contract - Order - Replace Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/replace-order)</b>
<p>Модификация ордера</p>

> Вы можете изменить открытые или частично исполненные ордера.

<br />

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Core\Interfaces\IResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\ReplaceOrder;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Request\ReplaceOrderRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Response\ReplaceOrderResponse;

$bybitApi = (new BybitAPI())
    ->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

/** @var IResponseInterface $endpointResponse */
$endpointResponse = $bybitApi->privateEndpoint(ReplaceOrder::class,
    (new ReplaceOrderRequest())
        ->setSymbol('BTCUSDT')
        ->setOrderId('4f279264-6d38-46c1-8216-7e5a2f110c11')
        ->setPrice(68100)
)->execute();

echo "Return code: {$endpointResponse->getReturnCode()} \n";
echo "Return message: {$endpointResponse->getReturnMessage()} \n";

/** @var ReplaceOrderResponse $orderInfo */
$orderInfo = $endpointResponse->getResult();
echo "Order ID: {$orderInfo->getOrderId()}\n";
echo "Order Link ID: {$orderInfo->getOrderLinkId()}\n";
        
/**
* Return code: 0
* Return message: OK 
* Order ID: 4f279264-6d38-46c1-8216-7e5a2f110c11
* Order Link ID:
*/
````

<br />

<h3 align="left" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderRequestInterface
{
    /**
     * Торговая пара
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Order id. Either orderId or orderLinkId is required
     * @param string $orderId
     * @return self
     */
    public function setOrderId(string $orderId): self;
    public function getOrderId(): string;

    /**
     * User customised order id. Either orderId or orderLinkId is required
     * @param string $orderLinkId
     * @return self
     */
    public function setOrderLinkId(string $orderLinkId): self;
    public function getOrderLinkId(): string;

    /**
     * Новая цена ордера. Не передавайте если не хотите изменить цену
     * @param float $price
     * @return self
     */
    public function setPrice(float $price): self;
    public function getPrice(): float;

    /**
     * Новый объем ордера. Не передавайте если не хотите изменить цену
     * @param float $qty
     * @return self
     */
    public function setQty(float $qty): self;
    public function getQty(): float;

    /**
     * Триггерная цена. Не передавайте если не хотите изменить цену
     * @param float $triggerPrice
     * @return self
     */
    public function setTriggerPrice(float $triggerPrice): self;
    public function getTriggerPrice(): float;

    /**
     * Новый тэйе-профит. Не передавайте если не хотите изменить цену
     * @param float $takeProfit
     * @return self
     */
    public function setTakeProfit(float $takeProfit): self;
    public function getTakeProfit(): float;

    /**
     * Новый стоп-лосс. Не передавайте если не хотите изменить цену
     * @param float $stopLoss
     * @return self
     */
    public function setStopLoss(float $stopLoss): self;
    public function getStopLoss(): float;

    /**
     * Тип цены, по которой активируется тейк-профит. При установке тейк-профита этот параметр обязателен, если для ордера нет начального значения.
     * @param string $tpTriggerBy
     * @return self
     */
    public function setTpTriggerBy(string $tpTriggerBy): self;
    public function getTpTriggerBy(): string;

    /**
     * Тип цены, по которому активируется стоп-лосс. При установке стоп-лосса этот параметр обязателен, если для ордера нет начального значения.
     * @param string $slTriggerBy
     * @return self
     */
    public function setSlTriggerBy(string $slTriggerBy): self;
    public function getSlTriggerBy(): string;

    /**
     * Тип триггерной цены. LastPrice, IndexPrice, MarkPrice, LastPrice
     * @param string $triggerBy
     * @return self
     */
    public function setTriggerBy(string $triggerBy): self;
    public function getTriggerBy(): string;

    /**
     * Цена лимитного ордера при срабатывании тейк-профита. Работает только тогда, когда исходный ордер устанавливает частичный лимит tp/sl
     * @param float $tpLimitPrice
     * @return self
     */
    public function setTpLimitPrice(float $tpLimitPrice): self;
    public function getTpLimitPrice(): float;

    /**
     * Цена лимитного ордера при срабатывании стоп-лосса. Работает только тогда, когда исходный ордер устанавливает частичный лимит tp/sl
     * @param float $slLimitPrice
     * @return self
     */
    public function setSlLimitPrice(float $slLimitPrice): self;
    public function getSlLimitPrice(): float;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces\IReplaceOrderRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Request\ReplaceOrderRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setOrderId(string $orderId)</td>
    <td>НЕТ</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>Пользовательский ID ордера</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setPrice(float $price)</td>
    <td>НЕТ</td>
    <td>Новая цена ордера </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setQty(float $qty)</td>
    <td>НЕТ</td>
    <td>
      Новое количество ордера
    </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTriggerPrice(float $triggerPrice)</td>
    <td>НЕТ</td>
    <td>Установка/изменение триггерной цены</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTakeProfit(float $takeProfit)</td>
    <td>НЕТ</td>
    <td>Установка/изменение тейк-профита</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setStopLoss(float $stopLoss)</td>
    <td>НЕТ</td>
    <td>Установка/изменение стоп-лосса</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTpTriggerBy(string $tpTriggerBy)</td>
    <td>НЕТ</td>
    <td>Тип цены, по которой активируется тейк-профит. При установке тейк-профита этот параметр обязателен, если для ордера нет начального значения. </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setSlTriggerBy(string $slTriggerBy)</td>
    <td>НЕТ</td>
    <td>Тип цены, по которому активируется стоп-лосс. При установке стоп-лосса этот параметр обязателен, если для ордера нет начального значения.</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTriggerBy(string $triggerBy)</td>
    <td>НЕТ</td>
    <td>Тип триггерной цены. LastPrice, IndexPrice, MarkPrice, LastPrice</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTpLimitPrice(float $tpLimitPrice)</td>
    <td>НЕТ</td>
    <td>Цена лимитного ордера при срабатывании тейк-профита. Работает только тогда, когда исходный ордер устанавливает частичный лимит tp/sl</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setSlLimitPrice(float $slLimitPrice)</td>
    <td>НЕТ</td>
    <td>Цена лимитного ордера при срабатывании стоп-лосса. Работает только тогда, когда исходный ордер устанавливает частичный лимит tp/sl</td>
  </tr>
</table>

<br />

<h3 align="left" width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderResponseInterface
{
    /**
     * Order ID
     * @return string
     */
    public function getOrderId(): string;

    /**
     * User customised order id
     * @return string
     */
    public function getOrderLinkId(): string;
}
```


<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces\IReplaceOrderRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Request\ReplaceOrderRequest::class</b>
    </td>
  </tr>
   <tr>
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Тип</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IReplaceOrderRequestInterface::getOrderId()</td>
     <td>string</td>
     <td>Order ID</td>
   </tr>
   <tr>
     <td>IReplaceOrderRequestInterface::getOrderLinkId()</td>
     <td>string</td>
     <td>Пользовательский идентификатор ордера</td>
   </tr>
</table>

---