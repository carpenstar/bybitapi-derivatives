<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookRequestInterface;

class OrderBookRequest extends AbstractParameters implements IOrderBookRequestInterface
{
    /**
     * @var string $category
     */
    protected string $category = "linear";

    /**
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * @var int $limit
     */
    protected int $limit = 25;

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $symbol
     * @return OrderBookRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param int $limit
     * @return OrderBookRequest
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
}
