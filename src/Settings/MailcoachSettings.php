<?php

namespace Astrogoat\Mailcoach\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class MailcoachSettings extends AppSettings
{
    public string $api_token;
    public string $api_endpoint;
    public string $promotion_bar_list_uuid;
    public string $promotion_bar_text;
    public string $promotion_bar_input_placeholder;
    public string $promotion_bar_button_text;
    public string $promotion_bar_success_message;
    public string $promotion_bar_background_color;
    public string $promotion_bar_text_color;
    public string $promotion_bar_input_background_color;
    public string $promotion_bar_button_background_color;
    public string $promotion_bar_button_text_color;
    public string $promotion_bar_radius;

    public function rules(): array
    {
        return [
            'api_token' => Rule::requiredIf($this->enabled === true),
            'api_endpoint' => Rule::requiredIf($this->enabled === true),
        ];
    }

    public function description(): string
    {
        return 'Interact with Mailcoach.';
    }

    public static function group(): string
    {
        return 'mailcoach';
    }

    public function hidden(): array
    {
        return $this->getPublicPropertiesStartingWith('promotion_bar_');
    }

    public function labels(): array
    {
        return [
            'api_token' => 'API Token',
            'api_endpoint' => 'API Endpoint',
        ];
    }
}
