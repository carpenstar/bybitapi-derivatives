# Contract - Contract - Order - Cancel Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/cancel)</b>
<p>Этот эндпоинт позволяет отменить указанный открытый ордер.</p>

> Вы можете отменить указанный частично выполненный заказ.

<br />

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

---

```php
    use Carpenstar\ByBitAPI\BybitAPI;
    use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\CancelOrder;
    use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Request\CancelOrderRequest;
    use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Response\CancelOrderResponse;

    $bybitApi = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'apiKey', 'apiSecret');

    $cancelOrderResponse = $bybitApi->privateEndpoint(CancelOrder::class,
        (new CancelOrderRequest())->setSymbol('BTCUSDT')->setOrderId('78b869b7-f682-41fe-9edc-dc2dfaaf8d79'))->execute();

    echo "Return code: {$cancelOrderResponse->getReturnCode()} \n";
    echo "Return message: {$cancelOrderResponse->getReturnMessage()} \n";

    /** @var CancelOrderResponse $cancelOrderInfo */
    $cancelOrderInfo = $cancelOrderResponse->getResult();

    echo "Order ID: {$cancelOrderInfo->getOrderId()} \n";
    echo "Order Link ID: {$cancelOrderInfo->getOrderLinkId()} \n";

    /**
    * Return code: 0
    * Return message: OK 
    * Order ID: 78b869b7-f682-41fe-9edc-dc2dfaaf8d79 
    * Order Link ID:
    */
```

<br />

<h3 align="left" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderRequestInterface
{
    /**
     * Системный идентификатор заказа. Требуется либо orderId, либо orderLinkId.
     * @return string
     */
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
    
    /**
     * Пользовательский идентификатор заказа. Требуется либо orderId, либо orderLinkId.
     * @param string $orderLinkId
     * @return self
     */
    public function setOrderLinkId(string $orderLinkId): self;
    public function setOrderId(string $orderId): self;

    /**
     * Символьный код торговой пары
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>ИНТЕРФЕЙС</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces\ICancelOrderRequestInterface::class</b>
    </td>
  </tr>
      <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Request\CancelOrderRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">МЕТОД</th>
    <th style="width: 5%; text-align: center">ОБЯЗАТЕЛЬНО</th>
    <th style="width: 50%; text-align: center">ОПИСАНИЕ</th>
  </tr>
  <tr>
    <td>ICancelOrderRequestInterface::setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td>Символьный код торговой пары</td>
  </tr>
  <tr>
    <td>ICancelOrderRequestInterface::setOrderId(string $orderId)</td>
    <td>НЕТ (если задан orderLinkId)</td>
    <td>Системный идентификатор заказа</td>
  </tr>
  <tr>
    <td>ICancelOrderRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ (если задан orderId)</td>
    <td>Пользовательский ID ордера</td>
  </tr>
</table>

<br />

<h3 align="left" width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderResponseInterface
{
    /**
    * Системный идентификатор ордера 
    * @return string
    */
    public function getOrderId(): string; 
    
    /**
    * Пользовательский идентификатор ордера 
    * @return string
    */
    public function getOrderLinkId(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>ИНТЕРФЕЙС</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces\ICancelOrderResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Response\CancelOrderResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ICancelOrderResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Системный идентификатор ордера</td>
  </tr>
  <tr>
    <td>ICancelOrderResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский идентификатор ордера</td>
  </tr>
</table>

---