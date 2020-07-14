$(document).ready(function () {
    var url;
    switch (location.origin) {
        case "https://dev.workruit.com":
            url = "https://devapi.workruit.com/api/sendSupportEmail";
            break;
        case "https://www.workruit.com":
            url = "https://apiv2.workruit.com/api/sendSupportEmail";
            break;
        case "https://stage.workruit.com":
            url = "https://stageapi.workruit.com/api/sendSupportEmail";
            break;
        default:
            url = "https://devapi.workruit.com/api/sendSupportEmail";
            break;
    }
    $('.submit_contact_form').on('click', function (e) {
        e.preventDefault();
        let firstname = $('#fullName').val();
        let company = $('#company').val();
        let email = $('#email').val();
        let telephone = $('#telephone').val();

        $('.invalid-feedback').remove();

        var validate = true;
        if ($.trim(firstname).length <= 0) {
            validate = false;
            $('<div class="invalid-feedback">Name is required.</div>').insertAfter('input[name="name"]');
        }

        if ($.trim(company).length <= 0) {
            validate = false;
            $('<div class="invalid-feedback">Company Name is required.</div>').insertAfter('input[name="company"]');
        }
        if ($.trim(email).length <= 0) {
            validate = false;
            $('<div class="invalid-feedback">Email is required.</div>').insertAfter('input[name="email"]');
        } else {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if (!emailReg.test(email)) {
                validate = false;
                $('<div class="invalid-feedback">Please enter valid email.</div>').insertAfter('input[name="email"]');
            }
        }
        if ($.trim(telephone).length <= 0) {
            validate = false;
            $('<div class="invalid-feedback">Phone Number is required.</div>').insertAfter('input[name="telephone"]');
        }

        if (validate) {
            $('.submit_contact_form button').text('Please wait').addClass('disabled');
            var payload = {
                "name": $('#fullName').val(),
                "company": $('#company').val(),
                "email": $('#email').val(),
                "telephone": $('#telephone').val(),
                "subject": ""
            };
            var subject = $('.contact_form').attr('data-formType');
            if (subject == 'business') {
                payload.subject = "Website Enquiry: Schedule a demo";
            } else if (subject == 'govt') {
                payload.subject = "WIR Govt Enquiry";
            }
            console.log({
                url,
                payload
            });
            axios.post(url, payload, {
                    headers: {
                        "Content-Type": 'application/json',
                        "Token": '94b51cc4-0c99-11e7-93ae-92361f002671'
                    }
                })
                .then(function (response) {
                    console.log(response);
                    console.log("success");
                    // $('.contact_form')
                    $('.success_mail').removeClass('d-none');
                    $('input').val('');
                    $('.submit_contact_form button').text('Submit').removeClass('disabled');
                    setTimeout(() => {
                        $('.success_mail').addClass('d-none');
                        // window.reloadPage();
                    }, 8000);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
        }
    })
});