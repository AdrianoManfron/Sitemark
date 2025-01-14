<x-layout.app>
    <x-container class="flex-col h-screen gap-8 px-20 py-10">
        <div class="w-60">
            <img src="/images/logo.png" alt="Logo">
        </div>
        <section class="w-full flex flex-col gap-11 h-full">
            <header class="flex justify-between items-center">
                <h1 class="text-heading-small leading-heading-small font-bold text-content-primary py-5"><span class="border-b-2 border-orange">Li</span>nks</h1>
                <x-button secondary onclick="add_link.showModal()">
                    <x-icons.plus-circle class="w-5 h-5" />
                    Adicionar link
                </x-button>
                <dialog id="add_link" class="modal backdrop-blur-lg">
                    <div class="modal-box max-w-[700px] p-8 bg-secondary bg-opacity-40">
                        <div class="w-full flex flex-col gap-11">
                            <h3 class="text-heading-small leading-heading-small font-bold text-content-primary py-5"><span class="border-b-2 border-orange">Ad</span>icionar link</h3>
                            <x-form :route="route('links.create')" post id="add-link-form">
                                <div class="w-full flex gap-8">
                                    <div class="w-3/4">
                                        <div class="flex w-full gap-2">
                                            <x-label name="Título do link" class="flex-1">
                                                <x-input name="title" placeholder="Digite o nome do conteúdo" />
                                            </x-label>
                                            <x-label name="Plataforma de streaming" class="flex-1">
                                                <x-input name="streaming" placeholder="Onde você está assistindo?" />
                                            </x-label>
                                        </div>
                                        <x-label name="URL">
                                            <x-input name="url" placeholder="Cole a URL do conteúdo" />
                                        </x-label>
                                    </div>
                                    <div class="w-1/4 flex flex-col justify-center items-center gap-2">
                                        <x-img alt="100 x 100" class="flex justify-center items-center bg-orange text-content-inverse" />
                                        <label for="poster" class="flex justify-center items-center gap-2 text-label-small leading-label-small text-content-primary cursor-pointer">
                                            <x-icons.arrow-up class="w-4 h-4" />
                                            Adicionar imagem
                                            <input type="file" name="poster" id="poster" class="hidden" />
                                        </label>
                                    </div>
                                </div>
                            </x-form>
                          <div class="modal-action">
                            <form method="dialog">
                              <x-button secondary>Voltar</x-button>
                            </form>
                            <x-button primary form="add-link-form">Salvar</x-button>
                          </div>
                        </div>
                    </div>
                </dialog>
            </header>
            <div class="w-full flex flex-col items-center gap-4 h-[590px] overflow-y-auto">
                @foreach ($links as $link)
                    <div class="w-full flex gap-3">

                        @unless ($loop->last)
                        <x-form :route="route('links.down', $link)" patch class="flex justify-center items-center">
                            <x-button arrows>
                                <x-icons.arrow-down class="w-6 h-6" />
                            </x-button>
                        </x-form>
                    @endunless

                    @unless ($loop->first)
                        <x-form :route="route('links.up', $link)" patch class="flex justify-center items-center">
                            <x-button arrows>
                                <x-icons.arrow class="w-6 h-6" />
                            </x-button>
                        </x-form>
                    @endunless

                        <div class="w-full flex p-3 gap-3 bg-secondary border-x border-primary rounded-3xl">
                            <img src="/storage/{{ $link->poster }}" alt="Poster" class="w-20 h-20 max-w-20 bg-green rounded-lg">
                            <div class="flex flex-col pt-1 pr-3 gap-3">
                                <div class="flex items-center gap-3">
                                    <h3 class="text-heading-small leading-heading-small font-bold text-content-primary">{{ $link->title }}</h3>
                                    <span class="text-label-small leading-label-small font-semibold px-2 py-1 bg-blue text-content-inverse rounded-2xl">{{ $link->streaming }}</span>
                                </div>
                                <a href="{{ $link->url }}" target="_blank" class="text-paragraph-medium leading-paragraph-medium w-[650px] text-content-secondary">{{ $link->url }}</a>
                            </div>
                            <div class="flex justify-center items-center gap-1">
                                <x-form :route="route('links.destroy', $link)" delete onsubmit="return confirm('Tem certeza?')">
                                    <x-button arrows>
                                        <x-icons.trash class="w-6 h-6" />
                                    </x-button>
                                </x-form>
                                <x-a edit href="{{ route('links.edit', $link) }}">
                                    <x-icons.edit class="w-6 h-6" />
                                </x-a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <nav class="flex gap-2 justify-center items-center mt-2 w-40 h-14">
            <x-a primary :href="route('dashboard')"><x-icons.list class="w-4 h-4" /></x-a>
            <x-a secondary :href="route('profile')"><x-icons.user class="w-4 h-4" /></x-a>
            <x-a secondary :href="route('logout')"><x-icons.exit class="w-4 h-4" /></x-a>
        </nav>
    </x-container>
</x-layout.app>
