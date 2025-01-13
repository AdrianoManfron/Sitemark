<x-layout.app>
    <x-container class="flex-col h-screen gap-8 px-20 py-10">
        <div class="w-60">
            <img src="/images/logo.png" alt="Logo">
        </div>
        <section class="w-full flex flex-col gap-11 h-full">
            <header class="flex justify-between items-center">
                <h1 class="text-heading-small leading-heading-small font-bold text-content-primary py-5"><span class="border-b-2 border-orange">Pe</span>rfil</h1>
                <div class="flex justify-center items-center gap-4">
                    <x-a :href="route('dashboard')" back>Voltar</x-a>
                    <x-button primary>Salvar</x-button>
                </div>
            </header>
            <div class="w-full flex flex-col justify-center items-center gap-4 h-full">
                <div class="w-full flex gap-8 h-full">
                    <div class="w-3/5">
                        <div class="flex w-full gap-2">
                            <x-label name="Nome" class="flex-1">
                                <x-input name="name" placeholder="Digite o seu nome" value="{{ old('name', $user->name) }}" />
                            </x-label>
                            <x-label name="Sobrenome" class="flex-1">
                                <x-input name="lastname" placeholder="Digite o seu sobrenome" value="{{ old('lastname', $user->lastname) }}" />
                            </x-label>
                        </div>
                        <x-label name="E-mail">
                            <x-input name="email" placeholder="Digite o seu email" value="{{ old('email', $user->email) }}" />
                        </x-label>
                        <x-label name="Bio">
                            <x-textarea name="description" value="{{ old('description') }}" />
                        </x-label>
                    </div>
                    <div class="w-2/5 flex flex-col items-center gap-2">
                        <x-img src="/storage/" alt="Foto do Perfil" />
                        <label for="avatar" class="flex items-center gap-2 text-label-small leading-label-small text-content-primary cursor-pointer">
                            <x-icons.arrow-up class="w-4 h-4" />
                            Substituir imagem
                            <input type="file" name="photo" id="avatar" class="hidden" />
                        </label>
                    </div>
                </div>
            </div>
        </section>
        <nav class="flex gap-2 justify-center items-center mt-2 w-40 h-14">
            <x-a secondary :href="route('dashboard')"><x-icons.list class="w-4 h-4" /></x-a>
            <x-a primary :href="route('profile')"><x-icons.user class="w-4 h-4" /></x-a>
            <x-a secondary :href="route('logout')"><x-icons.exit class="w-4 h-4" /></x-a>
        </nav>
    </x-container>
</x-layout.app>
