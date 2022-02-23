<style>
    /*----------Buchung(Schritt 1) Design----------*/
    .detailsContainer
    {
        width: 100%;
        display: flex;
        flex-direction: column;
        margin: 1%;
        font-family: var(--fontfamily-global);

    }
    .tileContainer
    {
        display: flex;
        justify-content: start;
        padding: 0 0 0 1.2%;
    }
    .infoTitle
    {
        font-size: 20px;
        color: var(--color-ivu-red);
    }
    .detailsContent
    {
        display: flex;
        width: 100%;
        flex-direction: column;
        padding: 0 10% 0 1.5%;
    }
    .descriptionContent
    {
        width: 100%;
    }
    .contentContent
    {
        width: 100%;
    }
    .targetGrpContent
    {
        width: 100%;
    }
    .preconditionContent
    {
        width: 100%;
    }
    .priceContent
    {
        width: 100%;
        margin: 0 0 5% 0;
    }
    .btnContent
    {
        display: flex;
        justify-content: end;
        padding: 0 5% 0 0;
    }
    .btnReg
    {

    }
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

    .boxContainer
    {
        display: flex;
        justify-content: start;
        width: 100%;
        padding: 0 0 0 1%;
    }

    /*----------Buchung(Schritt 3) Design----------*/
    .tileContent
    {
        display: flex;
        justify-content: center;
    }
    .textContent
    {
        display: flex;
        justify-content: center;
        margin: 1.5% 0 0 0;
    }
    .semBookingTextConfirmed
    {
        font-size: 17px;
        font-family: var(--fontfamily-global);
        width: 60%;
    }
    .checkmarkContent
    {
        display: flex;
        justify-content: center;
        margin: 2% 0 2% 0;
    }
    .checkmark
    {

    }
    .lowerHeadlineContent
    {
        display: flex;
        justify-content: center;
        margin: 5% 0 2% 0;
    }
    .lowerHeadline
    {
        font-family: var(--fontfamily-global);
        font-size: 32px;
        color: var(--color-ivu-red);
        text-decoration: underline;
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

    /**Informationen und Downloads**/
    .iadContent
    {
        width: 100%;
        font-family: var(--fontfamily-global);
        margin: 0 2.4% 0 2.4%;
    }
    .iadContent h2
    {
        padding: 0;
        margin: 1% 0 0 0;
        display: flex;
        font-size: 35px;

    }
    .textContent
    {
        display:flex;
        flex-direction: column;
        margin: 1% 0 0 0;
    }
    .text
    {
        margin: 1% 0 0 2%;
        font-size: 18px;
    }
    .txtHeadline
    {
        font-weight: bold;
        font-size: 20px;
        color: var(--color-ivu-red);
    }

    .brochureContent
    {
        display: flex;
        flex-direction: column;
    }

    .brochure
    {
        display: flex;
        justify-content: start;
        padding: 2% 0 3% 0;
    }
    .brochure img
    {
        height: 300px;
        width: 210px;
        margin: 0 2% 0 2%;
    }
    .brochureText p
    {
        font-size: 20px;
        text-align: start;
    }
    .brochureText h5
    {
        margin: 0 0 2% 0;
        font-size: 22px;
        text-decoration: underline;
    }
    .downloadBrochure
    {
        height: 35px;
        width: 210px;
        color: white;
        background-color: var(--color-ivu-red);
        line-height: normal;
        font-size: 18px;
        font-family: var(--fontfamily-global);
        padding: 0;
        float: left;
    }
    .downloadBrochure
    {
        color: white;
    }
    .downloadBrochure:hover {
        background-color: #af3843;
        transition: all .4s ease;
        -webkit-transition: all .4s ease;
    }


</style>