<?php
    // Settings
    error_reporting(1);                                                    // Error Logging OFF in Production Environments
    ini_set('display_errors', '1');

    // Sets the default timezone used by all date/time functions.
    // List of Supported Timezones: http://php.net/manual/en/timezones.php
    date_default_timezone_set('Europe/Berlin');

    // Globals
    $installDate = 'May 2019';                    // Date Installed
    $siteName = 'Allmende ToDo';                // Site Name
    $siteUrl = 'http://tasks.local';    // Site URL, where you have uploaded Simple Tasks to. Include the trailing slash
    $siteEmail = 'max@broomie.de';            // Site Email. Used in all email notifications
    $language = 'custom';                    // Site Language (options: english or custom). Language files are located in the "language" folder
    $signupstatus = false;                            // Signup Status (options: true or false). Set it to false to disable signup.

    define('PEPPER', 'F8*F!fb$AGSN9P2f%ryAnh');            // !IMPORTANT! Do NOT change this value once you have started using Tasks.;
