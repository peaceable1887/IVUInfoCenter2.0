<style>
    #header
    {
        background-image: url("http://127.0.0.1/wordpress/wp-content/uploads/2021/08/header-background.png");
        max-width: 100%;
        height: 500px;
        margin: 0 auto;
        background-size: cover;
        background-position: center;

    }
    #header-logo
    {
        float: right;
        margin-bottom: 110px;
    }
    #header-headline
    {
        float: left;
        clear: left;
        margin: auto;
        width: 100%;
        padding-left: 150px;
    }

    #header-headline h1
    {
        font-family: var(--fontfamily-global);
        color: white;
        text-align: left;
        font-size: 50px;
        margin: 0;
    }
    #header-headline p
    {
        margin: 5px 0 0 0;
        font-size: 25px;
        font-family: var(--fontfamily-global);
        color: white;
        text-align: left;
    }
    .welcomeUser
    {
       font-family: var(--fontfamily-global);
    }

    /*Seminar Kachel*/
    #seminarBlock
    {
        line-height: 230%;
        padding: 5px 0 0 18px;
        margin: 15px 15px 15px 15px;
        font-family: var(--fontfamily-global);
        font-size: 20px;
        height: 200px;
        width: 400px;
        border: solid 2.5px #dadada;
        border-radius: 10px;
        text-align: center;
        background: rgb(218,218,218);
        background: linear-gradient(180deg, rgba(218,218,218,1) 0%, rgba(255,255,255,1) 100%, rgba(255,255,255,1) 100%);

    }
    .seminarBlockTextVar
    {
        font-weight: normal;
        color: #575756;
        display:inline;
        margin:0;
    }
    .seminarBlockText
    {
        margin: 0;
        color: var(--color-ivu-red);
        display:inline;
    }
    .semTileBottomContent
    {
        float: left;
    }
    .semTileSemType
    {
        float: left;
        line-height: 0.01;
    }

    /*kann eventuell weg*/
    table th, table td {
        padding: 10px 0 10px 0;
        text-align: left;
        vertical-align: top;}

    /*Aktuelle Infos Kachel*/

    .infoTile
    {
        height: 300px;
        width: 250px;
        background-color: var(--color-default-white);
        padding: 7px;
        float: left;
        margin: 15px 15px 15px 15px;
        font-family: var(--fontfamily-global);
    }
    .infoImg
    {
        background-image: url("http://127.0.0.1/wordpress/wp-content/uploads/2021/11/dinner_MP.jpg");
        background-size: 290px;
        height: 45%;
        width: 100%;
    }
    .infoText
    {
        background-color: var(--color-default-white);
        height: 40%;
        width: 100%;
    }
    .infoHeadline
    {
        float: left;
        padding: 10px;
        color: var(--color-ivu-red);
    }
    .subText
    {
        float: left;
        color: var(--color-font);
    }
    .btnContainerInfo
    {
        text-align: center;
    }
    .infoReadMore
    {
        padding: 0;
        margin-top: 5px;
        width: 150px;
        height: 30px;
        background-color: var(--color-ivu-red);
        font-weight: normal;
    }
    .infoReadMore:hover
    {
        background-color: #af3843;
        transition: all .4s ease;
        -webkit-transition: all .4s ease;
    }
</style>