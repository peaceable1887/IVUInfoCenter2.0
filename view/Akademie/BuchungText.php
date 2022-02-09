<?php

class BuchungText
{
    function bookingConfirmed($semTile)
    {
        $text = "<div class='tileContent'>
                    <div class='tile'>
                    ".$semTile."
                    </div>
                </div>
                 <div class='textContent'>
                    <div class='semBookingTextConfirmed'>Vielen Dank für Ihre Buchung. 
                        Wir haben eine automatisierte Bestätigung an Ihre hinterlegte Mailadresse gesendet.<br><br>
                        Bei weniger als 5 Teilnehmern behält sich die IVU das Recht vor, 
                        eine Schulung bis spätestens 5 Arbeitstage vor Schulungsbeginn abzusagen. 
                        Stornierungen seitens des Kunden 5 Arbeitstage vor Schulungsbeginn sind kostenfrei.<br><br>
                        Bei Rückfragen kontaktieren Sie uns bitte unter seminar@ivugmbh.de.
                    </div>
                 </div>
                 <div class='checkmarkContent'>
                     <div class='checkmark'>
                         <img src=\"http://127.0.0.1/wordpress/wp-content/uploads/2021/08/iconmonstr-check-mark-1-240.png\" alt=\"checkmark\" width=\"90\" height=\"100\">
                     </div >
                </div>
                <div class='lowerHeadlineContent'>
                     <div class='lowerHeadline'>
                          Diese Veranstaltungen könnten auch interessant sein      
                     </div >
                </div >";

        return $text;
    }
}