<x-layout>

    <x-Main_China>

        <h2 class="FormRegisterH2">Register</h2>

        <div class="container">
            <div class="row FormLoginRegister">
                <div class="col-12">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label register_label">Nome</label>
                            <input type="text" class="form-control register_input" id="name" name="name">
                        </div>

                        <div class="mb-3">
                            <label for="registerEmail" class="form-label register_label">Indirizzo email</label>
                            <input type="email" class="form-control register_input" id="registerEmail" name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="mb-3">
                            <label for="Password" class="form-label register_label">Password</label>
                            <input type="password" class="form-control register_input" id="Password" name="password">
                        </div>

                        <div class="mb-3">
                            <label for="Password_confirmation" class="form-label register_label">Conferma password</label>
                            <input type="password" class="form-control register_input" id="Password_confirmation" name="password_confirmation">
                        </div>

                        <button type="submit" class="btn btn-primary">Registrati</button>

                    </form>

                </div>
            </div>
        </div>


    </x-Main_China>

</x-layout>
