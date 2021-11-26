<style>
    /*-------Buttons Main Menu-------*/
    .btnMenuContainer
    {
        width: 100%;
        height: auto;
        text-align: center;
        margin-bottom: 100px;
    }
    .btnMenuSubContainer
    {
        display: flex;
        justify-content: center;
    }
    .btnMenuSubContainer button
    {
        background-color: white;
        border: 1px solid #9d9d9c;
        margin: 15px 30px 0 30px;
        height: 200px;
        width: 350px;
        padding: 0;
        display: flex;
        flex-direction: column;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    }
    .btnMenuSubContainer img
    {
        width: 100%;
        height: 120px;
        object-fit: none;
    }
    .btnText
    {
        color: #706f6f;
        width: 100%;
        font-size: 22px;
        line-height: 30px;
    }
    /*-------Buttons Filter Design-------*/

    .filterOptions
    {
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .dropdown {
        font-family: var(--fontfamily-global);
        position: relative;
        display: inline-block;
    }
    .dropbtn
    {
        background-color: #dadada;
        color: #9d9d9c;
        padding: 1px 0 1px 10px;
        font-size: 14px;
        margin: 0 0 0 10px;
        border-radius: 7px;
        border: none;
        height: 30px;
        width: 280px;
        text-align: start;
    }

    .dropdown-content {
        margin: 0 0 0 10px;
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    label
    {
        font-family: var(--fontfamily-global);

    }
    .dropdown-content input
    {
        font-family: var(--fontfamily-global);
        background-color: white;
        color: #575756;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        margin: 0 20px 0 20px;
    }

    .dropdown-content input:hover
    {
        background-color: #fff;
        color: var(--color-ivu-red);
    }

    .dropdown:hover .dropdown-content
    {
        display: block;
    }

    .dropdown:hover .dropbtn
    {
        border: 1px solid #9d9d9c;
    }

    #linkDescription:hover
    {
        color: var(--color-ivu-red);
    }
    .searchField
    {
        float: right;
        background-color: #dadada;
        padding: 1px 10px 1px 5px;
        font-size: 16px;
        border-radius: 7px;
        border: none;
    }
    .searchField input
    {
        height: 27px;
        margin: 0 10px 0 10px;
        border: none;
        border-radius: 7px;
    }

    /*----------Default Buttons----------*/
    /*Neue Supportanfrage*/
    .buttonHeader
    {
        font-size: 22px;
        font-family: var(--fontfamily-global);
        background-color: var(--color-ivu-red);
        margin-top: 50px;
        width: 350px;
    }
    .buttonHeaderHide
    {
        margin-top: 100px;
        width: 350px;
        background: transparent;
        border: none !important;
        font-size:0;
    }
    /*Gesamte Kursübersicht*/
    .buttonSlider
    {
        width: 350px;
        margin: 0;
        position: absolute;
        top: 90%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        background: rgba(183,42,55,0);
        border: solid 2px white;
        border-radius: 7px;'
    }
    .buttonSlider a
    {
        color: white;
    }
    .buttonSlider:hover
    {
        background-color: rgba(0, 0, 0, 0);
    }
    .btnDiv
    {
        text-align: end;
    }
    .buttonConfirm, .buttonConfirmReg
    {
        height: 60px;
        width: 210px;
        color: white;
        background-color: var(--color-ivu-red);
        line-height: normal;
        font-size: 22px;
        font-family: var(--fontfamily-global);
        padding: 0 40px 0 40px;
        margin: 0 32px 0 0;
    }
    .buttonConfirmReg
    {
        float: right;
    }
    .buttonConfirm a, .buttonConfirmReg a
    {
        color: white;
    }
    .buttonHeader:hover,.buttonConfirm:hover, .buttonConfirmReg:hover
    {
        background-color: #af3843;
        transition: all .4s ease;
        -webkit-transition: all .4s ease;
    }
    #linkDescription:hover
    {
        color: white;
    }

</style>