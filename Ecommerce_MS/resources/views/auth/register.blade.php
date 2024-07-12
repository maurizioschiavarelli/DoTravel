<x-layout>

    <x-Main_China>

        <div class="row FormLoginRegister">
            <div class="col-12">

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Indirizzo email</label>
                        <input type="email" class="form-control" id="registerEmail" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="Password" name="password">
                    </div>

                    <div class="mb-3">
                        <label for="Password_confirmation" class="form-label">Conferma password</label>
                        <input type="password" class="form-control" id="Password_confirmation" name="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Registrati</button>

                </form>

            </div>
        </div>


    </x-Main_China>

</x-layout>
