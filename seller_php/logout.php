<?php
session_start();
unset($_SESSION['restaurant_id']);
header("location:../");