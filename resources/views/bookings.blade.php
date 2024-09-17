@extends('layouts/main_layout')

@section('content')
    {{-- wrapper --}}
    <div class="main-wrapper">
        {{-- intro --}}
        <div class="breadcrumb-section wf-section">
            <div class="breadcrumb-background">
                <div class="breadcrumb-gap">
                    <div class="container display-flex align-items-center text-center w-container">
                        <div class="breadcrumb-content">
                            <div data-w-id="cb23fd55-3014-a176-e8a2-e8480bfd1beb" class="breadcrumb-tag">Bookings
                            </div>
                            <h1 data-w-id="cb23fd55-3014-a176-e8a2-e8480bfd1bed" class="breadcrumb-title">Book Now</h1>
                            <div data-w-id="cb23fd55-3014-a176-e8a2-e8480bfd1bef" class="breadcrumb-text"> Explore a world
                                of breathtaking destinations with Tourbuddy. From serene beaches and
                                majestic mountains to vibrant cities and historical landmarks, we offer travel packages that
                                take you to the most captivating places in Enugu.</div>
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
        {{-- bookings --}}
        <div class="booking-section wf-section">
            <div class="section-gap">
                <div class="container w-container">
                    <div class="booking-block">
                        <div class="contact-right">
                            <div id="Booking-Form" class="booking-form-block w-form">
                                <form id="wf-form-Booking-Form" name="wf-form-Booking-Form" data-name="Booking Form"
                                    method="get" class="booking-form">
                                    <div class="form-group-2-column">
                                        <input type="text" class="input-default-style w-input" maxlength="256"
                                            name="Name" placeholder="*Name" id="Booking-Name" required />
                                        <input type="email" class="input-default-style w-input" maxlength="256"
                                            name="Email" placeholder="*Email" id="Booking-Email" required />
                                    </div>
                                    <div class="form-group-2-column">
                                        <input type="tel" class="input-default-style w-input" maxlength="256"
                                            name="Phone" placeholder="*Phone" id="Booking-Phone" required />
                                        <input type="email" class="input-default-style w-input" maxlength="256"
                                            name="Confirm-Email" placeholder="*Confirm Email" id="Booking-Confirm-Email"
                                            required />
                                    </div>
                                    <div class="form-group-2-column">
                                        <select id="Booking-Tour-Select" name="tour-type"
                                            class="input-default-style w-select">
                                            <option value="">Types of Tour</option>
                                            <option value="Adventure Tour">Adventure Tour</option>
                                            <option value="Honeymoon">Honeymoon</option>
                                            <option value="Tracking">Tracking</option>
                                            <option value="Holiday Camp">Holiday Camp</option>
                                        </select>
                                        <select id="Booking-Guests-Select" name="num-of-guests"
                                            class="input-default-style w-select">
                                            <option value="">No. of Guests</option>
                                            <option value="01 Person">01 Person</option>
                                            <option value="02 Persons">02 Persons</option>
                                            <option value="03 Persons">03 Persons</option>
                                            <option value="04 Persons">04 Persons</option>
                                            <option value="05 Persons">05 Persons</option>
                                        </select>
                                    </div>
                                    <div class="form-group-2-column">
                                        <input type="date" class="input-default-style w-input" name="Start-Date"
                                            placeholder="Start Date" id="Booking-Start-Date" required />
                                        <input type="date" class="input-default-style w-input" name="End-Date"
                                            placeholder="End Date" id="Booking-End-Date" required />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="input-default-style defaul-text-area min-height-281 w-input" maxlength="5000" name="Message"
                                            placeholder="Write here" id="Message" required></textarea>
                                    </div>
                                    <div class="from-button-block">
                                        <input type="submit" value="Book now"
                                            class="button-default background-light-sea-green w-button" />
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
        {{-- end section --}}

    </div>
@endsection
