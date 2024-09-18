<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- segundo nombre -->
        <div>
            <x-input-label for="senombre" :value="__('Segundo nombre')" />
            <x-text-input id="senombre" class="block mt-1 w-full" type="text" name="senombre" :value="old('senombre')"
                required autofocus autocomplete="senombre" />
            <x-input-error :messages="$errors->get('senombre')" class="mt-2" />
        </div>
        <!-- apellido -->
        <div>
            <x-input-label for="apellido" :value="__('apellido')" />
            <x-text-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')"
                required autofocus autocomplete="apellido" />
            <x-input-error :messages="$errors->get('apellido')" class="mt-2" />
        </div>
        <!-- segundo apellido -->
        <div>
            <x-input-label for="seapellido" :value="__('segundo apellido')" />
            <x-text-input id="seapellido" class="block mt-1 w-full" type="text" name="seapellido" :value="old('seapellido')"
                required autofocus autocomplete="seapellido" />
            <x-input-error :messages="$errors->get('seapellido')" class="mt-2" />
        </div>
        <!-- telefono -->
        <div>
            <x-input-label for="telefono" :value="__('telefono')" />
            <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')"
                required autofocus autocomplete="telefono" />
            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
        </div>
        <!-- direccion -->
        <div>
            <x-input-label for="direccion" :value="__('direccion')" />
            <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')"
                required autofocus autocomplete="direccion" />
            <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
        </div>
        <!-- municipios -->
        <div>
            <x-input-label for="municipio_id" :value="__('Municipio')" />
            <select id="municipio_id" name="municipio_id" class="block mt-1 w-full" required autofocus>
                <option value="">Selecciona un municipio</option>
                @foreach ($municipios as $municipio)
                    <option value="{{ $municipio->id }}" {{ old('municipio_id') == $municipio->id ? 'selected' : '' }}>
                        {{ $municipio->nombre }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('municipio_id')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>

        </div>
    </form>
</x-guest-layout>
