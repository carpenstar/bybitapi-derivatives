<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLRequestInterface
{
    /**
     * Symbol name
     *
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * The start timestamp (ms)
     * startTime and endTime are not passed, return 7 days by default
     * Only startTime is passed, return range between startTime and startTime+7 days
     * Only endTime is passed, return range between endTime-7 days and endTime
     * If both are passed,the rule is endTime - startTime <= 7 days
     *
     * @param string $startTime
     * @return self
     */
    public function setStartTime(string $startTime): self;
    public function getStartTime(): \DateTime;

    /**
     * The end timestamp
     *
     * @param string $endTime
     * @return self
     */
    public function setEndTime(string $endTime): self;
    public function getEndTime(): \DateTime;

    /**
     * Limit for data size per page. [1, 200]. Default: 50
     *
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;

    /**
     * Cursor. Use the nextPageCursor token from the response to retrieve the next page of the result set
     *
     * @param string $cursor
     * @return self
     */
    public function setCursor(string $cursor): self;
    public function getCursor(): string;
}