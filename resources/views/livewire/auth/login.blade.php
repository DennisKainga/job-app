<div>
    {{-- Do your work, then step back. --}}
        <!-- start banner Area -->
        <section class="banner-area relative" id="home">
          <div class="overlay overlay-bg"></div>
          <div class="container">
              <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                  <h1 class="text-white">
                     login
                  </h1>
                </div>
            </div>
              
          </div>
      </section>
    
      <div class="container d-flex justify-content-center my-4 align-items-center" style="min-height: 50vh;">
        <div class="p-4 rounded border" style="width: 100%; max-width: 400px;">
              
                <form wire:submit.prevent="loginUser">
    
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label text-success">Email</label>
                        <input type="email" id="email" wire:model="email" class="form-control" placeholder="Email"/>
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
    
                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label text-success">Password</label>
                        <input type="password" id="password" wire:model="password" class="form-control" placeholder="Password"/>
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
    
                    <!-- Remember Me -->
                    <div class="form-check mb-3">
                        <input type="checkbox" id="remember_me" class="form-check-input">
                        <label for="remember_me" class="form-check-label">Remember me for 30 days</label>
                    </div>
    
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success w-100">Login</button>
    
                    <!-- Links -->
                    <div class="d-flex justify-content-between mt-3">
                        <a href="{{route('auth.register')}}" class="text-success">Don't have an account? Register</a>
                        <a href="{{route('pages.contact')}}" class="text-danger">Cancel</a>
                    </div>
                </form>
            </div>
   
        </div>
</div>
    