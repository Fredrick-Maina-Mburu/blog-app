<?php
require 'config/database.php';

// destroy all sessions
session_destroy();
header('location: ' . ROOT_URL);
die();