<x-layout.app>
    <x-container class="flex-col h-screen gap-8 px-20 py-10">
        <div class="w-60">
            <img src="/images/logo.png" alt="Logo">
        </div>
        <section class="w-full flex flex-col gap-11 h-full">
            <header class="flex justify-between items-center">
                <h1 class="text-heading-small leading-heading-small font-bold text-content-primary py-5"><span class="border-b-2 border-orange">Ed</span>itar link</h1>
                <div class="flex justify-center items-center gap-4">
                    <x-a :href="route('dashboard')" back>Voltar</x-a>
                    <x-button primary form="edit-link-form">Salvar</x-button>
                </div>
            </header>
            <div class="w-full flex flex-col items-center pt-10 gap-4 h-full">
                <x-form :route="route('links.edit', $link)" put id="edit-link-form" enctype="multipart/form-data">
                    <div class="w-full flex gap-8 h-full">
                        <div class="w-3/4">
                            <div class="flex w-full gap-2">
                                <x-label name="Título do link" class="flex-1">
                                    <x-input name="title" placeholder="Digite o nome do conteúdo" value="{{ old('title', $link->title) }}" />
                                </x-label>
                                <x-label name="Plataforma de streaming" class="flex-1">
                                    <x-input name="streaming" placeholder="Onde você está assistindo?" value="{{ old('title', $link->streaming) }}" />
                                </x-label>
                            </div>
                            <x-label name="URL">
                                <x-input name="url" placeholder="Cole a URL do conteúdo" value="{{ old('title', $link->url) }}" />
                            </x-label>
                        </div>
                        <div class="w-1/4 flex flex-col items-center gap-2">
                            <x-img src="/storage/{{ $link->poster }}" alt="100 x 100" class="flex justify-center items-center bg-orange text-content-inverse" />
                            <label for="poster" class="flex justify-center items-center gap-2 text-label-small leading-label-small text-content-primary cursor-pointer">
                                <x-icons.arrow-up class="w-4 h-4" />
                                Substituir imagem
                                <input type="file" name="poster" id="poster" class="hidden" />
                            </label>
                        </div>
                    </div>
                </x-form>
            </div>
        </section>
        <nav class="flex gap-2 justify-center items-center mt-2 w-40 h-14">
            <x-a primary :href="route('dashboard')"><x-icons.list class="w-4 h-4" /></x-a>
            <x-a secondary :href="route('profile')"><x-icons.user class="w-4 h-4" /></x-a>
            <x-a secondary :href="route('logout')"><x-icons.exit class="w-4 h-4" /></x-a>
        </nav>
    </x-container>
</x-layout.app>
