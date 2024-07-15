<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Request;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLRequestInterface;

class GetClosedPnLRequest extends AbstractParameters implements IGetClosedPnLRequestInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * The start timestamp (ms)
     * @var \DateTime $startTime
     */
    protected \DateTime $startTime;

    /**
     * The end timestamp (ms)
     * @var \DateTime $endTime
     */
    protected \DateTime $endTime;

    /**
     * Limit for data size per page. [1, 200]. Default: 50
     * @var int $limit
     */
    protected int $limit = 50;

    /**
     * Cursor. Use the nextPageCursor token from the response to retrieve the next page of the result set
     * @var string $cursor
     */
    protected string $cursor;

    public function __construct()
    {
        $this->setRequiredField('symbol');
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return GetClosedPnLRequest
     */
    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime(): \DateTime
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return GetClosedPnLRequest
     */
    public function setStartTime(string $startTime): self
    {
        $this->startTime = DateTimeHelper::makeDateTimeFromDateString($startTime);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime(): \DateTime
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return GetClosedPnLRequest
     */
    public function setEndTime(string $endTime): self
    {
        $this->endTime = DateTimeHelper::makeDateTimeFromDateString($endTime);
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
     * @return GetClosedPnLRequest
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
     * @return GetClosedPnLRequest
     */
    public function setCursor(string $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }


}