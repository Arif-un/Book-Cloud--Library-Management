<!--/**
* Created by PhpStorm.
* User: Arif
 * Date: 2/24/2018z -->
 <!--<script type="text/javascript" src="../../resource/js/plugins/jquery-1.11.2.min.js"></script>-->
<script src="../../resource/js/jquery2.24.js"></script>

<!--materialize js-->
<script type="text/javascript" src="../../resource/js/materialize_this.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="../../resource/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>


<!--DATA TABLE-->
<script type="text/javascript" src="../../resource/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../resource/js/plugins/data-tables/data-tables-script.js"></script>

<!-- chartist -->
<!--<script type="text/javascript" src="../../resource/js/plugins/chartist-js/chartist.min.js"></script>-->

<!-- chartjs -->
<!--<script type="text/javascript" src="../../resource/js/plugins/chartjs/chart.min.js"></script>
<script type="text/javascript" src="../../resource/js/plugins/chartjs/chart-script.js"></script>-->

<!-- sparkline -->
<script type="text/javascript" src="../../resource/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="../../resource/js/plugins/sparkline/sparkline-script.js"></script>

<!-- google map api -->
<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>-->

<!--jvectormap-->
<script type="text/javascript" src="../../resource/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="../../resource/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="../../resource/js/plugins/jvectormap/vectormap-script.js"></script>


<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="../../resource/js/plugins.min.js"></script>

<script type="text/javascript" src="../../resource/node_modules/show-more/jquery.show-more.js"></script>

<!--confirm js-->
<script type="text/javascript" src="../../resource/js/jquery_confirm/jquery-confirm.min.js"></script>
<script>
    $('a.confirm_borrow').confirm({
        animation: 'scale',
        boxWidth: '40%',
        useBootstrap: false,
        title: 'Confirm !',
        type: 'blue',
        content: 'Are you sure to Borrow this book ? <br> You can Borrow this book for <b>10</b> days',
        buttons: {
            hey: {
                text: 'Request',
                btnClass: 'btn-blue',
                action: function () {
                    book_req();
                    $.alert({
                        animation: 'scale',
                        boxWidth: '40%',
                        useBootstrap: false,
                        closeIcon: true,
                        type: 'green',
                        content: 'Book Borrow Request has been sent Successfully !!'
                    });
                }

            },
            heyThere: {
                text: 'Cancel',
                close: function () {
                }

            }
        }
    });

</script>

<!--custom-script.js - Add your own theme custom JS-->
<script type="text/javascript" src="../../resource/js/custom-script.js"></script>
<!-- Toast Notification -->
<!--<script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
        }, 1500);
        setTimeout(function() {
            Materialize.toast('<span>You can swipe me too!</span>', 3000);
        }, 5000);
        setTimeout(function() {
            Materialize.toast('<span>You have new order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
        }, 15000);
    });

</script>-->

<script type="text/javascript" src="../../resource/slick-1.8.0/slick.min.js"></script>
<script>
    $('.crsl').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>

<script>
    function seenNotify(e){
        var id = e.id;
        var post = {"seenId": id};
        $.ajax({
            //cache : false,
            url: "../../controller/notify_ctrl.php",
            type: "POST",
            //dataType : 'JSON',
            data: post,
            success: function (success) {
                if (success === "success") {
                    console.log("ok");
                }
            }

        })
    }
</script>




