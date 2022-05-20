<?php

if (!function_exists('hoursRange')) {

    /**
     * get a list of hours btw two range
     *
     * @param int  $lower  start hours in secondes
     * @param int  $upper  end hours in secondes
     * @param int  $step   hop btw hours in seconde
     * @param null $format output hours format
     *
     * @return array with hours range interval
     * Exemple of use: // Every 30 Minutes from 8 AM - 5 PM, using Custom Time Format:  hoursRange( 28800, 61200, 60 * 30, 'h:i a' );
     */
    function hoursRange($lower = 0, $upper = 86400, $step = 1800, $format = 'H:i') {
        $times = [];

        if (empty($format)) {
            $format = 'H:i';
        }

        foreach (range($lower, $upper, $step) as $increment) {
            $increment = gmdate('H:i', $increment);
            list($hour, $minutes) = explode(':', $increment);

            $date = new \DateTime($hour . ':' . $minutes);

            $times[(string)$increment] = $date->format($format);
        }

        return $times;
    }
}
