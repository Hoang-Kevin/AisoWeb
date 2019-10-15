<?php
        $shm_id = shmop_open(0xff3, "c", 0644, 100);
        $shm_size = shmop_size($shm_id);
        $shm_bytes_written = shmop_write($shm_id, "aurevoir", 0);
?>