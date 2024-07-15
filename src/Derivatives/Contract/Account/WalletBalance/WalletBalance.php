<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IGetEndpointInterface;
use Carpenstar\ByBitAPI\Core\Objects\StubQueryBag;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Response\WalletBalanceResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Request\WalletBalanceRequest;

class WalletBalance extends PrivateEndpoint implements IGetEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/account/wallet/balance";
    }

    protected function getRequestClassname(): string
    {
        return WalletBalanceRequest::class;
    }

    protected function getResponseClassnameByCondition(array &$apiData = null): string
    {
        return WalletBalanceResponse::class;
    }
}