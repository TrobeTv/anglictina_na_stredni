<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Registrace
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Krok {{ $step }} ze 2
            </p>
        </div>

        <!-- Progress Bar -->
        <div class="w-full bg-gray-200 rounded-full h-2.5 mb-6">
            <div class="bg-indigo-600 h-2.5 rounded-full transition-all duration-300"
                 style="width: {{ ($step / 2) * 100 }}%"></div>
        </div>

        @if ($step == 1)
            <!-- Step 1: Account Information -->
            <form wire:submit.prevent="nextStep" class="mt-8 space-y-6">
                <div class="space-y-4">
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700">
                            Uživatelské jméno
                        </label>
                        <input wire:model.blur="username"
                               id="username"
                               name="username"
                               type="text"
                               required
                               class="mt-1 appearance-none rounded-md relative block w-full px-3 py-2 border @error('username') border-red-500 @else border-gray-300 @enderror placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Zadejte uživatelské jméno">
                        @error('username')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            E-mailová adresa
                        </label>
                        <input wire:model="email"
                               id="email"
                               name="email"
                               type="email"
                               required
                               class="mt-1 appearance-none rounded-md relative block w-full px-3 py-2 border @error('email') border-red-500 @else border-gray-300 @enderror placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Zadejte e-mailovou adresu">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Heslo
                        </label>
                        <input wire:model="password"
                               id="password"
                               name="password"
                               type="password"
                               required
                               class="mt-1 appearance-none rounded-md relative block w-full px-3 py-2 border @error('password') border-red-500 @else border-gray-300 @enderror placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Zadejte heslo">
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                            Potvrzení hesla
                        </label>
                        <input wire:model="password_confirmation"
                               id="password_confirmation"
                               name="password_confirmation"
                               type="password"
                               required
                               class="mt-1 appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Potvrďte heslo">
                    </div>
                </div>

                <div>
                    <button type="submit"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                        Pokračovat
                        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div class="text-center">
                    <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:text-indigo-500">
                        Už máte účet? Přihlaste se
                    </a>
                </div>
            </form>
        @endif

        @if ($step == 2)
            <!-- Step 2: Personal Information -->
            <form wire:submit.prevent="register" class="mt-8 space-y-6">
                <div class="space-y-4">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700">
                            Jméno
                        </label>
                        <input wire:model="first_name"
                               id="first_name"
                               name="first_name"
                               type="text"
                               required
                               class="mt-1 appearance-none rounded-md relative block w-full px-3 py-2 border @error('first_name') border-red-500 @else border-gray-300 @enderror placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Zadejte jméno">
                        @error('first_name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700">
                            Příjmení
                        </label>
                        <input wire:model="last_name"
                               id="last_name"
                               name="last_name"
                               type="text"
                               required
                               class="mt-1 appearance-none rounded-md relative block w-full px-3 py-2 border @error('last_name') border-red-500 @else border-gray-300 @enderror placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                               placeholder="Zadejte příjmení">
                        @error('last_name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="school_id" class="block text-sm font-medium text-gray-700">
                            Škola
                        </label>
                        <select wire:model="school_id"
                                id="school_id"
                                name="school_id"
                                required
                                class="mt-1 block w-full px-3 py-2 border @error('school_id') border-red-500 @else border-gray-300 @enderror bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="">Vyberte školu</option>
                            @foreach($schools as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        @error('school_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex space-x-3">
                    <button type="button"
                            wire:click="$set('step', 1)"
                            class="flex-1 group relative flex justify-center py-2 px-4 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                        <svg class="mr-2 -ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                        </svg>
                        Zpět
                    </button>
                    <button type="submit"
                            class="flex-1 group relative flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                        Dokončit registraci
                    </button>
                </div>
            </form>
        @endif
    </div>
</div>
