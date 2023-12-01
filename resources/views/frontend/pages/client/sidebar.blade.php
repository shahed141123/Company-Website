<div class="content_wrapper">
    <!--Sidebar Wrapper-->
    <div id="mySidebar">
        <!--Sidebar-->
        <div class="user_dashboard_sidebar_title">
            <h2>Account Tools <span onclick="userDashboardSidebarClicked()" class="d-flex justify-content-end mt-0"><i
                        class="fa-solid fa-chevron-left fa-sm"
                        style="margin-top: -20px;color: #707063;cursor: pointer;"></i></span>
            </h2>
            <p>Welcome back motiur.cmt@gmail.com.</p>
            <a href="#" class="common_button_logout mb-2">Logout - not you?</a>
            <hr><br>
        </div>
        <div class="user_dashboard_sidebar_nav">
            <a href="#">My Company</a>
            <a href="#">Dashboard</a>
            <p class="accordion-heading">Tools<span class="plusminus float-right mr-4">+</span></p>
            <div class="accordion-body" style="display: none;">
                <a href="#">Saved Carts / Order Templates</a>
            </div>
            <p class="accordion-heading">Personalization<span class="plusminus float-right mr-4">+</span></p>
            <div class="accordion-body" style="display: none;">
                <a href="#">Personal Product List</a>
                <a href="#">User Subsciptions</a>
                <a href="#">User Profile</a>
            </div>
        </div>
    </div>
    <script>
        //---------Sidebar list Show Hide----------
        $(document).ready(function() {
            $(".accordion-heading").click(function() {
                if ($(".accordion-body").is(':visible')) {
                    $(".accordion-body").slideUp(600);
                    $(".plusminus").text('+')
                } else {
                    $(this).next(".accordion-body").slideDown(600);
                    $(this).children(".plusminus").text('-');
                }
            });
        });
    </script>
