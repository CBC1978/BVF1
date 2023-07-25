@extends('layouts.login-layout') <!-- Étend le layout spécifique pour la page de connexion -->

@section('content')
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
                              <h2 class="mt-10 mb-5 text-brand-1">Member Login</h2>
                              <p class="font-sm text-muted mb-30">Access to all features. No credit card required.</p>
                             
                              <form class="login-register text-start mt-20" wire:submit.prevent="login">
                                <div class="form-group">
                                    <label class="form-label" for="input-email">Email *</label>
                                    <input class="form-control" id="input-email" type="text" required wire:model.defer="email" placeholder="Steven Job">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="input-password">Password *</label>
                                    <input class="form-control" id="input-password" type="password" required wire:model.defer="password" placeholder="************">
                                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="login_footer form-group d-flex justify-content-between">
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Remember me</span><span class="checkmark"></span>
                                    </label>
                                    <a class="text-muted" href="#">Forgot Password</a>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Login</button>
                                </div>
                                
                            
                              <div class="text-muted text-center">Don't have an Account? <a href="{{ route('register') }}">Sign up</a></div> 
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