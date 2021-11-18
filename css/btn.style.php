<style>
    /*-------Buttons and Input Design-------*/

    .filterOptions
    {
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .dropdown {
        font-family: "roboto condensed";
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
        font-family: "roboto condensed";

    }
    .dropdown-content input
    {
        font-family: "roboto condensed";
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
        color: #b72a37
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
        color: #b72a37;
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

    /*-------Download Center-------*/

    .menuDownloadCenter
    {

    }
    .menuDownloadCenter th
    {
        text-align: center;
    }
    .menuDownloadCenter button
    {
        color: #b72a37;
        width: 70%;
        font-size: 14px;
        background-color: white;
        border: 2px solid #dadada;
        border-radius: 7px;
        text-align: center;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    }
</style>