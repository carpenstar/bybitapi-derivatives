<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderResponseItemInterface;

class CancelAllOrderResponseItem extends AbstractResponse implements ICancelAllOrderResponseItemInterface
{
    /**
     * Order id
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
        $this->orderId = $data['orderId'];
        $this->orderLinkId = $data['orderLinkId'];
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @return string
     */
    public function getOrderLinkId(): string
    {
        return $this->orderLinkId;
    }
}
