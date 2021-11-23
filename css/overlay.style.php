<style>
    #overlay, #overlayNote, #overlayInterimReport, #overlayFile, #overlayAddInfos,#overlayCompleteSupportRequest
    {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0,0.5);
        z-index: 2;
        cursor: pointer;
    }
    .overlayBtn
    {
        height: auto;
        width: auto;
        color: white;
        background-color: #b72a37;
        line-height: normal;
        font-size: 16px;
        font-family: "roboto condensed";
        padding: 10px;
        float: right;
    }
    .overlayBtn a
    {
        color: white;
    }
    .overlayBtn:hover
    {
        background-color: #af3843;
        transition: all .4s ease;
        -webkit-transition: all .4s ease;
    }
    #text{
        position: absolute;
        background-color: white;
        padding: 20px;
        width: 50%;
        height: auto;
        top: 50%;
        left: 50%;
        border: 1px solid grey;
        border-radius: 10px;
        transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
    }
    #text p
    {
        color: #b72a37;
    }
    textarea
    {
        width: 100%;
        height: 200px;
        margin-bottom: 20px;
    }
    select
    {
        width: 96.25%;
        padding: 0 0 0 10px;
        font-size: 16px;
        border: 1px solid #9d9d9c;
    }
    option
    {
        width: 96.25%;
        border: 1px solid #9d9d9c;
    }
    .inputField
    {
        width: 96.25%;
        height: 35px;
        border: 1px solid #9d9d9c;

    }
    .supportDescription
    {
        height: 200px;
    }
    .tableTicketOverlay tr
    {
        border: none;
    }
    }
</style>
