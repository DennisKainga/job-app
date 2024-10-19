<div>
    {{-- Do your work, then step back. --}}
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Contact Us
                    </h1>
                    <p class="text-white"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                            href="contact.html"> Contact Us</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!-- Start contact-page Area -->
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="row">
                <div class="map-wrap" style="width:100%; height: 445px;"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510564.65107988653!2d36.5177334104462!3d-1.3031873859975642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi!5e0!3m2!1sen!2ske!4v1728804707256!5m2!1sen!2ske"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                <div class="col-lg-4 d-flex flex-column">
                    <a class="contact-btns" href="#">Submit Your CV</a>
                    <a class="contact-btns" href="#">Post New Job</a>
                    <a class="contact-btns" href="#">Create New Account</a>
                </div>
                <div class="col-lg-8">
                    <form class="form-area " id="myForm" action="mail.php" wire:submit=send method="post"
                        class="contact-form text-right">
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <input  wire:model="name" placeholder="Enter your name" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter your name'"
                                    class="common-input mb-20 form-control" required="" type="text">

                                <input wire:model="email" placeholder="Enter email address"
                                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                    class="common-input mb-20 form-control" required="" type="email">

                                <input wire:model="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter your subject'"
                                    class="common-input mb-20 form-control" required="" type="text">
                                <textarea class="common-textarea mt-10 form-control" wire:model="message"
                                    placeholder="Messege" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Messege'" required=""></textarea>
                                <button class="primary-btn mt-20 text-white" style="float: right;">Send Message</button>
                                <div class="mt-20 alert-msg" style="text-align: left;"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact-page Area -->
</div>