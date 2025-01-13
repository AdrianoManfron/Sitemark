<x-layout.app>
    <x-container class="flex-col h-screen gap-8 px-20 py-10">
        <div class="w-60">
            <img src="/images/logo.png" alt="Logo">
        </div>
        <section class="w-full flex flex-col gap-11 h-full">
            <header class="flex justify-between items-center">
                <h1 class="text-heading-small leading-heading-small font-bold text-content-primary py-5"><span class="border-b-2 border-orange">Li</span>nks</h1>
                <x-button secondary>
                    <x-icons.plus-circle class="w-5 h-5" />
                    Adicionar link
                </x-button>
            </header>
            <div class="w-full flex flex-col justify-center items-center gap-4 h-[590px] overflow-y-auto">
                <div class="w-full flex gap-3">
                    <x-button arrows>
                        <x-icons.arrow class="w-6 h-6" />
                    </x-button>
                    <x-button arrows>
                        <x-icons.arrow-down class="w-6 h-6" />
                    </x-button>
                    <div class="w-full flex p-3 gap-3 bg-secondary border-x border-primary rounded-3xl">
                        <img src="/storage/" alt="Poster" class="w-20 h-20 bg-green rounded-lg">
                        <div class="flex flex-col pt-1 pr-3 gap-3">
                            <div class="flex items-center gap-3">
                                <h3 class="text-heading-small leading-heading-small font-bold text-content-primary">Anéis do poder</h3>
                                <span class="text-label-small leading-label-small font-semibold px-2 py-1 bg-blue text-content-inverse rounded-2xl">prime vídeo</span>
                            </div>
                            <a href="#" class="text-paragraph-medium leading-paragraph-medium w-[650px] text-content-secondary">https://www.primevideo.com/region/na/detail/amzn1.dv.gti.ffefa84e-6092-433b-9f8a-79c6dd7551ae</a>
                        </div>
                        <div class="flex justify-center items-center gap-1">
                            <x-button arrows>
                                <x-icons.trash class="w-6 h-6" />
                            </x-button>
                            <x-button arrows>
                                <x-icons.edit class="w-6 h-6" />
                            </x-button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <nav class="flex gap-2 justify-center items-center mt-2 w-40 h-14">
            <x-a primary :href="route('dashboard')"><x-icons.list class="w-4 h-4" /></x-a>
            <x-a secondary :href="route('profile')"><x-icons.user class="w-4 h-4" /></x-a>
            <x-a secondary :href="route('logout')"><x-icons.exit class="w-4 h-4" /></x-a>
        </nav>
    </x-container>
</x-layout.app>
