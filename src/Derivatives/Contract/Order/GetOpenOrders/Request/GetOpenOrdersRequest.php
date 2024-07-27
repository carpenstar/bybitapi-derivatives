<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersRequestInterface;

class GetOpenOrdersRequest extends AbstractParameters implements IGetOpenOrdersRequestInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Base coin
     * @var string $baseCoin
     */
    protected string $baseCoin;

    /**
     * Settle coin. One of symbol,baseCoin and settleCoin is required. Priority: symbol > baseCoin > settleCoin
     * @var string $settleCoin
     */
    protected string $settleCoin;

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
     * Order: active order, StopOrder: conditional order
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
     * @return GetOpenOrdersRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseCoin(): string
    {
        return $this->baseCoin;
    }

    /**
     * @param string $baseCoin
     * @return GetOpenOrdersRequest
     */
    public function setBaseCoin(string $baseCoin): self
    {
        $this->baseCoin = $baseCoin;
        return $this;
    }

    /**
     * @return string
     */
    public function getSettleCoin(): string
    {
        return $this->settleCoin;
    }

    /**
     * @param string $settleCoin
     * @return GetOpenOrdersRequest
     */
    public function setSettleCoin(string $settleCoin): self
    {
        $this->settleCoin = $settleCoin;
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
     * @return GetOpenOrdersRequest
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
     * @return GetOpenOrdersRequest
     */
    public function setOrderLinkId(string $orderLinkId): self
    {
        $this->orderLinkId = $orderLinkId;
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
     * @return GetOpenOrdersRequest
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
     * @return GetOpenOrdersRequest
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
     * @return GetOpenOrdersRequest
     */
    public function setCursor(string $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }



}
