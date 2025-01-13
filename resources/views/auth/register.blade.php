<x-layout.app>
    <main class="w-full flex gap-10 p-5 h-screen">
        <div class="w-3/5">
            <img src="/images/login-register.png" alt="Image login or register" class="h-full rounded-2xl">
        </div>
        <section class="flex flex-col justify-center items-center w-2/5 gap-24 px-20">
            <div class="w-56">
                <img src="/images/logo.png" alt="Logo">
            </div>
            <x-form :route="route('register')" post id="register-form">
                <h1 class="text-heading-small leading-heading-small font-bold text-content-primary pb-5"><span class="border-b-2 border-orange">Cr</span>iar conta</h1>
                <div class="flex w-full gap-2">
                    <x-label name="Nome" class="flex-1">
                        <x-input name="name" placeholder="Digite o seu nome" value="{{ old('name') }}" />
                    </x-label>
                    <x-label name="Sobrenome" class="flex-1">
                        <x-input name="lastname" placeholder="Digite o seu sobrenome" value="{{ old('lastname') }}" />
                    </x-label>
                </div>
                <x-label name="E-mail">
                    <x-input name="email" placeholder="Digite o seu email" value="{{ old('email') }}" />
                </x-label>
                <x-label name="Confirmar e-mail">
                    <x-input name="email_confirmation" placeholder="Confirme o seu e-mail" />
                </x-label>
                <x-label name="Senha">
                    <x-input name="password" type="password" placeholder="Crie sua senha" />
                </x-label>
            </x-form>
            <x-button primary type="submit" form="register-form">Criar conta</x-button>
            <div class="flex text-paragraph-medium leading-paragraph-medium text-content-secondary gap-2">
                Já tem cadastro? <x-a default :href="route('login')">Acessar conta</x-a>
            </div>
        </section>
    </main>
</x-layout.app>
