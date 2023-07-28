<?php
    setcookie('test2', 'My value2', time()+3600*24, '/');

    echo $_COOKIE['test']; // 'My value'
