<?php

class BuchungText
{
    function bookingConfirmed()
    {
        $text = "<div class='textContent'><span class='semBookingTextConfirmed'>Vielen Dank für Ihre Buchung. Wir haben eine automatisierte Bestätigung an Ihre hinterlegte Mailadresse gesendet.<br><br> 
                Bei weniger als 5 Teilnehmern behält sich die IVU das Recht vor, eine Schulung bis spätestens 5 Arbeitstage vor Schulungsbeginn abzusagen. Stornierungen seitens des Kunden 5 Arbeitstage vor Schulungsbeginn sind kostenfrei.<br><br> 
                Bei Rückfragen kontaktieren Sie uns bitte unter seminar@ivugmbh.de.</span></div>";

        return $text;
    }
}