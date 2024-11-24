<?php

namespace Astrogoat\Mailcoach\Extensions\Marketing;

use Illuminate\Validation\Rule;
use Astrogoat\Marketing\Marketing;
use Helix\Lego\Settings\Peripherals\Peripheral;

class PromotionBar extends Peripheral
{
    public function rules(): array
    {
        return [
            'settings.promotion_bar_list_uuid' => Rule::requiredIf($this->settings->enabled === true),
            'settings.promotion_bar_text' => Rule::requiredIf($this->settings->enabled === true),
            'settings.promotion_bar_input_placeholder' => Rule::requiredIf($this->settings->enabled === true),
            'settings.promotion_bar_button_text' => Rule::requiredIf($this->settings->enabled === true),
            'settings.promotion_bar_success_message' => Rule::requiredIf($this->settings->enabled === true),
            'settings.promotion_bar_background_color' => Rule::requiredIf($this->settings->enabled === true),
            'settings.promotion_bar_text_color' => Rule::requiredIf($this->settings->enabled === true),
            'settings.promotion_bar_input_background_color' => Rule::requiredIf($this->settings->enabled === true),
            'settings.promotion_bar_button_background_color' => Rule::requiredIf($this->settings->enabled === true),
            'settings.promotion_bar_button_text_color' => Rule::requiredIf($this->settings->enabled === true),
            'settings.promotion_bar_radius' => Rule::requiredIf($this->settings->enabled === true),
        ];
    }

    public function getLists()
    {
        return app(Marketing::class)->driver('mailcoach')->emailLists();
    }

    public function render()
    {
        return view('mailcoach::extensions.marketing.settings.promotion-bar');
    }
}
