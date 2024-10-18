<div>
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Job Posting Form
                    </h1>
                    <p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span>
                        <a href="#"> Job category</a> <span class="lnr lnr-arrow-right"></span> <a href="#">
                            Job Posting Form </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-50 mb-50">
        <form>
            <!-- Form Group for Job Title -->
            <div class="mb-3">
                <label for="job-title" class="form-label fw-bold fs-4">Job Title</label>
                <input type="text" class="form-control" id="job-title" placeholder="Enter the job title">
            </div>

            <!-- Form Group for Job Description -->
            <div class="mb-3">
                <label for="job-description" class="form-label">Job Description</label>
                <textarea class="form-control" id="job-description" rows="3"></textarea>
            </div>

            <!-- Form Group for Job Nature -->
            <div class="mb-3">
                <label for="job-nature" class="form-label">Job Nature</label>
                <input type="text" class="form-control" id="job-nature" placeholder="Enter the job nature">
            </div>

            <!-- Form Group for Company Name -->
            <div class="mb-3">
                <label for="company name" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="company-name" placeholder="Enter the company name">
            </div>

            <!-- Form Group for Job Salary -->
            <div class="mb-3">
                <label for="job-salary" class="form-label">Job Salary</label>
                <input type="text" class="form-control" id="job-salary" placeholder="Enter the job salary">
            </div>

            <!-- Form Group for Interest -->
            <div class="mb-3">
                <label for="interest" class="form-label">Job Interest</label>
                <select class="form-select" id="interest">
                    <option selected disabled>What is your interest?</option>
                    <option value="1">Art</option>
                    <option value="2">Media</option>
                    <option value="3">Design</option>
                </select>
            </div>



            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>


{{-- Job Title
    Job Description
    Company Name
    Job Nature
    Salary
    Interest --}}
