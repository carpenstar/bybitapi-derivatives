<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces;


use Carpenstar\ByBitAPI\Spot\Account\WalletBalance\Interfaces\IWalletBalanceResponseItemInterfaces;

interface IWalletBalanceResponseInterface
{
    /**
     * @return IWalletBalanceResponseItemInterfaces[]
     */
    public function getBalances(): array;
}