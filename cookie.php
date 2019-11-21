<?php
session_start();
setcookie('username', 'loginname', time() + 60 * 60 * 24);

