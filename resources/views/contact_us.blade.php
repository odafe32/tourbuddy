@extends('layouts/main_layout')

@section('content')

<div class="hero-wrapper page-heading">
    <div class="container hero-container center">
        <div data-w-id="32ae9b0d-927c-1bbf-aa56-10f981980ee1" class="hero-info center">
            <h1 data-w-id="32ae9b0d-927c-1bbf-aa56-10f981980ee2" class="heading">Contact Us<br/></h1>
            <div class="breadcrumbs dark">
                <a href="{{url('/')}}" class="breadcrumbs-link">Home</a>
                <div class="breadcrumbs-arrow"></div>
                <div class="subpage-title">Contact Us</div>
            </div>
        </div>
    </div>
</div>
<div class="section gray wf-section">
    <div class="container">
        <div class="form-content contact-us">
            <div class="form-block-contact">
                <div class="w-layout-grid grid-content-form">
                    <div id="w-node-f26c4f05-20f2-71af-851e-0027dbd84729-5c5e3331" class="div-block-second">
                        <h4 class="features-title">Reach Us!<br/></h4>
                        <p>Drop us your message.</p>
                    </div>
                    <div>
                        <div class="contact-info-block"><img src="{{url('assets/images/all/5f0637e54f711c35742f1618_icons8-marker-90.png')}}" width="22" alt="" class="info-icon" />
                            <div>
                                9494 Southwest freeway 450B, 77074.
									<br>Houston, Texas.
                            </div>
                        </div>
                        <div class="contact-info-block"><img src="{{url('assets/images/all/5f0637afcebb0e592b3f8028_icons8-email-send-90.png')}}" width="22" alt="" class="info-icon" />
                            <div>admin@transitsglobalcharity.org <br> transitsgcharity@gmail.com</div>
                        </div>
                        <div class="contact-info-block"><img src="{{url('assets/images/all/5f06376e56cba8e92f2d2615_icons8-add-phone-90.png')}}" width="22" alt="" class="info-icon" />
                            <div>+1 346 393 0398</div>
                        </div>
                    </div>
                </div>
                <div class="form-divider"></div>
                <div class="w-form">
                    <form id="contact-form" class="left-form">
                        <div class="w-layout-grid grid-contact">
                            <div id="w-node-_7c100892-9447-c016-8698-709aef7ca230-5c5e3331" class="w-clearfix">
                                <label for="Name" class="field-label-alternative contact-us-field gray">Name:</label>
                                <input type="text" class="text-field-contact w-input" maxlength="256" name="name" placeholder="Enter your name" id="Name" required="" />
                            </div>
                            <div id="w-node-_7c100892-9447-c016-8698-709aef7ca230-5c5e3331" class="w-clearfix">
                                <label for="Email-3" class="field-label-alternative contact-us-field gray">Email:</label>
                                <input type="email" class="text-field-contact w-input" maxlength="256" required name="email" placeholder="Enter your email" id="Email-3" />
                            </div>
                            <div id="w-node-_7c100892-9447-c016-8698-709aef7ca234-5c5e3331" class="w-clearfix">
                                <label for="message" class="field-label-alternative contact-us-field gray">Message:</label>
                                <textarea id="message" required name="message" maxlength="5000" placeholder="Share your message here." class="text-field-contact message w-input"></textarea>
                            </div>
                            <button type="submit" id="w-node-_7c100892-9447-c016-8698-709aef7ca238-5c5e3331" class="contact-submit button line w-button">Send Message</butoon>
                        </div>
                        <div class="center-button-block"></div>
                    </form>
                    <div class="success-message w-form-done">
                        <div>Thank you! Your message has been sent!</div>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3466.4327071097337!2d-95.54297932550989!3d29.678232035830785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c29f58fe342f%3A0xef539e358a45f41d!2s9494%20Southwest%20Fwy%20%23450b%2C%20Houston%2C%20TX%2077074%2C%20USA!5e0!3m2!1sen!2sng!4v1685468894581!5m2!1sen!2sng" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>




<script>
$(document).ready(function () {
	
	$('form#contact-form').submit(function(e){
		e.preventDefault();    
		var formData = new FormData(this);

		$.post({
			url: "{{url('contact-us')}}",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			beforeSend :function(){
				$('form#contact-form input').prop('disabled', true);
				$('form#contact-form textarea').prop('disabled', true);
				$(".contact-submit").html("<i>Please wait...</i>");
				$(".contact-submit").attr("disabled","");
				$(".contact-submit").removeAttr("type");           
			},
			success: function (response) {
				$('form#contact-form input').prop('disabled', false);
				$('form#contact-form textarea').prop('disabled', false);
				$(".contact-submit").html("Send Message");
				$(".contact-submit").removeAttr("disabled");
				$(".contact-submit").attr("type","submit");
				// console.log(response);

				if($.isEmptyObject(response.error)){
					// console.log(response);
					switch(response) {
						case 'success':
							$('form#contact-form').css('display', 'none');
							$('.success-message').css('display', 'block');
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

				}else{
					printErrorMsg(response.error);
				}
			}
		})

		function printErrorMsg (msg) {
			var errorText = "";
			$.each( msg, function( key, value ) {
				errorText += '<li>'+value+'</li>';
			});

			iziToast.error({
				title: errorText,
				position: 'topCenter',
				theme: 'light',
				timeout: 20000,
				progressBar: false,

			});
		}
	})




})
</script>
@endsection
