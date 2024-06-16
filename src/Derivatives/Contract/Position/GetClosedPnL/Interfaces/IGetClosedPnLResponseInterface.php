<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLResponseInterface
{
    /**
     * Cursor. Used to pagination
     * @return string
     */
    public function getNextPageCursor(): string;

    /**
     * @return IGetClosedPnLResponseItemInterface[]
     */
    public function getClosedPnlList(): array;
}