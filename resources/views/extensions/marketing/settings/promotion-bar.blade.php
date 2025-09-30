<div class="gap-4 flex flex-col">
    <x-fab::forms.select
        label="List"
        wire:model="settings.promotion_bar_list_uuid"
    >
        <option value="">-- Select a list --</option>
        @foreach($this->getLists() as $list)
            <option value="{{ $list->uuid }}">{{ $list->name }}</option>
        @endforeach
    </x-fab::forms.select>

    <div class="grid grid-cols-2 gap-4">
        <x-fab::forms.input
            label="Text"
            wire:model="settings.promotion_bar_text"
        />

        <x-fab::forms.input
            label="Input placeholder"
            wire:model="settings.promotion_bar_input_placeholder"
        />

        <x-fab::forms.input
            label="Button text"
            wire:model="settings.promotion_bar_button_text"
        />

        <x-fab::forms.input
            label="Successful sign up message"
            wire:model="settings.promotion_bar_success_message"
        />
    </div>


    <hr style="margin: 20px 0 10px 0">

    <div class="grid grid-cols-2 gap-4">
        <x-lego::color-picker
            label="Background Color"
            :color="data_get($this, 'settings.promotion_bar_background_color')"
            x-on:color-picker-change="$wire.set('settings.promotion_bar_background_color', $event.detail)"
        />

        <x-lego::color-picker
            label="Text Color"
            :color="data_get($this, 'settings.promotion_bar_text_color')"
            x-on:color-picker-change="$wire.set('settings.promotion_bar_text_color', $event.detail)"
            position="left"
        />

        <x-lego::color-picker
            label="Input Background Color"
            :color="data_get($this, 'settings.promotion_bar_input_background_color')"
            x-on:color-picker-change="$wire.set('settings.promotion_bar_input_background_color', $event.detail)"
        />

        <x-lego::color-picker
            label="Input Text Color"
            :color="data_get($this, 'settings.promotion_bar_input_text_color')"
            x-on:color-picker-change="$wire.set('settings.promotion_bar_input_text_color', $event.detail)"
        />

        <x-lego::color-picker
            label="Button Background Color"
            :color="data_get($this, 'settings.promotion_bar_button_background_color')"
            x-on:color-picker-change="$wire.set('settings.promotion_bar_button_background_color', $event.detail)"
            position="left"
        />

        <x-lego::color-picker
            label="Button Text Color"
            :color="data_get($this, 'settings.promotion_bar_button_text_color')"
            x-on:color-picker-change="$wire.set('settings.promotion_bar_button_text_color', $event.detail)"
        />

    </div>
        <x-fab::forms.select
            label="Border Radius"
            wire:model="settings.promotion_bar_radius"
        >
            <option value="mailcoach-rounded-none">None</option>
            <option value="mailcoach-rounded-sm">Small</option>
            <option value="mailcoach-rounded-md">Medium</option>
            <option value="mailcoach-rounded-lg">Large</option>
            <option value="mailcoach-rounded-xl">Extra Large</option>
        </x-fab::forms.select>
</div>
