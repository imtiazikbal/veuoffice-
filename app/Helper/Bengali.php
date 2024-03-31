<?php
namespace App\Helper;
class Bengali
{

    // Numbers
    public static $bn_numbers = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০"];
    public static $en_numbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

    // Months
    public static $en_months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    public static $en_short_months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    public static $bn_months = ['জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'];

    // Days
    public static $en_days = ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
    public static $en_short_days = ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'];
    public static $bn_short_days = ['শনি', 'রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহঃ', 'শুক্র'];
    public static $bn_days = ['শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'];

    // Times
    public static $en_times = array('am', 'pm');
    public static $en_times_uppercase = array('AM', 'PM');
    public static $bn_times = array('পূর্বাহ্ন', 'অপরাহ্ন');

    // Method - English to Bengali Number
    public static function bn_number($number)
    {
    // Numbers
    date_default_timezone_set('Asia/Dhaka');

        return str_replace(self::$en_numbers, self::$bn_numbers, $number);
    }

    // Method - Bengali to English Number
    public static function en_number($number)
    {
        date_default_timezone_set('Asia/Dhaka');

        return str_replace(self::$bn_numbers, self::$en_numbers, $number);
    }

    // Method - English to Bengali Date
    public static function bn_date($date)
    {
        date_default_timezone_set('Asia/Dhaka');

        // Convert Numbers
        $date = str_replace(self::$en_numbers, self::$bn_numbers, $date);

        // Convert Months
        $date = str_replace(self::$en_months, self::$bn_months, $date);
        $date = str_replace(self::$en_short_months, self::$bn_months, $date);

        // Convert Days
        $date = str_replace(self::$en_days, self::$bn_days, $date);
        $date = str_replace(self::$en_short_days, self::$bn_short_days, $date);
        $date = str_replace(self::$en_days, self::$bn_days, $date);
        return $date;
    }

    // Method - English to Bengali Time
    public static function bn_time($time)
    {
        date_default_timezone_set('Asia/Dhaka');

        // Convert Numbers
        $time = str_replace(self::$en_numbers, self::$bn_numbers, $time);

        // Convert Time
        $time = str_replace(self::$en_times, self::$bn_times, $time);
        $time = str_replace(self::$en_times_uppercase, self::$bn_times, $time);
        return $time;
    }

    // Method - English to Bengali Date Time
    public static function bn_date_time($date_time)
    {
        date_default_timezone_set('Asia/Dhaka');

        // Convert Numbers
        $date_time = str_replace(self::$en_numbers, self::$bn_numbers, $date_time);

        // Convert Months
        $date_time = str_replace(self::$en_months, self::$bn_months, $date_time);
        $date_time = str_replace(self::$en_short_months, self::$bn_months, $date_time);

        // Convert Days
        $date_time = str_replace(self::$en_days, self::$bn_days, $date_time);
        $date_time = str_replace(self::$en_short_days, self::$bn_short_days, $date_time);
        $date_time = str_replace(self::$en_days, self::$bn_days, $date_time);

        // Convert Time
        $date_time = str_replace(self::$en_times, self::$bn_times, $date_time);
        $date_time = str_replace(self::$en_times_uppercase, self::$bn_times, $date_time);
        return $date_time;
    }
}



//Documentation

// You can translate any dates by using this helper.

// // English to Bengali Number
// echo Bengali::bn_number("1234"); // ১২৩৪

// // Bengali to English Number
// echo Bengali::en_number("১২৩৪"); // 1234

// // English to Bengali Date
// echo Bengali::bn_date("10 January 2025"); // ১০ জানুয়ারি ২০২৫

// // English to Bengali Time
// echo Bengali::bn_time("10:30 AM"); // ১০:৩০ পূর্বাহ্ন

// // English to Bengali Date-Time
// echo Bengali::bn_date_time("10 January 2025, 10:30 AM"); // ১০ জানুয়ারী ২০২৫, ১০:৩০ পূর্বাহ্ন