@section('css-me')
    <link rel="stylesheet" href="{{asset("toast/dist/jquery.toast.min.css")}}">
@endsection
<div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- =====================  Start contact icon column =====================  -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-mobile"></i>
                            <p>
                                Call: +1 5589 55488 55<br>
                                <span>Monday-Friday (9am-5pm)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- =====================  Start contact icon column =====================  -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-envelope-o"></i>
                            <p>
                                Email: info@example.com<br>
                                <span>Web: www.example.com</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- =====================  Start contact icon column =====================  -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-map-marker"></i>
                            <p>
                                Location: A108 Adam Street<br>
                                <span>NY 535022, USA</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- =====================  Start Google Map =====================  -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- =====================  Start Map =====================  -->
                    <!-- ===================== suppress HtmlDeprecatedAttribute =====================  -->
                    <!--suppress HtmlDeprecatedAttribute -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452"
                        width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <!-- =====================  End Map =====================  -->
                </div>
                <!-- =====================  End Google Map =====================  -->
                <!-- =====================  Start  contact =====================  -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form contact-form">
                        <form action="{{route('home.contact.ajax')}}" id="form" method="post">
                            @csrf
                            <div class="form-group">
                                <!--suppress HtmlFormInputWithoutLabel -->
                                <input type="text" name="fullName" class="form-control" id="fullName"
                                       placeholder="Your FullName"/>
                            </div>
                            @error('fullName')
                            <div class="text-error-for-slider">
                                <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                            </div>
                            @enderror
                            <div class="form-group">
                                <!--suppress HtmlFormInputWithoutLabel -->
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email"/>
                            </div>
                            @error('email')
                            <div class="text-error-for-slider">
                                <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                            </div>
                            @enderror
                            <div class="form-group">
                                <!--suppress HtmlFormInputWithoutLabel -->
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="Subject"/>
                            </div>
                            @error('subject')
                            <div class="text-error-for-slider">
                                <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                            </div>
                            @enderror
                            <div class="form-group">
                                <!--suppress HtmlFormInputWithoutLabel -->
                                <textarea class="form-control" name="message" rows="5"
                                          placeholder="Message"></textarea>
                            </div>
                            @error('message')
                            <div class="text-error-for-slider">
                                <p class="text-danger text-center font-weight-bolder">{{$message}}</p>
                            </div>
                            @enderror
                            <div class="text-center">
                                <button id="submit" type="submit" class="btn btn-success">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- =====================  End Left contact =====================  -->
            </div>
        </div>
    </div>
</div>
@section('js-me')
    <script src="{{asset("toast/dist/jquery.toast.min.js")}}"></script>
    <script>
        $('#form').submit(function (e) {
            e.preventDefault();
            let fullName = $('input[name=fullName]').val();
            let email = $('input[name=email]').val();
            let subject = $('input[name=subject]').val();
            let message = $('textarea[name=message]').val();
            let token = $('input[name=_token]').val();
            let action = $('#form').attr('action');
            $.ajax({
                url: action,
                type: "Post",
                data: {
                    fullName: fullName,
                    email: email,
                    subject: subject,
                    message: message,
                    _token: token,
                },
                success: function (data) {
                    if (data) {
                        $.toast({
                            heading: 'Success',
                            text: 'thank you for message',
                            showHideTransition: 'slide',
                            icon: 'success',
                            position: 'top-right',
                        });
                        $('input[name=fullName]').val("");
                        $('input[name=email]').val("");
                        $('input[name=subject]').val("");
                        $('textarea[name=message]').val("");
                    }
                }
            });
        });
    </script>
@endsection
