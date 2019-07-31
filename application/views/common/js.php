<script src="<?= base_url() ?>assets/js/modernizr-2.6.2.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery-1.10.2.min.js"></script>
<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap-select.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap-hover-dropdown.js"></script>
<script src="<?= base_url() ?>assets/js/easypiechart.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.easypiechart.min.js"></script>
<script src="<?= base_url() ?>assets/js/slimscroll/jquery.slimscroll.js"></script>
<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/js/wow.js"></script>
<script src="<?= base_url() ?>assets/js/icheck.min.js"></script>
<script src="<?= base_url() ?>assets/js/price-range.js"></script>
<script src="<?= base_url() ?>assets/js/main.js"></script>
<script>
    window.onscroll = function () {
        myFunction()
    };

    var header = document.getElementById("nav-menu");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
<script>
    function showMsg() {
        $("#success-alert").show(100);
        window.setTimeout(function () {
            $("#success-alert").alert('close', 200);
        }, 2000);
    }

    $("#success-alert").hide();
    $("#all_properties").click(function showAlert() {
        $('#chooseProperty').focus();
        alert('Select location and search');
        $('#basic').focus();
        //showMsg();
    });

</script>
<script>
    function change_state() {
        var state = $("#state").val();
        $.ajax({
            type: "POST",
            url: "getdist.php",
            data: "state=" + state,
            cache: false,
            success: function (response) {
                //alert(response);return false;
                $("#dist").html(response);
            }
        });

    }

    function change_dist() {
        var dist = $("#dist").val();
        $.ajax({
            type: "POST",
            url: "gettown.php",
            data: "dist=" + dist,
            cache: false,
            success: function (response) {
                //alert(response);return false;
                $("#town").html(response);
            }
        });

    }

</script>

<script>
    $(document).ready(function () {
        // Add slimscroll to element
        $('.scroll_content_1').slimscroll({
            height: 'auto'
        })

    })
</script>
</body>
<?php
function unsetSessionSearch() {
	unset($_SESSION['limit']);
	unset($_SESSION['dist']);
	unset($_SESSION['town']);
	unset($_SESSION['property_type']);
	unset($_SESSION['property_for']);
	unset($_SESSION['search']);
	unset($_SESSION['count_f']);
	unset($_SESSION['fre_pro_c']);
}

unsetSessionSearch();
?>
</html>
