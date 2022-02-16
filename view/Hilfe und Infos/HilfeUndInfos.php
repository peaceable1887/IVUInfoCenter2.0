<?php
/*besserer Pfeil &#129094; (noch einfügen)*/

class HilfeUndInfos
{
    function showContent()
    {
        $infoContent = "<div class=\"infoContent\">

                          <h2>Persönlicher Kontakt</h2>
                          <div class=\"infoText\">
                                    Montag bis Freitag von 9-17 Uhr 
                          </div>
                          <div class=\"infoText\">
                           <span class='hotline'> 040/30 98 30 - Durchwahl</span>
                          </div>
        
                          <div class=\"infoText\">
                                    Die telefonische Hotline ist unter folgenden Rufnummern erreichbar:
                          </div>
                          <div class=\"infoHotline\">
                            <div class=\"callNumberHeadline\">
                                    Rechenzentrum
                              </div>
                              <div class=\"infoCallnumber\">
                             
                              <ul>RZ - 00</ul>
                            
                              </div>
                          </div>
                          <div class=\"infoHotline\">
                            <div class=\"callNumberHeadline\">
                                    Kaufmännische Module
                              </div>
                              <div class=\"infoCallnumber\">                       
                                <ul>CSA - 25</ul>
                                <ul>CSF - 22</ul>
                                <ul>CSE - 27</ul>
                                <ul>CSL - 27</ul>
                                <ul>CSP - 27</ul>
                                <ul>CSV - 27</ul>                       
                              </div>
                          </div>
                          <div class=\"infoHotline\">
                            <div class=\"callNumberHeadline\">
                        Verbrauchsabrechnung / Energiedatenmanagement
                              </div>
                              <div class=\"infoCallnumber\">
                            
                        <ul>ENER:GY - 26</ul>
                        <ul>BelVis - 29</ul>
                              </div>
                          </div>
                          <div class=\"infoHotline\">
                            <div class=\"callNumberHeadline\">
                        Technische Unterstützung
                              </div>
                              <div class=\"infoCallnumber\">
                          
                        <ul>ORACLE - 41</ul>
                        <ul>UNIX - 42</ul>
                        <ul>Windows - 43</ul>
                              </div>
                          </div>
                         <h3>Handbuch zum Einstellen von Supportanfragen</h3>
                         <div class='handbookInfo'>
                           
                            <div class='handbookContent'>
                                <img src='http://127.0.0.1/wordpress/wp-content/uploads/2021/08/terminblatt.png'>
                                <div class='handbookText'>
                                 <p>Nutzen Sie unser Handbuch und erledigen Sie Ihr Anliegen
                                 unabhängig von unseren Servicezeiten bequem selbst.<br>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                                 sed diam nonumy eirmod tempor<br> invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
                                 <button class='downloadHandbook'>JETZT DOWNLOADEN</button>
                                </div>
                            </div>
                        </div>
                     </div>";

        return $infoContent;
    }

}