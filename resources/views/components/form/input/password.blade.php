<div x-data="{ showPassword: false, password: '' }" x-cloak>
    <input 
        type="password"
        x-bind:class="password ? 'pr-9' : 'pr-0'"
        x-bind:type="showPassword ? 'text' : 'password'"
        x-model="password"
        name="{{ $name }}"
        id="{{ $id }}"
        class="w-full rounded-lg border border-stroke bg-transparent py-4 pl-6 pr-10 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
        @if ($value)
        value="{!! $value !!}"
        @endif
        placeholder="{{ $placeholder }}"
        @if ($disabled)
        disabled="disabled"
        @endif
        @if ($required)
        required="required"
        @endif
        @if ($readonly)
        readonly="readonly"
        @endif
        {{ $attributes->except(['placeholder', 'disabled', 'required', 'readonly', 'v-error', 'v-error-message']) }}
    />
    <button type="button" class="absolute inset-y-0 top-7 right-0 flex items-center pr-3 text-gray-400 "
     x-on:click="showPassword = !showPassword" x-show="password">
        <span x-show="!showPassword" class="material-icons-outlined text-gray-500 text-lg">visibility_off</span>
        <span x-show="showPassword" class="material-icons-outlined text-gray-500 text-lg">visibility</span>       
    </button>
</div>
