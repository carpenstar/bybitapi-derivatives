<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Response;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseItemInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces\IGetOrderListResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces\IGetOrderListResponseItemInterface;

class GetOrderListResponse extends AbstractResponse implements IGetOrderListResponseInterface
{
    /**
     * Product type
     * @var string
     */
    private string $category;

    /**
     * Cursor. Used to pagination
     * @var string
     */
    private string $nextPageCursor;

    /**
     * @var IGetOrderListResponseItemInterface[]
     */
    private  $list;

    public function __construct(array $data)
    {
        $this->category = $data['category'];
        $this->nextPageCursor = $data['nextPageCursor'];

        $list = new EntityCollection();

        if (!empty($data['list'])) {
            array_map(function ($item) use ($list) {
                $list->push(ResponseDtoBuilder::make(GetOrderListResponseItem::class, $item));
            }, $data['list']);
        }

        $this->list = $list;
    }

    /**
     * @return IGetOpenOrdersResponseItemInterface[]
     */
    public function getOrderList(): array
    {
        return $this->list->all();
    }

    public function getNextPageCursor(): string
    {
        return $this->nextPageCursor;
    }

    public function getCategory(): string
    {
        return $this->category;
    }
}