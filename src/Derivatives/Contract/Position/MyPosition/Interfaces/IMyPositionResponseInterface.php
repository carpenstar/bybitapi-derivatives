<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionResponseInterface
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

    /** @return IMyPositionResponseItemInterface[] */
    public function getPositionList(): array;
}