<style>
    /**Header Top:**/
    .profilData
    {
        display: flex;
        flex-direction: column;
        color: var(--color-default-white);
        font-family: var(--fontfamily-global);;
    }
    .userWelcome
    {
        font-size: 24px;
        font-weight: bold;
    }
    .editAndLogout
    {
        display: flex;
        justify-content: center;
    }
    .edit a
    {
        color: var(--color-default-white);
        text-decoration: underline;
    }
    .logout button
    {
        padding: 0;
        text-decoration: underline;
        background-color: transparent;
    }

    /**Seitenverzeichnis: Desgin**/
    .sdContainer
    {
        padding: 0 0 0 2.4%;
        font-family: var(--fontfamily-global);
        margin: 1% 0 0.5% 0;
    }
    .sdContainer .sdLink
    {
        color: var(--color-font);
    }
    .sdContainer .sdLink:hover
    {
        text-decoration: underline;
    }
    /**Subheader**/
    .headerPictureBg
    {
        background-image: url("http://127.0.0.1/wordpress/wp-content/uploads/2022/02/AdobeStock_323758288-scaled.jpg");
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        color: var(--color-default-white);
        font-family: var(--fontfamily-global);
        background-color: #46afdf;
        width: 100%;
        height: 400px;
        padding: 0 10% 0 5%;
        margin: 0 0 20px 0;
        box-shadow: rgb(0 0 0 / 16%) 0px 3px 6px, rgb(0 0 0 / 23%) 0px 3px 6px;
    }
    .headerHeadline
    {
        display: flex;
        flex-direction: column;
        font-size: 40px;
    }
    .headerHeadline h1
    {
        color: var(--color-default-white);
        font-family: var(--fontfamily-global);
    }
    .headerSubheadline
    {

    }
    .btnHeaderContainer
    {
        width: 100%;
        display: flex;
        justify-content: start;
    }
    .buttonHeader
    {
        font-size: 22px;
        font-family: var(--fontfamily-global);
        background-color: var(--color-ivu-red);
        width: 350px;
        height: 70px;
    }
    .buttonHeader a
    {
        color: white;
    }
    .buttonHeader:hover
    {
        background-color: #af3843;
        transition: all .4s ease;
        -webkit-transition: all .4s ease;
    }

    /**Subheadline: Design**/
    .subHeadline
    {
        font-family: var(--fontfamily-global);
        color: var(--color-ivu-red);
        margin: 0 0 0 2.4%;
        font-size: 24px;
    }

    /**Filterstil**/
    .filterContainer
    {
        width: 95%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: flex-start;
        height: 50px;
        margin: 1% 2.4% 20px 2.4%;
        font-family: var(--fontfamily-global);
        border-top: 1px solid var(--color-ivu-red);
        border-bottom: 1px solid var(--color-ivu-red);
    }
    .filterText
    {
        font-weight: bold;
        width: 5%;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 48px;
        color: var(--color-ivu-red);
        background-color: var(--color-default-white);
    }
    .dropDown
    {
        width: 15%;
        position: relative;
        display: inline-block;
        align-items: center;
        justify-content: center;
        height: 50px;
    }
    .dropDownBtn
    {
        width: 100%;
        padding: 0;
        height: 48px;
        font-weight: normal;
        background-color: var(--color-default-white);
        color: var(--color-font);
        border-radius: 0;
        font-family: var(--fontfamily-global);
    }
    .dropDownContent
    {
        margin: 0 auto 0 auto;
        display: none;
        position: absolute;
        width: 100%;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        z-index: 1;
    }
    .dropDown:hover .dropDownBtn
    {
        color: black;
        background-color: white;
        font-weight: normal;
        font-family: var(--fontfamily-global);
    }
    .dropDown:hover .dropDownContent
    {
        display: block;
    }
    .dropDownContent .dropDownBtn:hover
    {
        color: #af3843;
    }
    .arrowDown
    {
        margin-left: 10px;
        font-size: 17px ;
    }
    .searchField
    {
        width: 15%;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 48px;
        font-size: 16px;
        border: none;
        background-color: var(--color-default-white);
        color: var(--color-font);
        border-radius: 0;
        font-family: var(--fontfamily-global);
    }

</style>