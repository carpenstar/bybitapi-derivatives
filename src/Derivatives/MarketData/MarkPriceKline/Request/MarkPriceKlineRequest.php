<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Request;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Helpers\StringHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces\IMarkPriceKlineRequestInterface;

class MarkPriceKlineRequest extends AbstractParameters implements IMarkPriceKlineRequestInterface
{
    /**
     * Product type. linear
     * @var string $category
     */
    protected string $category;

    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Kline interval. 1 3 5 15 30 60 120 240 360 720 D M W
     * @var string $interval
     */
    protected string $interval;

    /**
     * The start datetime string
     * @var string $start
     */
    protected int $start;

    /**
     * The end datetime string
     * @var string $end
     */
    protected int $end;

    /**
     * Limit for data size per page. [1, 200]. Default: 200
     * @var int $limit
     */
    protected int $limit = 200;

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $symbol
     * @return MarkPriceKlineRequest
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
     * @param string $interval
     * @return MarkPriceKlineRequest
     */
    public function setInterval(string $interval): self
    {
        $this->interval = StringHelper::clearInterval($interval);
        return $this;
    }

    /**
     * @return string
     */
    public function getInterval(): string
    {
        return $this->interval;
    }

    /**
     * @param string $start
     * @return MarkPriceKlineRequest
     */
    public function setStart(string $start): self
    {
        $this->start = DateTimeHelper::makeTimestampFromDateString($start);
        return $this;
    }

    /**
     * @return int
     */
    public function getStart(): int
    {
        return $this->start;
    }

    /**
     * @param string $end
     * @return MarkPriceKlineRequest
     */
    public function setEnd(string $end): self
    {
        $this->end = DateTimeHelper::makeTimestampFromDateString($end);
        return $this;
    }

    /**
     * @return int
     */
    public function getEnd(): int
    {
        return $this->end;
    }

    /**
     * @param int $limit
     * @return MarkPriceKlineRequest
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