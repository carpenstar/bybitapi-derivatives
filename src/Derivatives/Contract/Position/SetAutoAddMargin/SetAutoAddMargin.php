<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin;

use Carpenstar\ByBitAPI\Core\Endpoints\PrivateEndpoint;
use Carpenstar\ByBitAPI\Core\Interfaces\IPostEndpointInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Request\SetAutoAddMarginRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Response\SetAutoAddMarginResponse;

class SetAutoAddMargin extends PrivateEndpoint implements IPostEndpointInterface
{
    protected function getEndpointUrl(): string
    {
        return "/contract/v3/private/position/set-auto-add-margin";
    }

    protected function getResponseClassname(): string
    {
        return SetAutoAddMarginResponse::class;
    }

    protected function getRequestClassname(): string
    {
        return SetAutoAddMarginRequest::class;
    }
}