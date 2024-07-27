<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersRequestInterface
{
    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;


    /**
     * Base coin
     * @param string $baseCoin
     * @return self
     */
    public function setBaseCoin(string $baseCoin): self;
    public function getBaseCoin(): string;

    /**
     * Settle coin. One of symbol,baseCoin and settleCoin is required. Priority: symbol > baseCoin > settleCoin
     * @param string $settleCoin
     * @return self
     */
    public function setSettleCoin(string $settleCoin): self;
    public function getSettleCoin(): string;


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
     * Order: active order, StopOrder: conditional order
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
