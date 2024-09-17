@extends('layouts/main_layout')

@section('content')
    <div class="main-wrapper">
        {{-- intro --}}
        <div class="breadcrumb-section wf-section">
            <div class="breadcrumb-background">
                <div class="breadcrumb-gap">
                    <div class="container display-flex align-items-center text-center w-container">
                        <div class="breadcrumb-content">
                            <div data-w-id="cb23fd55-3014-a176-e8a2-e8480bfd1beb" class="breadcrumb-tag">Contact</div>
                            <h1 data-w-id="cb23fd55-3014-a176-e8a2-e8480bfd1bed" class="breadcrumb-title"> Get Connected




                            </h1>
                            <div data-w-id="cb23fd55-3014-a176-e8a2-e8480bfd1bef" class="breadcrumb-text">
                                Explore a world of breathtaking destinations with Tourbuddy. From serene beaches and
                                majestic mountains to vibrant cities and historical landmarks, we offer travel packages
                                that
                                take you to the most captivating places in Enugu.
                            </div>

                        </div>
                    </div>
                    <div class="breadcrumb-element-1"><img
                            src="{{ url('assets/images/1/63b3b45bc096181bd82b7146_hero-element-1.svg') }}" loading="lazy"
                            alt="Hero Element" /></div>
                    <div class="breadcrumb-element-2"><img
                            src="{{ url('assets/images/1/63be4b0dac4c2a533ff151e1_breadcrumb-element-2.svg') }}"
                            loading="lazy" alt="Banner Element Image" /></div>
                </div>
            </div>
        </div>

        <div class="contact-section wf-section">
            <div class="section-gap">
                <div class="container w-container">
                    <div class="contact-block">
                        <!-- Left Side: Contact Information -->
                        <div class="contact-left">
                            <div class="section-wrapper">
                                <div class="section-block">
                                    <div class="section-tag-block">
                                        <div class="hero-tag">Contact info</div>
                                    </div>
                                    <h1 class="section-title max-width-371">Get in touch</h1>
                                    <p class="section-text text-gray">We’d love to hear from you. Our friendly team is
                                        always
                                        here to chat.</p>
                                </div>
                            </div>
                            <ul role="list" class="contact-list">
                                <li class="contact-list-item">
                                    <div class="contact-icon">
                                        <img src="{{ url('assets/images/Destination/mail.svg') }}" alt="Mail Icon" />
                                    </div>
                                    <div class="contact-content">
                                        <div class="contact-title">Chat to us</div>
                                        <div class="contact-subtitle">Our friendly team is here to help.</div>
                                        <a href="mailto:" class="contact-info-link">admin@tourbuddy</a>

                                    </div>
                                </li>
                                <li class="contact-list-item">
                                    <div class="contact-icon">
                                        <img src="{{ url('assets/images/Destination/office.svg') }}" alt="Location Icon" />
                                    </div>
                                    <div class="contact-content">
                                        <div class="contact-title">Office</div>
                                        <div class="contact-subtitle">Come say hello at our office HQ.</div>
                                        <div class="contact-info-text">914b Umuezebi Street New Haven, Enugu, Nigeria
                                        </div>
                                    </div>
                                </li>
                                <li class="contact-list-item">
                                    <div class="contact-icon">
                                        <img src="{{ url('assets/images/Destination/phone.svg') }}" alt="Phone Icon" />
                                    </div>
                                    <div class="contact-content">
                                        <div class="contact-title">Phone</div>
                                        <div class="contact-subtitle">Our friendly team is here to help.</div>
                                        <a href="tel:+" class="contact-info-link">+234 810 995 2138</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Right Side: Contact Form -->
                        <div class="contact-right">
                            <div class="contact-form-title">Leave a comment</div>
                            <div id="Contact-Form" class="contact-form-block w-form">
                                <form id="contact-form" class="contact-form" method="POST"
                                    action="{{ url('contact-us') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="input-default-style w-input" name="name"
                                            placeholder="Name*" required />
                                        <input type="email" class="input-default-style w-input" name="email"
                                            placeholder="Email*" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="input-default-style w-input" name="phone"
                                            placeholder="Phone*" required />
                                        <input type="text" class="input-default-style w-input" name="subject"
                                            placeholder="Subject*" required />
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="input-default-style default-text-area w-input" placeholder="Write here" required></textarea>
                                    </div>
                                    <div class="form-button-block">
                                        <button type="submit"
                                            class="button-default background-orange w-button">Submit</button>
                                    </div>
                                </form>
                                <div class="w-form-done">
                                    <div>Thank you! Your submission has been received!</div>
                                </div>
                                <div class="w-form-fail">
                                    <div>Oops! Something went wrong while submitting the form.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- start newsletter --}}
    @include('common/news_letter')
    {{-- end newsletter --}}


    <script>
        $(document).ready(function() {

            // Update the form selector to match the new form structure
            $('form#wf-form-Contact-Form').submit(function(e) {
                e.preventDefault(); // Prevent the default form submission
                var formData = new FormData(this);

                $.post({
                    url: "{{ url('contact-us') }}", // Laravel route to handle the form submission
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        // Disable the form fields and update the button text to indicate processing
                        $('form#wf-form-Contact-Form input, form#wf-form-Contact-Form textarea')
                            .prop('disabled', true);
                        $(".button-default").html("<i>Please wait...</i>").prop('disabled',
                            true);
                    },
                    success: function(response) {
                        // Re-enable the form fields and restore the button text
                        $('form#wf-form-Contact-Form input, form#wf-form-Contact-Form textarea')
                            .prop('disabled', false);
                        $(".button-default").html("Submit").prop('disabled', false);

                        if ($.isEmptyObject(response.error)) {
                            // Handle the successful submission
                            switch (response) {
                                case 'success':
                                    $('form#wf-form-Contact-Form').css('display',
                                        'none'); // Hide the form
                                    $('.w-form-done').css('display',
                                        'block'); // Show the success message
                                    break;
                                default:
                                    iziToast.error({
                                        title: response,
                                        position: 'topCenter',
                                        theme: 'light',
                                        timeout: 20000,
                                        progressBar: false,
                                    });
                            }
                        } else {
                            // Print validation error messages if any
                            printErrorMsg(response.error);
                        }
                    }
                });

                function printErrorMsg(msg) {
                    var errorText = "";
                    $.each(msg, function(key, value) {
                        errorText += '<li>' + value + '</li>';
                    });

                    // Display error messages using iziToast
                    iziToast.error({
                        title: errorText,
                        position: 'topCenter',
                        theme: 'light',
                        timeout: 20000,
                        progressBar: false,
                    });
                }
            });
        });
    </script>
@endsection
