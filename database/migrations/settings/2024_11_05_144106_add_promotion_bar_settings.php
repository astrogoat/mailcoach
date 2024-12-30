<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('mailcoach.promotion_bar_input_text_color', '#000');
    }

    public function down()
    {
        $this->migrator->delete('mailcoach.promotion_bar_input_text_color');
    }
};
