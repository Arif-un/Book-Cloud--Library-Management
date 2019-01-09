<!-- jQuery Library -->
<!--<script type="text/javascript" src="../../resource/js/plugins/jquery-1.11.2.min.js"></script>-->
<!--<script type="text/javascript" src="../../resource/js/jquery%201.12.js"></script>-->
<!--<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>-->
<script src="../../resource/js/jquery2.24.js"></script>
<!--<script src="http://code.jquery.com/jquery-migrate-1.4.1.js"></script>-->
<!--materialize js-->
<script type="text/javascript" src="../../resource/js/materialize_this.js" ></script>
<!--scrollbar-->
<script type="text/javascript" src="../../resource/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script type="text/javascript" src="../../resource/css/fontawesome-free-5.0.6/svg-with-js/js/fontawesome-all.min.js"></script>


<!--DATA TABLE-->
<script type="text/javascript" src="../../resource/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../resource/js/plugins/data-tables/data-tables-script.js"></script>
<!-- sparkline -->
<script type="text/javascript" src="../../resource/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="../../resource/js/plugins/sparkline/sparkline-script.js"></script>



<script type="text/javascript" src="../../resource/js/sweet_alert.min.js"></script>


<script type="text/javascript" src="../../resource/js/jquery_confirm/jquery-confirm.min.js"></script>

<!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->

<!--google map-->
<!--<script type="text/javascript" src="../../resource/js/plugins/google-map/google-map-script.js"></script>-->
<script type="text/javascript" src="../../resource/ckeditor5-build-classic/ckeditor.js"></script>

<script>
    var myEditor;
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
        console.log( editor );
    myEditor = editor;
    } )




</script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="../../resource/js/plugins.min.js"></script>
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
<script>
    function approved() {
        setTimeout(function () {
            Materialize.toast('<span>Approved !!</span>',10000);
        }, 1500);
    }
</script>

<script type="text/javascript">
$('.datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
selectYears: 60, // Creates a dropdown of 15 years to control year,
today: 'Today',
clear: 'Clear',
close: 'Ok',
closeOnSelect: false // Close upon selecting a date,
});

</script>

<script type="text/javascript">  /*modal*/
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
       // $('.modal-trigger').leanModal();

</script>

<script type="text/javascript">
    $('.tooltipped').tooltip({delay: 50});
</script>

<script type="text/javascript">
     $('ul.tabs').tabs('select_tab', 'tab_id');
     $('select').material_select();
</script>

<!--confirm-->
<script>
    $('a.approv_dilg').confirm({
        animation: 'scale',
        boxWidth: '40%',
        useBootstrap: false,
        closeIcon: true,
        title: 'Confirm !',
        type: 'green',
        content: 'Are you sure to approve this request ?',
        buttons: {
            hey: {
                text: 'Approve',
                btnClass: 'btn-green',
                action: function () {
                    location.href = this.$target.attr('href');
                }

            },
            heyThere: {
                text: 'Cancel',
                close: function () {
                }

            }
        }
    });

    $('a.delete_dilg').confirm({
        animation: 'scale',
        boxWidth: '40%',
        useBootstrap: false,
        title: 'Confirm !',
        closeIcon: true,
        content: 'Are you sure delicine this request ?',
        buttons: {
            hey: {
                text: 'Delete',
                btnClass: 'btn-red',
                action: function () {
                    location.href = this.$target.attr('href');
                }

            },
            heyThere: {
                text: 'Cancel',
                close: function () {
                }

            }
        }
    });

    $('a.confirm_renew').confirm({
        animation: 'scale',
        boxWidth: '40%',
        useBootstrap: false,
        title: 'Confirm !',
        type: 'blue',
        content: 'Are you sure to Renew this book ? <br> It will renew this book for <b>10</b> days',
        buttons: {
            hey: {
                text: 'Renew',
                btnClass: 'btn-blue',
                action: function () {
                    location.href = this.$target.attr('href');
                }

            },
            heyThere: {
                text: 'Cancel',
                close: function () {
                }

            }
        }
    });

    $('a.confirm_return').confirm({
        animation: 'scale',
        boxWidth: '40%',
        useBootstrap: false,
        title: 'Confirm !',
        type: 'green',
        content: 'Are you confirm to <b>Recieve</b> this book ?',
        buttons: {
            hey: {
                text: 'Receive',
                btnClass: 'btn-green',
                action: function () {
                    location.href = this.$target.attr('href');
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



