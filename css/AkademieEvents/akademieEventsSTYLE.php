<style>
    /*----------Buchung(Schritt 1) Design----------*/

    /*Beschreibung*/
    .semBookingDescription
    {
        font-family: var(--fontfamily-global);
        font-size: 17px;
    }

    /*Inhalt*/
    .semBookingContent
    {
        font-family: var(--fontfamily-global);
        font-size: 17px;
    }
    .semBookingContentImg
    {
        margin: 0 5px 3px 10px;
        content:url("http://127.0.0.1/wordpress/wp-content/uploads/2021/08/list-icon.png");
    }

    /*Zielgruppe*/
    .semBookingTargetGrp
    {
        font-family: var(--fontfamily-global);
        font-size: 17px;
    }

    /*Voraussetzungen*/
    .semBookingPreCond
    {
        font-family: var(--fontfamily-global);
        font-size: 17px;
    }

    /*----------Buchung(Schritt 2) Design----------*/


    /*----------Buchung(Schritt 3) Design----------*/
    .textContent
    {
        width: 100%;
        height: 30vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .semBookingTextConfirmed
    {
        font-size: 17px;
        font-family: var(--fontfamily-global);
    }

    /*-------PageNumber Design-------*/

    .paginationContainer
    {
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;

    }
    .pagination
    {
        display: inline-block;
    }
    .pagination a
    {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        font-size: 16px;
        font-family: var(--fontfamily-global);
    }
    .pagination a.active
    {
        color:var(--color-ivu-red);
        font-weight: bold;
        border-radius: 5px;
    }
    .pagination a:hover:not(.active)
    {
        color: var(--color-ivu-red);
        border-radius: 5px;
    }

</style>