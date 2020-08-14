
$(document).ready(function() {
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend: function(xhr) {
            $(".err_common").css("display","none");
            $('#preloader').show();
        },
        complete: function(data) {
            $('#preloader').fadeOut(300)
        },
        success: function() {
            $('#preloader').fadeOut(300)
        },
        error: function() {
            $('#preloader').fadeOut(300)
        }
    });
	
	$(document).on('click', 'ul.custom-mega-menu li.mega-dropdown > .dropdown-toggle', function() {
        $(this).parent('li').toggleClass('open');
    });
	
    $($('[class*="alert-"]').detach()).prependTo('.section-empty > .container > .col-md-6 .row, .section-empty > .container > .row');

    $(document).on('click', '.book-l-appointment', function() {
        $('#meeting-form').slideUp();
        var selectedSlot = $('[name="selectedSlot"]').val();

        if (selectedSlot.trim() == "") {
            Swal.fire({
                title: 'Error!',
                text: "Please select slot 123.",
                icon: 'error',
                confirmButtonText: 'Ok'
            })
            return false;
        }
        $('#appointment-form').submit();
    })
    $(document).on('click', '.meeting-form', function() {
        
        var callData = this.getAttribute("data-type");
        if(callData == "call"){
            $('.call-hide').hide();
        }
        $('.profile-hide').hide();
        $('#booking-form').slideUp();
        $('#meeting-form').slideDown();
        $('[name="lawyer_id"]').val($(this).data('id'))
            // getAppointment()

    })


    $(document).on('click', '.login-popup', function() {
        $('#login-popup').modal('show');
    })
    $(document).on('click', '.slot-list .slots.available', function() {
        $('.slot-list .slots').removeClass('active')
        $(this).addClass('active')
        $('[name="selectedSlot"]').val($(this).text().trim());
    })


});
var getAppointment = function() {

        $('[name="selectedSlot"]').val('');
        $.ajax({
            type: "GET",
            url: "/get-availability",
            data: { "lawyer_id": $('[name="lawyer_id"]').val() },
            dataType: "JSON",
            success: function(response) {
                var slotHtml = '';
                $.each(response, function(inx, elem) {
                    slotHtml += '<span class="' + elem.class + '">' + elem.time + '</span>';
                })
                $('#slot-list').html(slotHtml);
            }
        })
    }
    // Book an appointment

$(function() {


    var options = {
        success: function(responseText, statusText) {
            // $('#appointmentModal').modal('hide');
            Swal.fire({
                title: 'Success!',
                text: responseText.error,
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        },
        beforeSubmit: function(formData, jqForm, options) {
            for (var i = 0; i < formData.length; i++) {
                if (!formData[i].value && formData[i].name == "selectedSlot") {
                    Swal.fire({
                        title: 'Error!',
                        text: "Please select slot.",
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    })
                    return false;
                }
            }
        },
        error: function(responseText, statusText, xhr, $form) {
            console.log(responseText, statusText, xhr);

            // Swal.fire({
            //     title: 'Error!',
            //     text: responseText.status == 401 ? 'Login to book appointment.' : 'You are not authorized to book appointment.',
            //     icon: 'error',
            //     confirmButtonText: 'Ok'
            // }).then((result) => {
            //     if (result.isConfirmed && responseText.status == 401) {
            //         window.location.href = '/login';
            //     }
            // })
        }
    };

    // if ($('#appointment-form').length > 0) {
    //     $('#appointment-form').ajaxForm(options);
    // }

    $('.error-msg').hide();
    $('.err_common').hide();
    var regoptions = {
        success: function(responseText, statusText) {

            if (responseText.success && responseText.created) {
                if (responseText.redirect) {
                    window.location.href = '/dashboard'
                }
                $('#verification_code').val("");
                $("#isVerified").val("")
                $('#registration-form').get(0).reset();
                $('.error-msg').show().removeClass('alert-danger').addClass('alert-success').html(responseText.message);
            } else {
                if (responseText.success && responseText.sent && !responseText.verified) {
                    Swal.fire({
                        title: 'Enter OTP',
                        input: 'text',
                        inputAttributes: {
                            autocapitalize: 'off',
                            maxlength: '6',
                            style: 'text-align:center',
                            onkeyup: 'keycode(this)'
                        },
                        showCancelButton: true,
                        confirmButtonText: 'Verify',
                        showLoaderOnConfirm: true,
                        preConfirm: (login) => {

                            $('#registration-form').submit();

                            //   return fetch(`//api.github.com/users/${login}`)
                            //     .then(response => {
                            //       if (!response.ok) {
                            //         throw new Error(response.statusText)
                            //       }
                            //       return response.json()
                            //     })
                            //     .catch(error => {
                            //       Swal.showValidationMessage(
                            //         `Request failed: ${error}`
                            //       )
                            //     })

                        },
                        // allowOutsideClick: () => !Swal.isLoading()
                    }).then((result) => {
                        // if (result.value) {
                        //   Swal.fire({
                        //     title: `${result.message}`,
                        //   })
                        // }
                    })
                }

                if (responseText.verified) {
                    $("#isVerified").val(true);
                    $(".err_common").hide();
                    $('#registration-form').submit();
                }
            }


        },
        beforeSubmit: function(formData, jqForm, options) {},
        error: function(responseText, statusText, xhr, $form) {
            var msg = "";
            if (!responseText.responseJSON.verified) {
                $('#verification_code').val("");
                $("#isVerified").val("")
            }
            if (responseText.responseJSON.errors) {
                $.each(responseText.responseJSON.errors, function(key, value) {
                    msg += value.join('<br/>') + '<br />'
                    $('[name="' + key + '"]').parent('div').addClass("has-error")
                    console.log(key + value)
                    $('.err_'+key).show().html(value)
                });
            } else {
                msg = responseText.responseJSON.message
            }

            // $('.error-msg').show().html(msg);
        },
        dataType: 'JSON'
    };

    if ($('#registration-form').length > 0) {
        $(".err_common").hide();
        $('#registration-form').ajaxForm(regoptions); //this one
    }

    // Book Appointment 

    // $.fn.validator.Constructor.INPUT_SELECTOR = ':input:not([type="hidden"], [type="submit"], [type="reset"], button)';

    $('#book-appointment').validator({
            focus: false
        }).on('submit', function(e) {
            if (e.isDefaultPrevented()) {
                console.log(e.currentTarget);
                // handle the invalid form...
            } else {
                console.log(e.currentTarget);
                e.preventDefault(e);
                var lawyerID = $('[name="lawyer_id"]').val();
                $.get("/getuserdetails/" + lawyerID).done(function(data) {
                    if (data.status == 200) {
                        var totalAmount = parseFloat(data.data.adv_fee) + parseFloat(data.data.adv_fee) * 0.18;
                        var options = {
                            "key": "rzp_test_wgLLwJGJNPhjP0",
                            "amount": (totalAmount * 100), // 2000 paise = INR 20
                            "name": "Kanoonvala",
                            "description": "Registration Fee",
                            "image": "/assets/images/favicon.png",
                            "prefill": {
                                "email": $('[name="customer_email"]').val(),
                                "contact": $('[name="contact_number"]').val(),
                                "name": $('[name="customer_name"]').val()
                            },
                            "handler": function(response) {

                                $.post("/appointment", $('#book-appointment').serialize()).done(function(data) {
                                    if (data.success) {
                                        $('#time-error-msg').removeClass('alert alert-danger').addClass('alert alert-success').fadeIn().html(data.error).delay(2000).fadeOut();

                                        $('#book-appointment').get(0).reset();
                                        $('.bizmoduleselect .btn-default').removeClass('active')
                                        $('[name="lawyer_id"]').val(lawyerID);

                                    } else {
                                        $('#time-error-msg').html('');
                                        $.each(data.errors, function(idx, err) {
                                            $.each(err, function(idx, er) {
                                                $('#time-error-msg').append(er[0]).fadeIn().delay(2000).fadeOut();
                                            })
                                        })
                                        $('#time-error-msg').removeClass('alert alert-success').addClass('alert alert-danger')
                                    }
                                });

                            }
                        };
                        var rzp1 = new Razorpay(options);
                        rzp1.open();
                    } else {

                    }
                });


                e.preventDefault();
            }
            return false;
        })
        // Validate Contact form

    $('#contactForm').validator({
        focus: false
    }).on('submit', function(e) {
        if (e.isDefaultPrevented()) {
            // console.log(e.currentTarget);
            // handle the invalid form...
        } else {
            e.preventDefault(e);
            // console.log($('#contactForm').serialize());

            $.post("/contactus", $('#contactForm').serialize()).done(function(data) {
                if (data.status == 200) {
                    $('#time-error-msg').removeClass('alert alert-danger').addClass('alert alert-success').html('We appreciate you contacting with kanoonvala. One of our colleagues will get back in touch with you soon!').delay(2000).fadeOut();
                    $('#contactForm').get(0).reset();
                } else {
                    $('#time-error-msg').html('');
                    if (data.errors) {
                        $.each(data.errors, function(idx, err) {
                            $.each(err, function(idx, er) {
                                $('#time-error-msg').append(er[0]).fadeIn().delay(2000).fadeOut();
                            })
                        })
                    } else {
                        $('#time-error-msg').append('Somthing went wrong. Please try again later or send your query to us at contact@kanoonvala.com').fadeIn();
                    }
                    $('#time-error-msg').removeClass('alert alert-success').addClass('alert alert-danger')
                }
            });
        }
        return false;
    })

    /************************* End Here ****************** */

    $('#enquiryForm').validator({
        focus: false
    }).on('submit', function(e) {
        if (e.isDefaultPrevented()) {
            // console.log(e.currentTarget);
            // handle the invalid form...
        } else {
            e.preventDefault(e);
            $.get("/enquiryFormSubmit", $('#enquiryForm').serialize()).done(function(data) {
                if (data.status == 200) {
                    $('#time-error-msg').removeClass('alert alert-danger').addClass('alert alert-success').html('We appreciate you contacting with Kanoonvala. Our Legal Team will get back in touch with you soon!').delay(2000).fadeOut();
                    // window.location.reload();
                    $('#enquiryForm').get(0).reset();
                    // Swal.fire({
                    //     title: 'Sent!',
                    //     text: "Thanks for contacting us!",
                    //     icon: 'success',
                    //   }).then((result) => {
                    //       window.location.reload();
                    //   })
                } else {
                    $('#time-error-msg').html('');
                    $.each(data.errors, function(idx, err) {
                        $.each(err, function(idx, er) {
                            $('#time-error-msg').append(er[0]).fadeIn().delay(2000).fadeOut();
                        })
                    })
                    $('#time-error-msg').addClass('alert alert-danger')
                }
            });
        }
        return false;
    })

    $('.search-input').keyup(function() {

        // Search text
        var text = $(this).val().toLowerCase();
        var searchContainer = $(this).data('target')
            // Hide all content class element
        $('.' + searchContainer + ' .form-check').hide();

        // Search 
        $('.' + searchContainer + ' .form-check').each(function() {

            if ($(this).text().toLowerCase().indexOf("" + text + "") != -1) {
                $(this).show();
            }
        });
    });

    $(document).on('click', '.meeting-popup', function() {
        var meetingType = $(this).data('type');
        alert(meetingType);
        $.ajax({
            type: "POST",
            url: "/bookmeeting",
            data: { "lawyer_id": $(this).data('id'), 'type': meetingType },
            dataType: "JSON",
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        title: 'Success!',
                        text: response.error,
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    })
                } else {
                    Swal.fire({
                        title: 'Alert!',
                        text: response.error,
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    })
                }
            }
        })
    })

    $(document).on('change', '.custom_filter input[type="checkbox"]', function() {

        filterdata();

    })

    $(document).on('click', '.clear-all', function() {
        $('.custom_filter input[type="checkbox"]').prop('checked', false);
        $('#lawyers_data_text').val('')
        filterdata()
    })
    $(document).on('keyup', '#lawyers_data_text', function() {
        if ($(this).val().length > 3)
            filterdata()
    })

    // $(document).on('click', '.page-link', function(event){
    //     // event.preventDefault(); 
    //     var page = $(this).attr('href').split('page=')[1];
    //     filterdata(page);
    //  });

    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '?');
            if (page == Number.NaN || page <= 0) {
                return false;
            } else {
                filterdata(page);
            }
        }
    });
   /*$(document).on('click', '.pagination a', function(event) {
        event.preventDefault();

        $('li').removeClass('active');
        $(this).parent('li').addClass('active');

        var myurl = $(this).attr('href');
        var page = $(this).attr('href').split('page=')[1];

        filterdata(page);
    });*/
    var filterdata = function(page = 1) {
        var formValue = $('#search-form').serialize() + '&page=' + page;

        $.ajax({
            type: "POST",
            url: "/search",
            data: formValue,
            success: function(response) {
                if (response) {
                    location.hash = page;
                    $('.search-container').html(response);
                } else {
                    $('.search-container').html('No record found');
                }
            }
        })
    }

    $('body').on('click', '.buy_now', function(e) {
        var totalAmount = $(this).attr("data-amount");
        var product_id = $(this).attr("data-id");
        var options = {
            "key": "rzp_test_wgLLwJGJNPhjP0",
            "amount": (totalAmount * 100), // 2000 paise = INR 20
            "name": "Kanoonvala",
            "description": "Registration Fee",
            "image": "/assets/images/favicon.png",
            "handler": function(response) {
                $.ajax({
                    url: '/paymentsuccess',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        razorpay_payment_id: response.razorpay_payment_id,
                        totalAmount: totalAmount,
                        product_id: product_id,
                    },
                    success: function(msg) {
                        $('#time-error-msg').show().addClass('alert alert-success').html('Payment has been done successfully.').delay(2000).fadeOut();
                        setTimeout(() => {
                            window.location.href = '/thank-you'
                        }, 2000);
                    }
                });

            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
        e.preventDefault();
    });
});



/** End here */