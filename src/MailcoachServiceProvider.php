<?php

namespace Astrogoat\Mailcoach;

use Livewire\Livewire;
use Helix\Lego\Apps\App;
use Astrogoat\Marketing\Marketing;
use Illuminate\Support\Facades\View;
use Helix\Lego\Apps\AppPackageServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Astrogoat\Mailcoach\Settings\MailcoachSettings;
use Astrogoat\Mailcoach\Extensions\Marketing\PromotionBar;
use Astrogoat\Mailcoach\Extensions\Marketing\PromotionBarComposer;
use Astrogoat\Marketing\Settings\Peripherals\PromotionBar as MarketingPromotionBar;

class MailcoachServiceProvider extends AppPackageServiceProvider
{
    public function registerApp(App $app): App
    {
        return $app
            ->name('mailcoach')
            ->settings(MailcoachSettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations',
                __DIR__ . '/../database/migrations/settings',
            ])
            ->callAfterRegistering(function (App $app) {
                app(Marketing::class)->extend('mailcoach', function ($app) {
                    $settings = app(MailcoachSettings::class);

                    return new MailcoachDriver($settings->api_token, $settings->api_endpoint);
                });
            })
            ->publishOnInstall(['mailcoach-assets'])
            ->extendSetting(MarketingPromotionBar::class, PromotionBar::class);
    }

    public function configurePackage(Package $package): void
    {
        $package->name('mailcoach')->hasConfigFile()->hasViews();
    }

    public function bootingPackage(): void
    {
        Livewire::component('astrogoat.mailcoach.extensions.marketing.promotion-bar', PromotionBar::class);
        Livewire::component('astrogoat.mailcoach.extensions.marketing.livewire.promotion-bar', \Astrogoat\Mailcoach\Extensions\Livewire\PromotionBar::class);

        View::composer('marketing::includes.promotional-bar', PromotionBarComposer::class);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/mailcoach'),
        ], 'mailcoach-assets');
    }
}
