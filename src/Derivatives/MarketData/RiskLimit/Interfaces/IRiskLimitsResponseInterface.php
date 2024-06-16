<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces;

interface IRiskLimitsResponseInterface
{
    /**
     * Cursor. Use the nextPageCursor token from the response to retrieve the next page of the result set
     * @param string $cursor
     * @return mixed
     */
    public function getCursor(string $cursor): ?string;

    /** @return IRiskLimitsResponseItemInterface[] */
    public function getRiskLimitList(): array;
}