<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#search").click(function() {
            $(".menu-item").addClass("hide-item");
            $(".search-form").addClass("active");
            $(".close").addClass("active");
            $(".dropdown").hide();
            $("#search").hide();
            $(".fa-shopping-basket").hide();
        });
        $(".close").click(function() {
            $(".menu-item").removeClass("hide-item");
            $(".search-form").removeClass("active");
            $(".close").removeClass("active");
            $("#search").show();
            $(".dropdown").show();
            $(".fa-shopping-basket").show();
        });
    });
</script>