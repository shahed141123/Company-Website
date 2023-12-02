<!--Feedback Page-->
<section>
    <div id="feedback_Sidebar" class="feedbacksidebar">
        <div class="feedback_header_logo">
            <button class="close_feedback" onclick="feedbackButtonClicked()"><i
                    class="close-btn fas fa-times"></i></button>
            <div class="modal_logo_feedback">
                <img src="{{ asset('assets/frontend/image/Logo/logo.png') }}" alt="">
            </div>
        </div>
        <div style="height: 5px; width:100%; background: linear-gradient(90deg, #ae0a46, #a80b6e 25%, #582873 75%);">
        </div>
        <div id="feedback" class="feedback_details">
            <p>Thank you for assisting us with your feedback in this quick survey. Please take a minute to answer the
                questions below regarding your experience.<br><br>
                If you are experiencing an issue with your account, orders, or billing and want immediate assistance,
                please use our chat feature. </p>
            <div class="d-flex justify-content-end">
                <button style="margin: -15px 10px;" class="feedback_continue_btn" onclick="feedbackVisible();"
                    value="Click">continue</button>
            </div>
        </div>
        <div id="feedback_details" class="feedback_details" style="display: none;">
            <p>What topic(s) would you like to provide feedback on?</p>

            <form action="" method="POST">
                @csrf
                <!--Check Box item-->
                @foreach ($orders as $item)
                    @php
                        $checked = [];
                        if (isset($_GET['feedback'])) {
                            $checked = $_GET['feedback'];
                        }
                    @endphp
                    <div class="checkbox_wrapper">
                        <label class="feedback_details_checkbox" style="font-size: 14px">{{ $item }}
                            <input type="checkbox" name="feedback[]" value="{{ $item }}"
                                @if (in_array($item, $checked)) checked @endif />
                            <span class="checkmark_feedback"></span>
                        </label>
                    </div>
                @endforeach
                <p>Based on your selected topic(s) above, how would you rate your overall web experience?</p>
                <!--Check Rounded item-->
                @foreach ($orders as $item)
                    <div class="checkrounded_wrapper">
                        <label class="feedback_details_checkrounded" style="font-size: 14px">
                            <input type="checkbox" name="star" value="{{ $item }}" onclick="onlyOne(this)"
                                required>
                            <p>{{ $item }}</p>
                            <span class="checkmark_rounded"></span>
                        </label>
                    </div>
                @endforeach

                <div class="d-flex justify-content-end m-2">
                    <button type="submit" class="feedback_continue_btn" style="float:right">continue <i
                            class="fa-solid fa-chevron-right"></i></button>
                </div>
        </div>
    </div>
    </form>


    <div id="feedback_btn" class="d-none">
        <button id="sidebarButton_fb" class="openbtnfeedback" onclick="feedbackButtonClicked()"><i
                class="fa-solid fa-bullhorn"></i> Feedback</button>
    </div>
</section>

<script>
    var pxBtShow = 500;
    var scrollSpeed = 500;

    $(window).scroll(function() {
        if ($(window).scrollTop() >= pxBtShow) {
            $("#feedback_btn").removeClass('d-none');
        } else {
            $("#feedback_btn").addClass('d-none');
        }
    });
</script>
<style>
    .feedbacksidebar::-webkit-scrollbar {
        width: 5px;
    }

    .feedbacksidebar::-webkit-scrollbar-track {
        background: #f3f3f3;
    }

    .feedbacksidebar::-webkit-scrollbar-thumb {
        background-color: #322B5F;
        border-radius: 50px;
    }
</style>
