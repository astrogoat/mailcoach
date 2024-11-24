<?php

namespace Astrogoat\Mailcoach;

use Astrogoat\Marketing\MarketingDriver;

class MailcoachDriver implements MarketingDriver
{
    private \Spatie\MailcoachSdk\Mailcoach $api;

    public function __construct(protected string $apiToken, protected string $apiEndpoint)
    {
        $this->api = new \Spatie\MailcoachSdk\Mailcoach($this->apiToken, $this->apiEndpoint);
    }

    public function subscribe(string $emailListId, array $attributes): bool
    {
        $this->api->createSubscriber($emailListId, $attributes);

        return true;
    }

    public function emailLists(array $attributes = []): \Spatie\MailcoachSdk\Support\PaginatedResults
    {
        return $this->api->emailLists($attributes);
    }
}
