<style>
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
        background-color: var(--color-default-white);
        color: var(--color-font);
        border-radius: 0;
        font-family: var(--fontfamily-global);
    }

</style>