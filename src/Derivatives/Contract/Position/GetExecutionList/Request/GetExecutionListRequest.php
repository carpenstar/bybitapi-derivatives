<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Request;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces\IGetExecutionListRequestInterface;

class GetExecutionListRequest extends AbstractParameters implements IGetExecutionListRequestInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    protected string $symbol;

    /**
     * Order ID. Return all records if not passed
     * @var string $orderId
     */
    protected string $orderId;

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
     * Execution type
     * @var string $execType
     */
    protected string $execType;

    /**
     * Limit for data size per page. [1, 100]. Default: 50
     * @var int $limit
     */
    protected int $limit = 50;

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
     * @return GetExecutionListRequest
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
     * @return GetExecutionListRequest
     */
    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;
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
     * @param int $startTime
     * @return GetExecutionListRequest
     */
    public function setStartTime(int $startTime): self
    {
        $this->startTime = DateTimeHelper::makeFromTimestamp($startTime);
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
     * @param int $endTime
     * @return GetExecutionListRequest
     */
    public function setEndTime(int $endTime): self
    {
        $this->endTime = DateTimeHelper::makeFromTimestamp($endTime);
        return $this;
    }

    /**
     * @return string
     */
    public function getExecType(): string
    {
        return $this->execType;
    }

    /**
     * @param string $execType
     * @return GetExecutionListRequest
     */
    public function setExecType(string $execType): self
    {
        $this->execType = $execType;
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
     * @return GetExecutionListRequest
     */
    public function setCursor(string $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }


}