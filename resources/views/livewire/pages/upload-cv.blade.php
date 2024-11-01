<div>
    {{-- Do your work, then step back. --}}
        <!-- start banner Area -->
        <section class="banner-area relative" id="home">
          <div class="overlay overlay-bg"></div>
          <div class="container">
              <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                  <h1 class="text-white">
                    Upload CV
                  </h1>
                </div>
            </div>
              
          </div>
      </section>
    
      <div class="container d-flex justify-content-center my-4 align-items-center" style="min-height: 50vh;">
        <div class="p-4 rounded border" style="width: 100%; max-width: 400px;">
              
                <form wire:submit.prevent="uploadcv">
    
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="cv" class="form-label font-medium text-sm leading-6 text-success">Upload CV</label>
                        <input accept="file/docx, file/pdf" type="file" id="email" wire:model="cv" class="form-control" placeholder="Upload cv"/>
                        <p>Only DOC, DOCX, and PDF formats are accepted.</p>
                        @error('cv') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
    
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success w-100">Upload</button>
    
                    <!-- Links -->
                    <div class="d-flex justify-content-between mt-3">
                        <a href="{{route('pages.contact')}}" class="text-danger">Cancel</a>
                    </div>
                </form>
                @if (session()->has('message'))
                    <div class="alert alert-success mt-3">{{ session('message') }}</div>
                @endif
            </div>
   
        </div>
</div>
    