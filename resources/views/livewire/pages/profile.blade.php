<div>
    <section class="banner-area relative" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
          <div class="row d-flex align-items-center justify-content-center">
              <div class="about-content col-lg-12">
                  <h1 class="text-white">
                      Profile
                  </h1>
                  
              </div>
          </div>
      </div>
  </section >
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
    <div class="p-4 rounded border" style="width: 100%; max-width: 900px;">
      <form wire:submit.prevent="storeProfile" class="row g-3">
        <div class="col-md-4">
          <label for="validationDefault01" class="form-label">First name</label>
          <input type="text" class="form-control" wire:model="firstname" id="validationDefault01" required>
        </div>
        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Last name</label>
          <input type="text" class="form-control" wire:model="lastname" id="validationDefault02"  required>
        </div>
        <div class="col-md-4">
          <label for="validationDefaultUsername" class="form-label">Username</label>
          <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">@</span>
            <input type="text" class="form-control" wire:model="username" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationDefault03" class="form-label">City</label>
          <input type="text" class="form-control" wire:model="city" id="validationDefault03" required>
        </div>
        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">State</label>
          <input type="text" class="form-control" wire:model="state" id="validationDefault03" required>
          {{-- <select class="form-select" id="validationDefault04" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
          </select> --}}
        </div>
        <div class="col-md-3">
          <label for="validationDefault05" class="form-label">Zip</label>
          <input type="text" class="form-control" wire:model="zip" id="validationDefault05" required>
        </div>
        <div class="col-12">
          <div class="form-check my-2">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
              Agree to terms and conditions
            </label>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Save</button>
          <a href="{{route('pages.contact')}}" class="px-4 text-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>
  
  </div>
  