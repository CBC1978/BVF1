@extends('layouts.register-layout') <!-- le layout spécifique pour la page de connexion -->

@section('content-register')
      <div class="box-content">
       
        <div class="row"> 
          <div class="col-lg-12"> 
            <div class="section-box">
              <div class="container"> 
                <div class="panel-white mb-10">
                  <div class="box-padding">               
                    <div class="login-register"> 
                      <div class="row login-register-cover pb-250">
                        <div class="col-lg-6 col-md-4 col-sm-12 mx-auto">
                          <div class="form-login-cover">
                            <div class="text-center">
                              <p class="font-sm text-brand-2">Welcome back! </p>
                              <h2 class="mt-10 mb-5 text-brand-1">Member Register</h2>
                              <p class="font-sm text-muted mb-30">Access to all features. No credit card required.</p>
                              <form wire:submit.prevent="register">
                                @csrf
                                <fieldset class="p-4">
                                    <input wire:model="name" class="form-control mb-3" type="text" name="name" placeholder="Nom*" required>
                                    <input wire:model="first_name" class="form-control mb-3" type="text" name="first_name" placeholder="Prénom*" required>
                                    <input wire:model="user_phone" class="form-control mb-3" type="text" name="user_phone" placeholder="Téléphone*" required>
                                    <input wire:model="email" class="form-control mb-3" type="email" name="email" placeholder="Email*" required>
                                    <input wire:model="username" class="form-control mb-3" type="text" name="username" placeholder="Nom de l'entreprise*" required>
                                    <input wire:model="password" class="form-control mb-3" type="password" name="password" placeholder="Mot de passe*" required>
                                    <input wire:model="password_confirmation" class="form-control mb-3" type="password" name="password_confirmation" placeholder="Confirmer le mot de passe*" required>
                                    <select wire:model="role" class="form-control mb-3" name="role" required>
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
       
      
      </div>
      @endsection