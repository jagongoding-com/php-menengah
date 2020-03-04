<?php

require_once 'penanganan-error.php';

ob_start();
require 'file-yang-error.php';
ob_end_flush();
