<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Response;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseItemInterface;

class WalletBalanceResponse extends AbstractResponse implements IWalletBalanceResponseInterface
{
    /**
     * @var IWalletBalanceResponseItemInterface[]
     */
    private EntityCollection $list;

    public function __construct(array $data)
    {
        $list = new EntityCollection();

        if (!empty($data['list'])) {
            array_map(function ($item) use ($list) {
                $list->push(ResponseDtoBuilder::make(WalletBalanceResponseItem::class, $item));
            }, $data['list']);
        }

        $this->list = $list;
    }

    /**
     * @return IWalletBalanceResponseItemInterface[]
     */
    public function getBalances(): array
    {
        return $this->list->all();
    }
}
