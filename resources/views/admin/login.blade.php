@extends('layouts.admin-layout')

@section('content')
  <section id="login" class="v-centered login">
    <div class="v-centered">
      
      <div class="container">
        
        <!-- Outer Row -->
        <div class="row justify-content-center">
    
          <div class="card o-hidden border-0 shadow-lg my-5 py-3">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="col-lg-10 mx-auto">
                <div class="p-5">
                  <div class="text-center">
                    <img src="{{ asset('images/coder_logo.png') }}" alt="" class="logo mb-4">
                    <h1 class="h3 text-gray-900 mb-4">Halaman Admin <span class="text-coder">Coder Institute</span></h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <a href="/dashboard" class="btn btn-primary btn-user btn-block">
                      Login
                    </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
    
        </div>
    
      </div>
      
    </div>
  </section>
@endsection