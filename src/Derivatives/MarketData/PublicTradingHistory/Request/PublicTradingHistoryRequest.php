<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryRequestInterface;

class PublicTradingHistoryRequest extends AbstractParameters implements IPublicTradingHistoryRequestInterface
{
    /**
     * Product type.linear
     * @var string $category
     */
    protected string $category = "linear"; // At current time, support linear type only

    /**
     * Symbol name
     * @var string
     */
    protected string $symbol;

    /**
     * Limit for data size per page. [1, 1000]. Default: 500
     * @var int $limit
     */
    protected int $limit = 500;

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $symbol
     * @return PublicTradingHistoryRequest
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
     * @return PublicTradingHistoryRequest
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
