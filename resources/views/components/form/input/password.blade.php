<div>
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
   
</div>
