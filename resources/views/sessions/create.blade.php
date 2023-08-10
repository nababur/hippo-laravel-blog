<x-layout>


    @include('frontend.header')


        <!-- Contact Section Start -->
        
        <div class="section contact-area section-padding pt-5" style="border-top:1px solid#efefef">
 
            <div class="container">
                <div class="contact-wrapper">


                    <!-- Contact Form Wrapper Start -->
                    <div class="contact-form-wrapper">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Contact Form Inner Start -->
                                <div class="contact-form-inner">
                                    <form action="/login" method="post">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- Single Form Start -->
                                                <div class="single-form text-center">
                                                   <h3>Login !</h3>
                                                </div>
                                                <!-- Single Form End -->
                                             
                                            </div>
                             
                                            <div class="col-md-12">
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <input type="email" name="email"  value="{{ old('email') }}" placeholder="Email">
                                                    <i class="flaticon-envelope-1"></i>
                                                </div>
                                                <!-- Single Form End -->
                                                @error('email')
                                                    <div class="alert mt-3 alert-danger alert-dismissible fade show" role="alert">
                                                        <strong>Error!</strong> {{ $message }}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                @enderror
                                            </div>
                                          
                                            <div class="col-md-12">
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <input type="password"  value="{{ old('password') }}" name="password" placeholder="Password">
                                                    <i class="flaticon-pencil"></i>
                                                </div>
                                                <!-- Single Form End -->
                                                @error('password')
                                                    <div class="alert mt-3 alert-danger alert-dismissible fade show" role="alert">
                                                        <strong>Error!</strong> {{ $message }}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                @enderror

                                            </div>
                                            <div class="col-md-12">
                                                <p class="form-message"></p>
                                                 <!-- Single Form Start -->
                                                 <div class="contact-btn">
                                                    <x-forms.button>Login</x-forms.button>
                                                 </div>
                                                 <!-- Single Form End -->
                                                <!-- Single Form End -->
                                                @error('error')
                                                    <div class="alert mt-3 alert-danger alert-dismissible fade show" role="alert">
                                                        <strong>Error!</strong> {{ $message }}
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                @enderror



                                                 <x-success-flash/>
                                             </div>
                                        </div>
                                    </form>
                                </div>
                                 <!-- Contact Form Inner End -->
                            </div>
                   
                        </div>
                    </div>
                    <!-- Contact Form Wrapper End -->
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

        <x-subscribe></x-subscribe>

        @include('frontend.footer')

</x-layout>