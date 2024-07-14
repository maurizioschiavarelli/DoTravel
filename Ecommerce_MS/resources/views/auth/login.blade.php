<x-layout>

    <x-Main_China>

        <h2 class="FormLoginH2">Login</h2>

        <div class="container">
            <div class="row FormLoginRegister">
                <div class="col-12">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="loginEmail" class="form-label login_label">Indirizzo email</label>
                            <input type="email" class="form-control login_input" id="loginEmail" aria-describedby="emailHelp" name="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="mb-3">
                            <label for="Password" class="form-label login_label">Password</label>
                            <input type="password" class="form-control login_input" id="Password" name="password">
                        </div>

                        <button type="submit" class="btn login_button">Login</button>

                    </form>

                </div>
            </div>
        </div>

    </x-Main_China>

</x-layout>
