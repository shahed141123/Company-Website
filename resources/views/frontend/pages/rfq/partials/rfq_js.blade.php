<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- jQuery Repeater -->
<script src="https://cdn.jsdelivr.net/npm/jquery.repeater@1.2.1/jquery.repeater.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

{{-- Form Repeater --}}
<script>
    $(document).ready(function() {
        $("#repeater-form").repeater({
            show: function() {
                $(this).slideDown();
            },
            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            },
        });
    });
</script>
{{-- Multi Select --}}
<script>
    // Initialize Select2
    $(document).ready(function() {
        $('.multiSelect').select2({
            placeholder: 'Select Options',
            allowClear: true
        });
    });
</script>


<script>
    document.addEventListener('keyup', function(event) {
        if (event.target.matches('#productSearchInput')) {
            showSuggestions(event);
        }
    });

    function showSuggestions(event) {
        let inputElement = event.target;
        let parentElement = inputElement.closest('.searchInput'); // Find the parent container
        let suggestionsList = parentElement.querySelector(".suggestionList");

        if (suggestionsList) { // Check if the suggestions list exists
            let suggestions = suggestionsList.getElementsByTagName("li");

            // Iterate through suggestions and show/hide based on user input
            for (let i = 0; i < suggestions.length; i++) {
                let suggestion = suggestions[i].innerText.toLowerCase();
                if (suggestion.startsWith(inputElement.value.toLowerCase())) {
                    suggestions[i].style.display = "block";
                } else {
                    suggestions[i].style.display = "none";
                }
            }

            // Show/hide the suggestion list based on user input
            if (inputElement.value.trim() !== "") {
                suggestionsList.style.display = "block";
            } else {
                suggestionsList.style.display = "none";
            }

            // Add click event listener to dynamically generated suggestions
            suggestionsList.addEventListener('click', function(event) {
                if (event.target.tagName === 'LI') {
                    inputElement.value = event.target.innerText;
                    suggestionsList.style.display = "none";
                }
            });
        }
    }

    document.addEventListener('click', function(event) {
        if (!event.target.matches('.suggestionList li') && !event.target.matches('#productSearchInput')) {
            hideAllSuggestions();
        }
    });

    function hideAllSuggestions() {
        let allSuggestionLists = document.querySelectorAll('.suggestionList');
        allSuggestionLists.forEach(function(suggestionsList) {
            suggestionsList.style.display = "none";
        });
    }
</script>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const csSelector = document.querySelector('#myCustomSelect');
        const csInput = csSelector.querySelector('input');
        const csList = csSelector.querySelector('ul');
        const csOptions = Array.from(csList.querySelectorAll('li'));
        const csStatus = document.querySelector('#custom-select-status');
        let csState = "initial";

        initialize();

        function initialize() {
            csSelector.setAttribute('role', 'combobox');
            csSelector.setAttribute('aria-haspopup', 'listbox');
            csSelector.setAttribute('aria-owns', 'custom-select-list');
            csInput.setAttribute('aria-autocomplete', 'both');
            csInput.setAttribute('aria-controls', 'custom-select-list');
            csList.setAttribute('role', 'listbox');

            csOptions.forEach(option => {
                option.setAttribute('role', 'option');
                option.setAttribute('tabindex', '-1');
            });

            csStatus.textContent =
                `${csOptions.length} options available. Arrow down to browse or start typing to filter.`;
            setState('initial');

            csSelector.addEventListener('click', handleClick);
            csSelector.addEventListener('keyup', handleKeyUp);
            document.addEventListener('click', handleOutsideClick);
        }

        function handleClick(event) {
            const currentFocus = document.activeElement;
            switch (csState) {
                case 'initial':
                    toggleList('Open');
                    setState('opened');
                    break;
                case 'opened':
                    if (currentFocus === csInput) {
                        toggleList('Shut');
                        setState('initial');
                    } else if (currentFocus.tagName === 'LI') {
                        makeChoice(currentFocus);
                        toggleList('Shut');
                        setState('closed');
                    }
                    break;
                case 'filtered':
                    if (currentFocus.tagName === 'LI') {
                        makeChoice(currentFocus);
                        toggleList('Shut');
                        setState('closed');
                    }
                    break;
                case 'closed':
                    toggleList('Open');
                    setState('filtered');
                    break;
            }
        }

        function handleKeyUp(event) {
            doKeyAction(event.key);
        }

        function handleOutsideClick(event) {
            if (!event.target.closest('#myCustomSelect')) {
                toggleList('Shut');
                setState('initial');
            }
        }

        function toggleList(whichWay) {
            if (whichWay === 'Open') {
                csList.classList.remove('hidden-all');
                csSelector.setAttribute('aria-expanded', 'true');
            } else {
                csList.classList.add('hidden-all');
                csSelector.setAttribute('aria-expanded', 'false');
            }
        }

        function findFocus() {
            return document.activeElement;
        }

        function moveFocus(fromHere, toThere) {
            const aCurrentOptions = csOptions.filter(option => option.style.display === '');
            if (aCurrentOptions.length === 0) return;

            if (toThere === 'input') {
                csInput.focus();
                return;
            }

            const currentIndex = aCurrentOptions.indexOf(fromHere);
            let nextIndex;
            if (toThere === 'forward') {
                nextIndex = currentIndex < script aCurrentOptions.length - 1 ? currentIndex + 1 : 0;
            } else {
                nextIndex = currentIndex > 0 ? currentIndex - 1 : aCurrentOptions.length - 1;
            }
            aCurrentOptions[nextIndex].focus();
        }

        function doFilter() {
            const terms = csInput.value.toUpperCase();
            const aFilteredOptions = csOptions.filter(option => option.innerText.toUpperCase().startsWith(
                terms));
            csOptions.forEach(option => option.style.display = "none");
            aFilteredOptions.forEach(option => option.style.display = "");
            setState('filtered');
            updateStatus(aFilteredOptions.length);
        }

        function updateStatus(howMany) {
            csStatus.textContent = `${howMany} options available.`;
        }

        function makeChoice(whichOption) {
            csInput.value = whichOption.textContent;
            moveFocus(document.activeElement, 'input');
        }

        function setState(newState) {
            csState = newState;
        }

        function doKeyAction(key) {
            const currentFocus = findFocus();
            switch (key) {
                case 'Enter':
                    if (csState === 'initial') {
                        toggleList('Open');
                        setState('opened');
                    } else if ((csState === 'opened' || csState === 'filtered') && currentFocus.tagName ===
                        'LI') {
                        makeChoice(currentFocus);
                        toggleList('Shut');
                        setState('closed');
                    } else if ((csState === 'opened' || csState === 'filtered') && currentFocus === csInput) {
                        toggleList('Shut');
                        setState('closed');
                    } else {
                        toggleList('Open');
                        doFilter();
                        setState('filtered');
                    }
                    break;
                case 'Escape':
                    if (csState === 'opened' || csState === 'filtered') {
                        toggleList('Shut');
                        setState('initial');
                    }
                    break;
                case 'ArrowDown':
                    if (csState === 'initial' || csState === 'closed') {
                        toggleList('Open');
                        moveFocus(csInput, 'forward');
                        setState('opened');
                    } else {
                        toggleList('Open');
                        moveFocus(currentFocus, 'forward');
                    }
                    break;
                case 'ArrowUp':
                    if (csState === 'initial' || csState === 'closed') {
                        toggleList('Open');
                        moveFocus(csInput, 'back');
                        setState('opened');
                    } else {
                        moveFocus(currentFocus, 'back');
                    }
                    break;
                default:
                    if (csState === 'initial') {
                        toggleList('Open');
                        doFilter();
                        setState('filtered');
                    } else if (csState === 'opened' || csState === 'filtered') {
                        doFilter();
                    }
                    break;
            }
        }
    });
</script>

<script>
    // For Step Form
    // start //
    $('.progress_holder:nth-child(1)').addClass('activated_step');


    // Manage next and previous buttons //
    $(".nextStep").click(function() {
        // button is inside fieldset so set current and next vars //
        current_fs = $(this).parents('fieldset');
        next_fs = $(this).parents('fieldset').next();
        // make sure all fields are filled in //
        var empty = current_fs.find("input.required-field").filter(function() {
            return this.value === "";
        });
        if (empty.length) {
            alert('Please fill in all fields.');
        } else {
            //show the next fieldset
            next_fs.fadeIn(150, 'linear').addClass('current');
            //hide the current fieldset with style
            current_fs.fadeOut(0, 'linear').removeClass('current');
            // change nav class //
            if ($('fieldset.current').attr('id') == 'step2') {
                $('.progress_holder:nth-child(2)').addClass('activated_step');
            }
            if ($('fieldset.current').attr('id') == 'step3') {
                $('.progress_holder:nth-child(3)').addClass('activated_step');
            }
            if ($('fieldset.current').attr('id') == 'step4') {
                $('.progress_holder:nth-child(4)').addClass('activated_step');
            }
            if ($('fieldset.current').attr('id') == 'step5') {
                $('.progress_holder:nth-child(5)').addClass('activated_step');
            }
        }
    });
    $(".prevStep").click(function(e) {
        e.preventDefault();
        current_fs = $(this).parents('fieldset');
        previous_fs = $(this).parents('fieldset').prev();
        //show the previous fieldset
        previous_fs.fadeIn(150, 'linear');
        //hide the current fieldset with style
        current_fs.fadeOut(0, 'linear');


        if ($(previous_fs).attr('id') == 'step1') {
            $('.progress_holder:nth-child(2)').removeClass('activated_step');
        }
        if ($(previous_fs).attr('id') == 'step2') {
            $('.progress_holder:nth-child(3)').removeClass('activated_step');
        }
        if ($(previous_fs).attr('id') == 'step3') {
            $('.progress_holder:nth-child(4)').removeClass('activated_step');
        }
        if ($(previous_fs).attr('id') == 'step4') {
            $('.progress_holder:nth-child(5)').removeClass('activated_step');
        }
    });
</script>

{{-- Active Background Color --}}
<script>
    $(document).ready(function() {
        // Initial setup based on the default active tab
        updateShadowClass();

        // Handle tab changes
        $('input[name="rfqType"]').on('change', function() {
            updateShadowClass();
        });

        // Function to update the shadow class based on the active tab
        function updateShadowClass() {
            if ($('#home-tab').hasClass('active')) {
                $('.rfq_box1').addClass('changing-class');
                $('.rfq_box2').removeClass('changing-class');
            } else {
                $('.rfq_box1').removeClass('changing-class');
                $('.rfq_box2').addClass('changing-class');
            }
        }
    });
</script>
