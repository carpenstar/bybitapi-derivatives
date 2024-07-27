<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Helpers\StringHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces\IOpenInterestRequestInterface;

class OpenInterestRequest extends AbstractParameters implements IOpenInterestRequestInterface
{
    /**
     *
     * @var string $category
     */
    protected string $category = "linear";

    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Interval. 5min 15min 30min 1h 4h 1d
     * @var string $interval
     */
    protected string $interval;

    /**
     * The start datetime
     * @var string $start
     */
    protected int $start;

    /**
     * The end datetime
     * @var string $end
     */
    protected int $end;

    /**
     * Limit for data size per page. [1, 200]. Default: 50
     * @var int $limit
     */
    protected int $limit = 50;

    /**
     * Cursor. Used for pagination
     * @var string $cursor
     */
    protected string $cursor;

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $symbol
     * @return OpenInterestRequest
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
     * @return OpenInterestRequest
     */
    public function setInterval(string $interval): self
    {
        $this->interval = StringHelper::clearInterval($interval) . "min";
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
     * @return OpenInterestRequest
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
     * @return OpenInterestRequest
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
     * @return OpenInterestRequest
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

    /**
     * @param string $cursor
     * @return OpenInterestRequest
     */
    public function setCursor(string $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    /**
     * @return string
     */
    public function getCursor(): string
    {
        return $this->cursor;
    }
}