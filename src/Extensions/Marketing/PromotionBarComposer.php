<?php

namespace Astrogoat\Mailcoach\Extensions\Marketing;

use Illuminate\View\View;
use Astrogoat\Mailcoach\Settings\MailcoachSettings;
use Astrogoat\Marketing\Settings\MarketingSettings;

class PromotionBarComposer
{
    public function __construct(
        protected MailcoachSettings $mailcoachSettings,
        protected MarketingSettings $marketingSettings
    )
    {
        //
    }

    public function compose(View $view): void
    {
        if (
            app('lego')->selectedSettingExtensionIs('marketing', \Astrogoat\Marketing\Settings\Peripherals\PromotionBar::class, 'mailcoach')
            && $this->marketingSettings->enabled
        ) {
            $view->setPath(view('mailcoach::extensions.marketing.includes.promotion-bar')->getPath());
            $view->with($this->mailcoachSettings->toArray());
        }
    }
}
