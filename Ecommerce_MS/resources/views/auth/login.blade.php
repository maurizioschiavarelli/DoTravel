<x-layout>

    <div class="row">
        <div class="col-12">

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="loginEmail" class="form-label">Indirizzo email</label>
                    <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="Password" name="password">
                </div>

                <button type="submit" class="btn btn-primary">Login</button>

            </form>

        </div>
    </div>

</x-layout>
