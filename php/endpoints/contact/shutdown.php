<?php
    function shutdown() {
        print(json_encode($errors));
    }

    register_shutdown_function('shutdown');
?>