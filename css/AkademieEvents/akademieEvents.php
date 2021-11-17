<style>

    /*-------Table Design-------*/
    table th, table td
    {
        padding: 10px 0 10px 0;
        text-align: left;
        vertical-align: top;
        border-bottom: 0.5px solid #9d9d9c;
    }
    tr:hover
    {
        color: #b72a37;
    }
    a:link, a:visited
    {
        text-decoration: none;
    }
    .btnMore
    {
        background-color: #b72a37;
        color: white;
        padding: 5px 10px 5px 10px;
        border-radius: 10px;
    }

    /*-------Buttons and Input Design-------*/

    .selectFields
    {
        width: 50%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: start;
        align-items: center;
        float: left;
        margin: 20px 0 20px 0;

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
        font-family: "roboto condensed";
    }

    .pagination a.active
    {
        color: #b72a37;
        font-weight: bold;
        border-radius: 5px;
    }

    .pagination a:hover:not(.active)
    {
        color: #b72a37;
        border-radius: 5px;
    }

    /*-------Form/Booking Design-------*/


</style>