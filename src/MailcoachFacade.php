<?php

namespace Astrogoat\Mailcoach;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Mailcoach\Mailcoach
 */
class MailcoachFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mailcoach';
    }
}
