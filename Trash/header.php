<?php
/*
Plugin Name: Header
Description: Stellt den Header zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/

session_start();

//alter Header
add_shortcode("infoCenter_header", "header_function");

function header_function()
{
    include "css/header.style.php";

    echo "<div class='newHeader'>
            <div class='headerBar'>
                <div class='headerLogo' style='padding: 15px 0 0 0; width: 100%;'>
                    <img src='http://127.0.0.1/wordpress/wp-content/uploads/2021/09/logo-trans-verkleinert-1.png' >
                </div></div></div>
                <div class='borderLine'></div>";
}

add_shortcode("new_infoCenter_header", "infoCenter_header");

function infoCenter_header()
{
    include "css/header.style.php";

   echo "<div class='newHeader'>
            <div class='headerBar'>
                <div class='headerLogo' style='width: 100%;'>
                    <img src='http://127.0.0.1/wordpress/wp-content/uploads/2021/09/logo-trans-verkleinert-1.png' >";
                     echo "<div style='color: white; float: right'>Guten Tag ".$_SESSION["User_Firstname"]. " ".$_SESSION["userid"]. "</div>"; //Session Vor und Nachname funktioniert auf einmal nicht. Später nochmal nachsehen.
                echo "</div>
                "; /*include "includes/nav.inc.php";*/
                echo "
                <div class='borderLine'></div>
                <div class=\"container\">
                    <div class='containerText'>
                        <h4 style='font-size: 30px; color: white; margin: 0'>Lorem ipsum dolor sit amet</h4>
                        <p style='font-size: 18px; color: white'>Lorem ipsum dolor sit amet<br>consetetur sadipscing elitr</p>
                    </div>
                    <form action='http://127.0.0.1/wordpress/support-anfragen/' method=''>
                        <button id='btnSupportrequest'>Supportanfrage</button>
                    </form>
                </div>
                <!--<div class=\"container\"> data-modal-target='#modal'
                          <div class=\"center\">
                            <button id='btnSupportrequest' data-modal-target='#modal'>Supportanfrage</button>
                          </div>
                        </div>-->
              
                        <div class='modal' id='modal'>
                            <div class='modal-header'>
                                <div class='title'>Supportanfrage</div>
                                <button data-close-button class='close-button'>&times;</button>           
                            </div>
                            <div class='modal-header-settings'>
                                <label for=\"cars\">Sachgebiet:</label>
                                    <select name=\"cars\" id=\"cars\">
                                        <option value=\"volvo\">IVU.ProfiScan</option>
                                        <option value=\"saab\">IVU.ProfiScan</option>
                                        <option value=\"opel\">IVU.ProfiScan</option>
                                        <option value=\"audi\">IVU.ProfiScan</option>
                                    </select><br>
                                    <br>
                                     <input type=\"checkbox\" id=\"subscribeNews\" name=\"subscribe\" value=\"newsletter\">
                                     <label for=\"subscribeNews\">Fehlermeldung</label>
                                     <input type=\"checkbox\" id=\"subscribeNews\" name=\"subscribe\" value=\"newsletter\">
                                     <label for=\"subscribeNews\">Infoanfrage</label>
                                     <input type=\"checkbox\" id=\"subscribeNews\" name=\"subscribe\" value=\"newsletter\">
                                     <label for=\"subscribeNews\">Änderungswunsch</label><br>
                                     <br>
                                     <label for=\"cars\">Priorität:</label>
                                    <select name=\"cars\" id=\"cars\">
                                        <option value=\"volvo\">Priorität 1</option>
                                        <option value=\"saab\">Priorität 2</option>
                                        <option value=\"opel\">Priorität 3</option>
                                        <option value=\"audi\">Priorität 4</option>
                                    </select><br>
                                    <br>       
                                    <label for=\"subscribeNews\">Betreff:</label>
                                     <input type=\"text\" id=\"subscribeNews\" name=\"subscribe\" value=\"Betreff...\">
                                     <br>
                                     <br>
                                     <label for=\"subscribeNews\">Beschreibung:</label><br>
                                     <textarea style='width: 100%;'rows=\"7\" name=\"nachricht\" required></textarea> <br>
                                     <br>
                                     <label for=\"subscribeNews\">Dateianhang:</label>
                                     <input id=\"fileFile\" type=\"File\" name=\"file\">
                                     <br>            
                            </div> 
                        
                             
                           
                        <div class='modal-body'>
                         
                               <button id='btnSaveData' data-modal-target='#modal'>Daten speichern</button>
                      
                        </div>                  
                    </div>
                    <div id='overlay'></div>
            
            </div>
          </div>
          <script>
          const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const overlay = document.getElementById('overlay')

openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = document.querySelector(button.dataset.modalTarget)
    openModal(modal)
  })
})

overlay.addEventListener('click', () => {
  const modals = document.querySelectorAll('.modal.active')
  modals.forEach(modal => {
    closeModal(modal)
  })
})

closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.modal')
    closeModal(modal)
  })
})

function openModal(modal) {
  if (modal == null) return
  modal.classList.add('active')
  overlay.classList.add('active')
}

function closeModal(modal) {
  if (modal == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
}
</script>";



}
