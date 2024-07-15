<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListRequestInterface
{
    /**
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * @param string $orderId
     * @return self
     */
    public function setOrderId(string $orderId): self;
    public function getOrderId(): string;

    /**
     * @param int $startTime
     * @return self
     */
    public function setStartTime(int $startTime): self;
    public function getStartTime(): \DateTime;

    /**
     * @param int $endTime
     * @return self
     */
    public function setEndTime(int $endTime): self;
    public function getEndTime(): \DateTime;

    /**
     * @param string $execType
     * @return self
     */
    public function setExecType(string $execType): self;
    public function getExecType(): string;

    /**
     * @param int $limit
     * @return self
     */
    public function setLimit(int $limit): self;
    public function getLimit(): int;

    /**
     * @param string $cursor
     * @return self
     */
    public function setCursor(string $cursor): self;
    public function getCursor(): string;
}