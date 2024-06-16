# Contract - Contract - Order - Cancel All Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/cancel-all)</b>
<p>Этот эндпоинт позволяет отменить все открытые ордера.</p>

<br />

<h3 align="left" width="100%"><b>ПРИМЕР ВЫЗОВА</b></h3>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\CancelAllOrder;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderResponseItemInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Request\CancelAllOrderRequest;

$bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com','apiKey', 'apiSecret');

$response = $bybit->privateEndpoint(CancelAllOrder::class, (new CancelAllOrderRequest())->setSymbol('BTCUSDT'))->execute();

echo "Return code: {$response->getReturnCode()} \n";
echo "Return message: {$response->getReturnMessage()} \n";

/** @var ICancelAllOrderResponseInterface $cancelOrdersResponse */
$cancelOrdersResponse = $response->getResult();

/** @var ICancelAllOrderResponseItemInterface $order */
foreach ($cancelOrdersResponse->getCancelOrdersList() as $order) {
    echo "--- \n";
    echo "Order ID: {$order->getOrderId()} \n";
    echo "Order Link ID: {$order->getOrderLinkId()} \n";
}
        
/**
* Return code: 0
* Return message: OK
* ---
* Order ID: 822d55c3-7aa0-4978-b34d-597cdf0191b3 
* Order Link ID:  
* --- 
* Order ID: 85190d8e-60da-4992-8d66-7c962ed47e0b 
* Order Link ID:  
* --- 
* Order ID: b4101ef8-1d4e-46f4-8dbd-e0dbd4f8d196 
* Order Link ID:  
*/

```

<br />

<h3 align="left" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderRequestInterface
{
    /**
     * Торговая пара
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Закрыть все ордера по базовой монете 
     * @param string $baseCoin
     * @return self
     */
    public function setBaseCoin(string $baseCoin): self;
    public function getBaseCoin(): string;

    /**
     *  Закрыть все ордера по расчетной монете
     * @param string $settleCoin
     * @return self
     */
    public function setSettleCoin(string $settleCoin): self;
    public function getSettleCoin(): string;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Request\CancelAllOrderRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязтельно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ICancelAllOrderRequestInterface::setSymbol(string $symbol)</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>ICancelAllOrderRequestInterface::setBaseCoin(string $baseCoin)</td>
    <td>НЕТ</td>
    <td>Закрыть все ордера по базовой монете</td>
  </tr>
  <tr>
    <td>ICancelAllOrderRequestInterface::setSettleCoin(string $settleCoin)</td>
    <td>НЕТ</td>
    <td>Закрыть все ордера по расчетной монете</td>
  </tr>
</table>

<br />


<h3 align="left" width="100%"><b>СТРУКТУРА ОТВЕТА</b></h3>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderResponseInterface
{
    /**
     * @return ICancelAllOrderResponseItemInterface[]
     */
    public function getCancelOrdersList(): array;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>ИНТЕРФЕЙС</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Response\CancelAllOrderResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ICancelAllOrderResponseItemInterface::getCancelOrdersList()</td>
    <td>ICancelAllOrderResponseItemInterface[]</td>
    <td>Список отмененных ордеров</td>
  </tr>
</table>

<br />

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderResponseItemInterface
{
    /**
     * Order id
     * @return string
     */
    public function getOrderId(): string;

    /**
     * Пользовательский ID ордера
     * @return string
     */
    public function getOrderLinkId(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderResponseItemInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Response\CancelAllOrderResponseItem::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ICancelAllOrderResponseItemInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>ICancelAllOrderResponseItemInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский ID ордера</td>
  </tr>
</table>

---