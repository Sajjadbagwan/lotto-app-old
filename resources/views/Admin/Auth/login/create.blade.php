<x-layouts.auth>
    <x-slot name="title">
        {{ trans('auth.login') }}
    </x-slot>

    <x-slot name="content">
    <div class="hidden w-full xl:block xl:w-1/2">
            <div class="px-26 py-17.5 text-center">
                <a class="mb-5.5 inline-block" href="#">
                    <img
                    class="hidden dark:block"
                    src="{{ URL::to('/') }}/images/logo/logo.svg"
                    alt="Logo"
                    />
                    <img
                    class="dark:hidden"
                    src="{{ URL::to('/') }}/images/logo/logo.svg"
                    alt="Logo"
                    />
                </a>
            </div>
    </div>
    <div class="w-full border-stroke dark:border-strokedark xl:w-1/2 xl:border-l-2">
        <div class="w-full p-4 sm:p-12.5 xl:p-17.5">
        <div>
            <h1 class="mb-9 text-2xl font-bold text-black dark:text-white sm:text-title-xl2">
                {{ trans('auth.login_to') }}
            </h1>
        </div>

        <div :class="(form.response.success) ? 'w-full bg-green-100 text-green-600 p-3 rounded-sm font-semibold text-xs' : 'hidden'"
            v-if="form.response.success"
            v-html="form.response.message"
            v-cloak
        ></div>

        <div :class="(form.response.error) ? 'w-full bg-red-100 text-red-600 p-3 rounded-sm font-semibold text-xs' : 'hidden'"
            v-if="form.response.error"
            v-html="form.response.message"
            v-cloak
        ></div>

        <x-form id="auth">
            <div class="grid sm:grid-cols-6 gap-x-8 gap-y-6 my-3.5">
                <x-form.group.email
                    name="email"
                    label="{{ trans('auth.email') }}"
                    placeholder="{{ trans('auth.email') }}"
                    form-group-class="sm:col-span-6"
                    input-group-class="input-group-alternative"
                />

                <x-form.group.password
                    name="password"
                    label="{{ trans('auth.password.pass') }}"
                    placeholder="{{ trans('auth.password.pass') }}"
                    form-group-class="sm:col-span-6"
                    input-group-class="input-group-alternative"
                />

                <div class="sm:col-span-6 flex flex-row justify-between items-center">
                    @stack('remember_input_start')
                    <div>
                        <x-form.input.checkbox
                            name="remember"
                            label="{{ trans('auth.remember_me') }}"
                            value="1"
                            v-model="form.remember"
                            id="checkbox-remember"
                            class="text-purple focus:outline-none focus:ring-purple focus:border-purple"
                        />
                    </div>
                    @stack('remember_input_end')

                    @stack('forgotten-password-start')
                    <x-link href="{{ route('admin.forgot') }}" class="text-black-400 hover:text-black-700 text-sm" override="class">
                        {{ trans('auth.forgot_password') }}
                    </x-link>
                    @stack('forgotten-password-end')
                </div>

                <x-button
                    type="submit"
                    class="w-full cursor-pointer rounded-lg border border-primary bg-primary p-4 font-medium text-white transition hover:bg-opacity-90"
                    override="class"
                >
                    <x-button.loading>
                        {{ trans('auth.login') }}
                    </x-button.loading>
                </x-button>
            </div>
        </x-form>
        </div>
    
    </div>
        
    </x-slot>
    <x-script folder="auth" file="common" />
</x-layouts.auth>
