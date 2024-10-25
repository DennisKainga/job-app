<div>
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Job Posting Form
                    </h1>
                    <p class="text-white link-nav"><a href="/">Home</a> <span class="lnr lnr-arrow-right"></span>
                        <a href="#"> Job category</a> <span class="lnr lnr-arrow-right"></span> <a href="#">
                            Job Posting Form</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-50 mb-50">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit.prevent="submit">
            <!-- Job Title -->
            <div class="mb-3">
                <label for="job-title" class="form-label fw-bold fs-4">Job Title</label>
                <input type="text" class="form-control" id="job-title" placeholder="Enter the job title"
                    wire:model="job_title">
                @error('job_title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Job Description (CKEditor) -->
            <div class="mb-3">
                <label for="job-description" class="form-label">Job Description</label>
                <textarea class="form-control" id="job-description" rows="10" wire:model="job_description"></textarea>
                @error('job_description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Job Nature -->
            <div class="mb-3">
                <label for="job-nature" class="form-label">Job Nature</label>
                <input type="text" class="form-control" id="job-nature" placeholder="Enter the job nature"
                    wire:model="job_nature">
                @error('job_nature')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Company Name -->
            <div class="mb-3">
                <label for="company-name" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="company-name" placeholder="Enter the company name"
                    wire:model="company_name">
                @error('company_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Job Salary -->
            <div class="mb-3">
                <label for="job-salary" class="form-label">Job Salary</label>
                <input type="text" class="form-control" id="job-salary" placeholder="Enter the job salary"
                    wire:model="job_salary">
                @error('job_salary')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Job Category (Select2) -->
            <div class="mb-3">
                <label for="job-category" class="form-label">Job Category</label>
                <select class="js-example-basic-multiple w-100" multiple="multiple" wire:model="job_category">
                    <option class="p-2" value="AL">Alabama</option>
                    <option class="p-2" value="WY">Wyoming</option>
                    <option class="p-2" value="CA">California</option>
                    <option class="p-2" value="NY">New York</option>
                    <option class="p-2" value="TX">Texas</option>
                </select>
                @error('job_category')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
