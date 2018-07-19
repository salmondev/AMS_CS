<!DOCTYPE html>
<html>
    <head>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <style>
            .doit{background-color: #DD6B55}
        </style>
        <title>SWAL Confirm test</title>        
    </head>
    <body>
        <?php
        echo date("F j, Y, g:i:s a");
        $r           = new stdClass();
        $r->id       = "dave";
        $deleted_uri = base_url('tb_item/remove/'.$t['id']);
        ?>
        <button type="button" id="delete-btn" >Delete</button> 
        <script>
            document.getElementById("delete-btn").addEventListener("click", function (event)
            {
                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: {
                        cancel: {
                            visible: true,
                            text: "No, cancel plx!",
                            closeModal: false,
                        },
                        confirm: {
                            text: "Yes, delete it!",
                            className: "doit",
                            closeModal: false,
                        },
                    },
                })
                    //attach to the promise returned by swal()
                    .then((willDelete) => {
                        if (willDelete) {
                            swal("Deleted!", "Your imaginary file has been deleted.", "success")
                                    //another promise and another promise fulfilled response
                                    .then(() => {
                                        //redirect to delete page complete with arguments to the method
                                        window.location.href = '<?= $deleted_uri; ?>';
                                    });
                        } else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
            });
        </script>        
    </body>
</html> 