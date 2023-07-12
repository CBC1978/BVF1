<section class="login py-5 border-top-1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8 align-item-center">
        <div class="border">
          <h3 class="bg-gray p-4">Connexion</h3>
          <form wire:submit.prevent="login">
            @csrf
            <fieldset class="p-4">
              <input wire:model="email" class="form-control mb-3" type="text" name="email" placeholder="Email" required>
              <input wire:model="password" class="form-control mb-3" type="password" name="password" placeholder="Mot de passe" required>
              <div class="loggedin-forgot">
                <input type="checkbox" id="keep-me-logged-in">
                <label for="keep-me-logged-in" class="pt-3 pb-2">Rester connecté</label>
              </div>
              <button type="submit" class="btn btn-primary font-weight-bold mt-3">Connexion</button>
              <a class="mt-3 d-block text-primary" href="#!">Mot de passe oublié?</a>
              <a class="mt-3 d-inline-block text-primary" href="{{ route('register') }}">Créer un compte</a>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
