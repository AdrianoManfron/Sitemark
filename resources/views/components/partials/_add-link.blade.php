<dialog {{ $attributes }} class="modal backdrop-blur-lg">
    <div class="modal-box max-w-[700px] p-8 bg-secondary bg-opacity-40">
        <div class="w-full flex flex-col gap-11">
            <h3 class="text-heading-small leading-heading-small font-bold text-content-primary py-5"><span class="border-b-2 border-orange">Ad</span>icionar link</h3>
            <x-form :route="route('links.create')" post id="add-link-form" enctype="multipart/form-data">
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
