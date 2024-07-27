<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Response;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionResponseItemInterface;

class MyPositionResponse extends AbstractResponse implements IMyPositionResponseInterface
{
    /** @var string $category */
    private string $category;

    /** @var string $nextPageCursor */
    private string $nextPageCursor;

    /** @var IMyPositionResponseItemInterface[] $list*/
    private EntityCollection $list;

    public function __construct(array $data)
    {
        $this->nextPageCursor = $data['nextPageCursor'];
        $this->category = $data['category'];

        $list = new EntityCollection();

        if (!empty($data['list'])) {
            array_map(function ($item) use ($list) {
                $list->push(ResponseDtoBuilder::make(MyPositionResponseItem::class, $item));
            }, $data['list']);
        }

        $this->list = $list;
    }

    public function getNextPageCursor(): string
    {
        return $this->nextPageCursor;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    /** @return IMyPositionResponseItemInterface[] */
    public function getPositionList(): array
    {
        return $this->list->all();
    }
}
