<style>
    .formContainer
    {
        background-color:#dadada;
        width: 100%;
        height: auto;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 10px;
    }

    h5
    {
        margin: 0;
        color: #b72a37;
    }

    .formInput
    {
        border: none;
        width: 87.5%;
        height: 35px;
    }

    .formContainer textarea
    {
        border: none;
        margin-bottom: 40px;
        width: 96.25%;
    }
    .formContainer #checkbox01, #checkbox02, #checkbox03
    {
        width: 20px;
        /* Double-sized Checkboxes */
        -ms-transform: scale(2); /* IE */
        -moz-transform: scale(2); /* FF */
        -webkit-transform: scale(2); /* Safari and Chrome */
        -o-transform: scale(2); /* Opera */
        transform: scale(2);
        padding: 10px;
        margin: 0 5px 0 0;
    }
    .addAttendees
    {
        background-color: white;
        padding: 5px 10px 5px 10px;
        width: 30%;
        text-align: center;
        border-radius: 20px;
        margin: 0 0 20px 0;
    }
    .addAttendees p
    {
        color: black;

    }
    .plusChar
    {
        color: black;
        font-weight: bold;
    }
    label
    {
        margin: 0 0 0 5px;
    }
    .btnDiv
    {
        text-align: end;
    }
    .buttonConfirm
    {
        height: 60px;
        width: 210px;
        color: white;
        background-color: #b72a37;
        line-height: normal;
        font-size: 22px;
        font-family: "roboto condensed";
        padding: 0 40px 0 40px;
        margin: 0 32px 0 0;
    }
    .buttonConfirm a
    {
        color: white;
    }
    .buttonConfirm:hover
    {
        background-color: #af3843;
        transition: all .4s ease;
        -webkit-transition: all .4s ease;
    }

    #inputForm
    {
        display: flex; /* 2. display flex to the rescue */
        flex-direction: row;
    }
    #inputForm input, textarea{
        display: block; /* 1. oh noes, my inputs are styled as block... */
    }
    #formular tr th
    {
        text-transform: none;
        font-family: "roboto condensed";
        font-size: 20px;
    }
    .bemerkung
    {
        margin: 10px 0 10px 0;
        font-family: "roboto condensed";
        font-size: 20px;
    }
    form
    {
        font-family: "roboto condensed";

    }

    a:hover
    {
        color: white;
    }

    input:checked ~ #checkbox01, #checkbox02, #checkbox03 {
        background-color: #b72a37;
    }




</style>
