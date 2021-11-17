<style>
    .newHeader
    {
        background-image: url("http://127.0.0.1/wordpress/wp-content/uploads/2021/09/header-background-ohneFarbe-1.png");
        max-width: 100%;
        height: 500px;
        align-content: center;
        margin-left: auto;
        margin-right: auto;
    }
    .headerBar
    {
        max-width: 100%;
        height: 700px;
        padding: 15px 50px 0 50px;
    }
    .borderLine
    {
        border-top: solid 1px #ffffff;
        padding-bottom: 75px;

    }
    #welcomeText
    {
        font-size: 30px;
        color: white;
        margin-top: 50px;
    }
    #supportQuestionInput
    {
        height: 200px;
        width: 95%;
        margin-top: 100px;
        margin-right: auto;
        margin-left: auto;
        align-items: center;
        /*-webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);
        box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);*/
        background-color: rgba(255, 255, 255, .6);

    }
    .supportQuestionHeader {

    }
    #supportQuestionSubject
    {

    }
    #btnSupportrequest
    {
        margin-top: 30px;
        background-color: #b72a37;
        font-size: 18px;
        font-weight: bold;
        color: white;
        width: 200px;
        height: 50px;
        border-radius: 5px;
        border: none;
    }
    #btnSaveData
    {
        background-color: #b72a37;
        font-size: 18px;
        font-weight: bold;
        color: white;
        width: 180px;
        height: 40px;
        border-radius: 5px;
        border: none;
    }

    *, *::after, *::before{
        box-sizing: border-box;
    }

    .modal
    {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        transition: 200ms ease-in-out;
        border: 1px solid black;
        border-radius: 10px;
        z-index: 10;
        background-color: white;
        width: 800px;
        max-width: 80%;
    }
    .modal.active{
        transform: translate(-50%, -50%) scale(1);
    }

    .modal-header
    {
        padding: 10px 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid black;
    }
    .modal-header-settings
    {
        padding: 10px 15px;
        border-bottom: 1px solid black;
    }

    .modal-header .title
    {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .modal-header .close-button
    {
        cursor: pointer;
        border: none;
        outline: none;
        background: none;
        font-size: 1.25rem;
        font-weight: bold;
    }

    .modal-body{
        padding: 10px 15px;
    }

    #overlay {
        position: fixed;
        opacity: 0;
        transition: 200ms ease-in-out;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0, .5);
        pointer-events: none;
    }
    #overlay.active
    {
        opacity: 1;
        pointer-events: all;
    }

    /*Collapsibles*/

    #collapsible
    {
        font-size: 1.25rem;
        font-weight: bold;
    }

    .collapsible:after {
        content: '\002B';
        color: white;
        font-weight: bold;
        float: right;
        margin-left: 5px;
    }

    .active:after {
        content: "\2212";
    }

    .content {
        padding: 0 18px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        background-color: #f1f1f1;
    }
    .container {
        height: 250px;
        margin: 10px 0 10px 0;
        position: relative;
        /*background-color: rgba(255, 255, 255, 0.5);*/
    }

    .center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
</style>