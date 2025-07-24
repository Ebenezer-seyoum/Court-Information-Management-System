<?php
namespace Andegna;

use Andegna\Operations\Initiator;

class DateTime {
    use Initiator;

    private $gregorianDate;
    private $ethiopianDate;

    public function __construct(\DateTime $dateTime) {
        $this->gregorianDate = $dateTime;
        $this->ethiopianDate = $this->convertToEthiopian(
            (int)$dateTime->format('Y'),
            (int)$dateTime->format('m'),
            (int)$dateTime->format('d')
        );
    }

    private function isGregorianLeapYear($year) {
        return ($year % 400 == 0) || (($year % 4 == 0) && ($year % 100 != 0));
    }

    private function convertToEthiopian($gy, $gm, $gd) {
        $jd = gregoriantojd($gm, $gd, $gy);
        
        // Ethiopian new year falls on September 11 or 12 in Gregorian calendar
        $newYearMonth = 9;
        $newYearDay = $this->isGregorianLeapYear($gy + 1) ? 12 : 11;
        
        // Check if current date is before Ethiopian new year
        $ethiopianNewYear = gregoriantojd($newYearMonth, $newYearDay, $gy);
        
        if ($jd >= $ethiopianNewYear) {
            // Current date is on or after Ethiopian new year
            $year = $gy - 7;
            $dayOfYear = $jd - $ethiopianNewYear;
        } else {
            // Current date is before Ethiopian new year
            $year = $gy - 8;
            $prevNewYearDay = $this->isGregorianLeapYear($gy) ? 12 : 11;
            $prevEthiopianNewYear = gregoriantojd($newYearMonth, $prevNewYearDay, $gy - 1);
            $dayOfYear = $jd - $prevEthiopianNewYear;
        }
        
        // Calculate month and day
        if ($dayOfYear < 360) {
            $month = floor($dayOfYear / 30) + 1;
            $day = ($dayOfYear % 30) + 1;
        } else {
            $month = 13;
            $day = $dayOfYear - 359;
        }
        
        return [$year, $month, $day];
    }

    public function format($format = null) {
        list($year, $month, $day) = $this->ethiopianDate;
        
        // Get time components from the original DateTime object
        $hour = $this->gregorianDate->format('H');
        $minute = $this->gregorianDate->format('i');
        $second = $this->gregorianDate->format('s');
        
        if ($format === null) {
            // Default format: Y-m-d H:i:s
            return sprintf('%04d-%02d-%02d %02d:%02d:%02d', 
                $year, $month, $day, 
                $hour, $minute, $second);
        }
        
        // Custom formatting
        $replacements = [
            'Y' => sprintf('%04d', $year),
            'm' => sprintf('%02d', $month),
            'd' => sprintf('%02d', $day),
            'H' => $hour,
            'i' => $minute,
            's' => $second,
            // Add more format characters as needed
        ];
        
        $result = '';
        $length = strlen($format);
        for ($i = 0; $i < $length; $i++) {
            $char = $format[$i];
            $result .= $replacements[$char] ?? $char;
        }
        
        return $result;
    }
    
    // Helper method to get just the date part
    public function formatDate() {
        list($year, $month, $day) = $this->ethiopianDate;
        return sprintf('%04d-%02d-%02d', $year, $month, $day);
    }
    
    // Helper method to get just the time part
    public function formatTime() {
        return $this->gregorianDate->format('H:i:s');
    }
}