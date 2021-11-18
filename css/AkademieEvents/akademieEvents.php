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