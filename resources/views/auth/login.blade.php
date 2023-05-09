<x-layout>
    <div class="d-flex">
        <h1>Accedi</h1>
            <form>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Indirizzo E-mail</label>
                <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword">
            </div>
            <button type="submit" class="btn btn-primary">Accedi</button>
        </form>
    </div>
</x-layout>