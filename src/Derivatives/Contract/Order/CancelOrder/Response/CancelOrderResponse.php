<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces\ICancelOrderResponseInterface;

class CancelOrderResponse extends AbstractResponse implements ICancelOrderResponseInterface
{
    /**
     * Order ID
     * @var string $orderId
     */
    private string $orderId;

    /**
     * User customised order id
     * @var string $orderLinkId
     */
    private string $orderLinkId;

    public function __construct(array $data)
    {
        $this
            ->setOrderId($data['orderId'])
            ->setOrderLinkId($data['orderLinkId']);
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return CancelOrderResponse
     */
    private function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderLinkId(): string
    {
        return $this->orderLinkId;
    }

    /**
     * @param string $orderLinkId
     * @return CancelOrderResponse
     */
    private function setOrderLinkId(string $orderLinkId): self
    {
        $this->orderLinkId = $orderLinkId;
        return $this;
    }
}
