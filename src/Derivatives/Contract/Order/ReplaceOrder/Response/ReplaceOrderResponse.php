<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces\IReplaceOrderResponseInterface;

class ReplaceOrderResponse extends AbstractResponse implements IReplaceOrderResponseInterface
{
    private string $orderId;
    private string $orderLinkId;

    public function __construct(array $data)
    {
        $this->orderId = $data['orderId'];
        $this->orderLinkId = $data['orderLinkId'];
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function getOrderLinkId(): string
    {
        return $this->orderLinkId;
    }
}