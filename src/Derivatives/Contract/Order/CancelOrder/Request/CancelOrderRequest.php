<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces\ICancelOrderRequestInterface;

class CancelOrderRequest extends AbstractParameters implements ICancelOrderRequestInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Order id. Either orderId or orderLinkId is required
     * @var string $orderId
     */
    protected string $orderId;

    /**
     * User customised order id. Either orderId or orderLinkId is required
     * @var string $orderLinkId
     */
    protected string $orderLinkId;

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return CancelOrderRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
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
     * @return CancelOrderRequest
     */
    public function setOrderId(string $orderId): self
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
     * @return CancelOrderRequest
     */
    public function setOrderLinkId(string $orderLinkId): self
    {
        $this->orderLinkId = $orderLinkId;
        return $this;
    }
}
