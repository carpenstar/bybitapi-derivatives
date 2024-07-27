<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces;

interface IWalletBalanceRequestInterface
{
    public function getCoin(): string;
}
