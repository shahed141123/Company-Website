/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */
// Single Image Show

function mainThamUrl(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#mainThmb').attr('src', e.target.result).width(80).height(80);
        };
        reader.readAsDataURL(input.files[0]);
    }
}


// Multi Image Show
$(document).ready(function () {
    $('#multiImg').on('change', function () { //on file input change
        alert('Multi image')
        if (window.File && window.FileReader && window.FileList && window
            .Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data
            $.each(data, function (index, file) { //loop though each file
                if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file
                    .type)) { //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function (file) { //trigger function on successful read
                        return function (e) {
                            var img = $('<img/>').addClass('thumb').attr('src',
                                e.target.result).width(100)
                                .height(80); //create image element
                            $('#preview_img').append(
                                img); //append image to output element
                        };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });
        } else {
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
    });
});

$(document).ready(function () {
    $(".phone_number").on("input", function (evt) {
        var self = $(this);
        self.val(self.val().replace(/[^0-9+()]/g, ''));

        if ((evt.which !== 46 || self.val().indexOf('.') !== -1) && (evt.which < 48 || evt.which > 57)) {
            evt.preventDefault();
        }
    });
    $(".price").on("input", function (evt) {
        var self = $(this);
        self.val(self.val().replace(/[^0-9\.]/g, ''));
        if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which >
            57)) {
            evt.preventDefault();
        }
    });

    // $(".email-validate").on("input", function() {
    //     const emailInput = $(this);
    //     const emailValidationMessage = emailInput.next('.validation-message');

    //     const email = emailInput.val().trim();
    //     const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    //     if (email === '') {
    //         emailValidationMessage.text('Email is required.');
    //         emailInput.addClass('input-error');
    //     } else if (!emailRegex.test(email)) {
    //         emailValidationMessage.text('Invalid email format.(Example : ');
    //         emailInput.addClass('input-error');
    //     } else {
    //         emailValidationMessage.text('');
    //         emailInput.removeClass('input-error');
    //     }
    // });
    $(".email-validate").on("input", function () {
        const emailInput = $(this);
        const emailValidationMessage = emailInput.next('.validation-message');
        const email = emailInput.val().trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email === '') {
            emailValidationMessage.text('Email is required.');
            emailInput.addClass('input-error');
        } else if (!emailRegex.test(email)) {
            const missingParts = [];

            if (!email.includes('@')) {
                missingParts.push('@');
            }
            if (!email.includes('com')) {
                missingParts.push('com');
            }
            if (!email.includes('.')) {
                missingParts.push('.');
            }
            if (!email.includes('@') || !email.includes('.') || !email.includes('com')) {
                emailValidationMessage.text('Email must contain: ' + missingParts.join(', '));
            } else {
                emailValidationMessage.text('Invalid email format.');
            }

            emailInput.addClass('input-error');
        } else {
            emailValidationMessage.text('');
            emailInput.removeClass('input-error');
        }
    });
});
