<!-- rts appoinment area start -->
<div class="rts-appoinment-area-9 bg_image rts-section-gap">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="thumbnail-appoinment-9">
                    <img src="{{ asset('front/assets/images/appoinment/05.webp') }}" alt="appoinment">
                </div>
            </div>
            <div class="col-lg-6">
                <form action="{{ route('front.contact.store') }}" method="POST" class="appoinment-area-9">
                    @csrf
                    <div class="inner">
                        <div class="title-style-five mb--40">
                            <span class="pre">Get In Touch</span>
                            <h2 class="title">Let’s Discuss Of Your <br> Insurance Needs</h2>
                        </div>

                        <div class="half-input-wrapper">
                            <div class="single-input">
                                <input type="text" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="single-input">
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                        </div>

                        <div class="half-input-wrapper">
                            <div class="single-input">
                                <input type="text" name="phone_no" placeholder="Contact Number" required>
                            </div>
                            <div class="single-input">
                                <input type="text" name="subject" placeholder="Subject (optional)">
                            </div>
                        </div>

                        <div class="single-input">
                            <textarea name="message" placeholder="Type Your Message" required></textarea>
                        </div>

                        <button type="submit" class="rts-btn btn-primary">Submit Message</button>

                        @if(session('success'))
                            <div class="alert alert-success mt-3">{{ session('success') }}</div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- rts appoinment area end -->
