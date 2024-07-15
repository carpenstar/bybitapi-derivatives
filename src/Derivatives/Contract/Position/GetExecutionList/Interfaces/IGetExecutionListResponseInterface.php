<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListResponseInterface
{
    /**
     * Product type
     * @return string
     */
    public function getCategory(): string;

    /**
     * Cursor. Used to pagination
     * @return string
     */
    public function getNextPageCursor(): string;

    /**
     * @return IGetExecutionListResponseItemInterface[]
     */
    public function getExecutionList(): array;
}