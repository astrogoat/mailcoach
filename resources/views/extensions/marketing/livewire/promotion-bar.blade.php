<div>
    @if($this->settings->enabled)
        <link rel="stylesheet" href="{{ mix('css/mailcoach.css', "vendor/mailcoach") }}" />
            <div
                class="mailcoach-text-center"
                style="background-color: {{ $this->settings->promotion_bar_background_color }}; color: {{ $this->settings->promotion_bar_text_color }}"
            >
                <div class="mailcoach-container mailcoach-mx-auto mailcoach-py-2 mailcoach-px-6">
                    @if($this->signedUp)
                        {!! $this->settings->promotion_bar_success_message !!}
                    @else
                        {!! $this->settings->promotion_bar_text !!}
                        <input
                            type="email"
                            name="email"
                            wire:model="email"
                            class="mailcoach-ml-4 mailcoach-h-8 mailcoach-border-0 {{ $this->settings->promotion_bar_radius }} mailcoach-text-sm mailcoach-w-60"
                            style="background-color: {{ $this->settings->promotion_bar_input_background_color }}"
                            placeholder="{{ $this->settings->promotion_bar_input_placeholder }}"
                        >
                        <button
                            wire:click="subscribe"
                            class="mailcoach-ml-3 mailcoach-px-2 mailcoach-py-1.5 {{ $this->settings->promotion_bar_radius }} mailcoach-text-sm"
                            style="background-color: {{ $this->settings->promotion_bar_button_background_color }}; color: {{ $this->settings->promotion_bar_button_text_color }}"
                        >
                            {{ $this->settings->promotion_bar_button_text }}
                        </button>
                    @endif
                </div>
            </div>
    @endif
</div>
