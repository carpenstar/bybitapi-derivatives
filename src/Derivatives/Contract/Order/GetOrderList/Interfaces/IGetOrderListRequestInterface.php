<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

interface IGetOrderListRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Order id
     * @param string $orderId
     * @return self
     */
    public function setOrderId(string $orderId): self;
    public function getOrderId(): string;

    /**
     * User customised order id
     * @param string $orderLinkId
     * @return self
     */
    public function setOrderLinkId(string $orderLinkId): self;
    public function getOrderLinkId(): string;

    /**
     * Order status. Return all status orders if not passed
     * @param string $orderStatus
     * @return self
     */
    public function setOrderStatus(string $orderStatus): self;
    public function getOrderStatus(): string;

    /**
     * Order,StopOrder
     * @param string $orderFilter
     * @return self
     */
    public function setOrderFilter(string $orderFilter): self;
    public function getOrderFilter(): string;

    /**
     * Limit for data size per page. [1, 50]. Default: 20
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;

    /**
     * Cursor. Use the nextPageCursor token from the response to retrieve the next page of the result set
     * @param string $cursor
     * @return self
     */
    public function setCursor(string $cursor): self;
    public function getCursor(): string;
}