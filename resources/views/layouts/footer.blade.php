<div  id="footer"class="container-fluid text-center text-lg-start bg-custom  mt-auto  py-2 ">
    <div class="container py-3">
        <div class="row ">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Our Office</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Near Sai Amrut Petrolium</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>9373545745</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>cmdsofts@gmail.com</p>
                <div class=" p-2 ">
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="">
                        <i class="fab fa-github"></i>
                    </a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" href="">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Services</h4>
                <a class="nav-link" href="{{ route('user.index') }}">Online Exam</a>
                <a class="nav-link" href="{{ route('users.index') }}">Register Student</a>
                <a class="nav-link" href="{{ route('admin.index') }}">Register Teacher</a>
                <a class="nav-link" href="{{ route('subscriber.create') }}">Unsubscribe Newsletter</a>

            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Quic Links</h4>
                <a class="nav-link" href="#">About Us</a>
                <a class="nav-link" href="#">Contact Us</a>
                <a class="nav-link" href="#">Our Services</a>
                <a class="nav-link" href="#">Our Team</a>

            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Newsletter</h4>
                <p>Subscribe To Our Newsletter To Recive Recent Updates.</p>
                <div class="position-relative w-100">
                    <form action="{{ route('subscriber.store') }}" method="post">
                        @csrf
                        <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5  @error('email') is-invalid @enderror" type="email" name="email" placeholder="Your Email">
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Subscribe</button>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
