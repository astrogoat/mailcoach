<div>
    @if($this->settings->enabled)
        <link rel="stylesheet" href="{{ mix('css/mailcoach.css', "vendor/mailcoach") }}" />
            <div
                class="mailcoach-text-center"
                style="background-color: {{ $this->settings->promotion_bar_background_color }}; color: {{ $this->settings->promotion_bar_text_color }}"
            >
                <div class="mailcoach-flex mailcoach-flex-col sm:mailcoach-flex-row sm:mailcoach-items-center mailcoach-justify-center mailcoach-container mailcoach-mx-auto mailcoach-py-2 sm:mailcoach-py-0 mailcoach-px-6 mailcoach-space-y-2">
                    @if($this->signedUp)
                        {!! $this->settings->promotion_bar_success_message !!}
                    @else
                        <span>
                            {!! $this->settings->promotion_bar_text !!}
                        </span>
                        <div class="mailcoach-flex mailcoach-items-center mailcoach-gap-3 mailcoach-pb-2">
                            <input
                                type="email"
                                name="email"
                                wire:model="email"
                                class="sm:mailcoach-ml-4 mailcoach-h-8 mailcoach-border-0 {{ $this->settings->promotion_bar_radius }} mailcoach-text-sm mailcoach-w-60"
                                style="background-color: {{ $this->settings->promotion_bar_input_background_color }}; color: {{ $this->settings->promotion_bar_input_text_color }}"
                                placeholder="{{ $this->settings->promotion_bar_input_placeholder }}"
                            >
                            <button
                                wire:click="subscribe"
                                class="mailcoach-whitespace-nowrap sm:mailcoach-ml-3 mailcoach-px-2 mailcoach-py-1.5 {{ $this->settings->promotion_bar_radius }} mailcoach-text-sm"
                                style="background-color: {{ $this->settings->promotion_bar_button_background_color }}; color: {{ $this->settings->promotion_bar_button_text_color }}"
                            >
                                {{ $this->settings->promotion_bar_button_text }}
                            </button>
                        </div>
                    @endif
                </div>
            </div>
    @endif
</div>
