<section class="login py-5 border-top-1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8 align-item-center">
        <div class="border border">
          <h3 class="bg-gray p-4">Inscription</h3>
          <form action="{{ route('register') }}" method="POST">
            @csrf
            <fieldset class="p-4">
              <input class="form-control mb-3" type="text" name="name" placeholder="Nom*" required>
              <input class="form-control mb-3" type="text" name="first_name" placeholder="Prénom*" required>
              <input class="form-control mb-3" type="text" name="user_phone" placeholder="Téléphone*" required>
              <input class="form-control mb-3" type="email" name="email" placeholder="Email*" required>
              <input class="form-control mb-3" type="text" name="username" placeholder="Nom de l'entreprise*" required>
              <input class="form-control mb-3" type="password" name="password" placeholder="Mot de passe*" required>
              <input class="form-control mb-3" type="password" name="password_confirmation" placeholder="Confirmer le mot de passe*" required>
              <select class="form-control mb-3" name="role" required>
                <option value="">Sélectionner le rôle</option>
                <option value="chargeur">Chargeur</option>
                <option value="transporteur">Transporteur</option>
              </select>
              <div class="loggedin-forgot d-inline-flex my-3">
                <input type="checkbox" id="registering" class="mt-1">
                <label for="registering" class="px-2">Conditions générales d'utilisation <a class="text-primary font-weight-bold" href="terms-condition.html">Conditions générales</a></label>
              </div>
              <button type="submit" class="btn btn-primary font-weight-bold mt-3">S'inscrire</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
