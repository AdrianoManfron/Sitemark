<x-layout.app>
    <main class="w-full flex gap-10 p-5 h-screen">
        <div class="w-3/5">
            <img src="/images/login-register.png" alt="Image login or register" class="h-full rounded-2xl">
        </div>
        <section class="flex flex-col justify-center items-center w-2/5 gap-24 px-20">
            <div class="w-56">
                <img src="/images/logo.png" alt="Logo">
            </div>
            <x-form :route="route('login')" post id="login-form">
                <h1 class="text-heading-small leading-heading-small font-bold text-content-primary pb-5"><span class="border-b-2 border-orange">Ac</span>essar conta</h1>
                <x-label name="E-mail">
                    <x-input name="email" placeholder="Digite o seu email" value="{{ old('email') }}" />
                </x-label>
                <x-label name="Senha">
                    <x-input name="password" type="password" placeholder="Insira sua senha" />
                </x-label>
            </x-form>
            <x-button primary type="submit" form="login-form">Acessar conta</x-button>
            <div class="flex text-paragraph-medium leading-paragraph-medium text-content-secondary gap-2">
                Não tem cadastro? <x-a default :href="route('register')">Criar conta</x-a>
            </div>
        </section>
    </main>
</x-layout.app>
