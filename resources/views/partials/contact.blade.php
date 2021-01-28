<section class="contact contact-info-area section-padding  section-bg" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="s-h-title">
                        Contact <span>Me</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <!-- Single Info -->
                <div class="single-info">
                    <div class="info-icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <div class="info-content">
                        <h5>My Location:</h5>
                        <p>Belarus, Gomel, Lenin Avenue 10</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Info -->
                <div class="single-info">
                    <div class="info-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h5>Phone Number:</h5>
                        <p>+375 29 1028287</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <!-- Single Info -->
                <div class="single-info">

                    <div class="info-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="info-contentr">
                        <h5>Email Address:</h5>
                        <p>andrei.biareshchanka@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row cAndm">
            <div class="col-lg-6">
                <div class="home-page-form">
                    <div class="contact-form">
                        <form id="contact-form" method="post" action="{{ route('home') }}">

                            @csrf

                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <i class="fa fa-user-o"></i>
                                            <input id="form_name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
                                            @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <i class="fa fa-envelope-o"></i>
                                            <input id="form_email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                                            @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <i class="fa fa-question-circle-o"></i>
                                            <select class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject">
                                                <option @if(old('subject') == 0) selected @endif value="0">Select subject</option>
                                                <option @if(old('subject') == 1) selected @endif value="1">Subject 1</option>
                                                <option @if(old('subject') == 2) selected @endif value="2">Subject 2</option>
                                                <option @if(old('subject') == 3) selected @endif value="3">Subject 3</option>
                                                <option @if(old('subject') == 4) selected @endif value="4">Subject 4</option>
                                            </select>
                                            @error('subject')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <i class="fa fa-comment-o"></i>
                                            <textarea id="form_message" name="message" class="form-control @error('message') is-invalid @enderror" placeholder="Message"
                                                      rows="7">{{ old('message') }}</textarea>
                                            @error('message')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="mybtn mybtn-bg"><span>Send Message</span></button>
                                    </div>
                                </div>
                            </div>
                        </form> <!-- End Contact From -->

                        <div class="social-link">
                            <ul class="wrap">
                                <li class="wow fadeInUp">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="wow fadeInUp">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="wow fadeInUp">
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li class="wow fadeInUp">
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="google_map_wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2432.971965932548!2d31.00568511599642!3d52.42530565099485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d468525f72cdcb%3A0x3de3f85a582ef4a4!2sLienin%20Ave%2010%2C%20Homie%C4%BA%20246050!5e0!3m2!1sen!2sby!4v1609239949041!5m2!1sen!2sby" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>

        <!--/.row-->
    </div>
</section>
