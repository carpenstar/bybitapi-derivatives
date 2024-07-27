<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Request;

use Carpenstar\ByBitAPI\Core\Objects\AbstractParameters;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceRequestInterface;

class WalletBalanceRequest extends AbstractParameters implements IWalletBalanceRequestInterface
{
    protected string $coin;

    public function setCoin(string $symbol): self
    {
        $this->coin = $symbol;
        return $this;
    }

    public function getCoin(): string
    {
        return $this->coin;
    }
}
