jQuery(document).ready(function($) {
    $('#leadForm').submit(function(e) {
        e.preventDefault();

        const formData = {
            firstname: $('#firstname').val().trim(),
            lastname: $('#lastname').val().trim(),
            salutation: $('#salutation').val().trim(), 
            email: $('#email').val().trim(),
            mobile: $('#mobile').val().trim(),
            country: $('#country').val().trim(),
            county: $('#county').val().trim(),
            city: $('#city').val().trim(),
            nonce: leadFormSettings.nonce 
        };

        for (const key in formData) {
            if (!formData[key] && key !== 'nonce') {
                alert('All fields are required!');
                return;
            }
        }

        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!emailPattern.test(formData.email)) {
            alert('Please enter a valid email address.');
            return;
        }

        $.ajax({
            url: leadFormSettings.ajax_url,
            method: 'POST',
            data: {
                action: 'submit_lead_form',
                nonce: formData.nonce,
                firstname: formData.firstname,
                lastname: formData.lastname,
                salutation: formData.salutation,
                email: formData.email,
                mobile: formData.mobile,
                country: formData.country,
                county: formData.county,
                city: formData.city
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    alert(response.data.message);
                    $('#leadForm')[0].reset();
                    window.location.href = response.data.redirect_link; 
                } else {
                    console.log(response)
                    alert(response.data.message);
                }
            },
            error: function(status, error) {
                alert('An error occurred. Please try again later.');
                console.error('AJAX Error:', status, error);
            }
        });
    });
});