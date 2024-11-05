<?php

namespace Astrogoat\Mailcoach\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class MailcoachSettings extends AppSettings
{
    // public string $url;

    public function rules(): array
    {
        // return [
        //     'url' => Rule::requiredIf($this->enabled === true),
        // ];
    }

    public function description(): string
    {
        return 'Interact with Mailcoach.';
    }

    public static function group(): string
    {
        return 'mailcoach';
    }
}
