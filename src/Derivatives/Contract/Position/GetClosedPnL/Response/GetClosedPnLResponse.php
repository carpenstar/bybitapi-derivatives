<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Response;


use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseItemInterface;

class GetClosedPnLResponse extends AbstractResponse implements IGetClosedPnLResponseInterface
{
    /**
     * @var string
     */
    private string $nextPageCursor;

    /**
     * @var IGetClosedPnLResponseItemInterface[]
     */
    private EntityCollection $list;

    public function __construct(array $data)
    {
        $this->nextPageCursor = $data['nextPageCursor'];

        $list = new EntityCollection();

        if (!empty($data['list'])) {
            array_map(function ($item) use ($list) {
                $list->push(ResponseDtoBuilder::make(GetClosedPnLResponseItem::class, $item));
            }, $data['list']);
        }

        $this->list = $list;
    }

    /**
     * @return IGetClosedPnLResponseItemInterface[]
     */
    public function getClosedPnlList(): array
    {
        return $this->list->all();
    }

    public function getNextPageCursor(): string
    {
        return $this->nextPageCursor;
    }
}