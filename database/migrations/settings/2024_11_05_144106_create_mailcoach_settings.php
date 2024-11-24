<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('mailcoach.enabled', false);
        $this->migrator->add('mailcoach.api_token', '');
        $this->migrator->add('mailcoach.api_endpoint', '');
        $this->migrator->add('mailcoach.promotion_bar_list_uuid', '');
        $this->migrator->add('mailcoach.promotion_bar_text', 'Sign up for the mailing list.');
        $this->migrator->add('mailcoach.promotion_bar_input_placeholder', 'Email address');
        $this->migrator->add('mailcoach.promotion_bar_button_text', 'Sign up');
        $this->migrator->add('mailcoach.promotion_bar_success_message', 'Thank you for signing up!');
        $this->migrator->add('mailcoach.promotion_bar_background_color', '#121826');
        $this->migrator->add('mailcoach.promotion_bar_text_color', '#FFF');
        $this->migrator->add('mailcoach.promotion_bar_input_background_color', '#FFF');
        $this->migrator->add('mailcoach.promotion_bar_button_background_color', '#4e46dc');
        $this->migrator->add('mailcoach.promotion_bar_button_text_color', '#FFF');
        $this->migrator->add('mailcoach.promotion_bar_radius', 'md');
    }

    public function down()
    {
        $this->migrator->delete('mailcoach.enabled');
        $this->migrator->delete('mailcoach.api_token');
        $this->migrator->delete('mailcoach.api_endpoint');
        $this->migrator->delete('mailcoach.promotion_bar_list_uuid');
        $this->migrator->delete('mailcoach.promotion_bar_text');
        $this->migrator->delete('mailcoach.promotion_bar_input_placeholder');
        $this->migrator->delete('mailcoach.promotion_bar_button_text');
        $this->migrator->delete('mailcoach.promotion_bar_success_message');
        $this->migrator->delete('mailcoach.promotion_bar_background_color');
        $this->migrator->delete('mailcoach.promotion_bar_text_color');
        $this->migrator->delete('mailcoach.promotion_bar_input_background_color');
        $this->migrator->delete('mailcoach.promotion_bar_button_background_color');
        $this->migrator->delete('mailcoach.promotion_bar_button_text_color');
        $this->migrator->delete('mailcoach.promotion_bar_radius');
    }
};
