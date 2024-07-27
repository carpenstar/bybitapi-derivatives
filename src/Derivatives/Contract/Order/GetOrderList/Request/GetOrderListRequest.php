<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces\IGetOrderListRequestInterface;

class GetOrderListRequest extends AbstractParameters implements IGetOrderListRequestInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Order id
     * @var string $orderId
     */
    protected string $orderId;

    /**
     * User customised order id
     * @var string $orderLinkId
     */
    protected string $orderLinkId;

    /**
     * Order status. Return all status orders if not passed
     * @var string $orderStatus
     */
    protected string $orderStatus;

    /**
     * Order,StopOrder
     * @var string $orderFilter
     */
    protected string $orderFilter;

    /**
     * Limit for data size per page. [1, 50]. Default: 20
     * @var int $limit
     */
    protected int $limit = 20;

    /**
     * Cursor. Use the nextPageCursor token from the response to retrieve the next page of the result set
     * @var string $cursor
     */
    protected string $cursor;

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return GetOrderListRequest
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
     * @return GetOrderListRequest
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
     * @return GetOrderListRequest
     */
    public function setOrderLinkId(string $orderLinkId): self
    {
        $this->orderLinkId = $orderLinkId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderStatus(): string
    {
        return $this->orderStatus;
    }

    /**
     * @param string $orderStatus
     * @return GetOrderListRequest
     */
    public function setOrderStatus(string $orderStatus): self
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderFilter(): string
    {
        return $this->orderFilter;
    }

    /**
     * @param string $orderFilter
     * @return GetOrderListRequest
     */
    public function setOrderFilter(string $orderFilter): self
    {
        $this->orderFilter = $orderFilter;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return GetOrderListRequest
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return string
     */
    public function getCursor(): string
    {
        return $this->cursor;
    }

    /**
     * @param string $cursor
     * @return GetOrderListRequest
     */
    public function setCursor(string $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }
}
