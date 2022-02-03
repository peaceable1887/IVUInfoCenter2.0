<style>
   .mainDivInfos
   {
       max-width: 100%;
       height: 450px;
       background-color: var(--color-brightgrey);
       text-align: -webkit-center;
       margin: 20px 0 50px 0;
       padding-top: 15px;
   }

   .sliderInfoHeadline
   {
       color: var(--color-ivu-red);
       font-family: var(--fontfamily-global);
       font-size: 26px;
       text-decoration: underline;
   }

    /* Slideshow container */
    *
    {
        box-sizing:border-box;
    }
    .slideshow-containerInfos
    {
        max-width: 70%;
        height: 370px;
        background-color: var(--color-brightgrey);
        position: relative;
        display: flex;
        justify-content: center;
    }

    .mySlidesInfos
    {
        display: none;
    }
    .arrowsInfos
    {
        width: 48px;
        height: 48px;
        border-color: #000;
        position: absolute;
        top: 40%;
        color: white;
    }
    .prevInfos
    {
        border-bottom: 6px solid;
        border-left: 6px solid;
        transform: rotate(45deg);
        left: 40px;
    }
    .nextInfos
    {
        border-bottom: 6px solid;
        border-left: 6px solid;
        transform: rotate(-135deg);
        right: 40px;
    }
    .textInfos
    {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }
    .fadeInfos
    {
        margin: 0 0 0 0;
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }
    @-webkit-keyframes fadeInfos
    {
        from {opacity: .4}
        to {opacity: 1}
    }

    @keyframes fadeInfos
    {
        from {opacity: .4}
        to {opacity: 1}
    }
</style>
