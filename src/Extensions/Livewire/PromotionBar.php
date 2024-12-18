<?php

namespace Astrogoat\Mailcoach\Extensions\Livewire;

use Astrogoat\Mailcoach\Settings\MailcoachSettings;
use Astrogoat\Marketing\Marketing;
use Livewire\Component;

class PromotionBar extends Component
{
    public string $email = '';
    public bool $signedUp = false;

    private MailcoachSettings $settings;

    public function boot()
    {
        $this->settings = app(MailcoachSettings::class);
    }

    public function subscribe()
    {
        app(Marketing::class)
            ->driver('mailcoach')
            ->subscribe($this->settings->promotion_bar_list_uuid, [
                'email' => $this->email,
            ]);

        $this->signedUp = true;
    }

    public function render()
    {
        return view('mailcoach::extensions.marketing.livewire.promotion-bar');
    }
}
