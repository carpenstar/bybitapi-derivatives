<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderResponseInterface;

class PlaceOrderResponse extends AbstractResponse implements IPlaceOrderResponseInterface
{
    /**
     * @var string $orderId
     */
    private string $orderId;

    /**
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
     * @param string $orderId
     * @return self
     */
    private function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    /**
     * @param string $orderLinkId
     * @return PlaceOrderResponse
     */
    private function setOrderLinkId(string $orderLinkId): self
    {
        $this->orderLinkId = $orderLinkId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderLinkId(): string
    {
        return $this->orderLinkId;
    }
}
