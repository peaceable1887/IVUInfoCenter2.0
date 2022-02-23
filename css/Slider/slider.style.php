<style>
    /* Slideshow container */
    *
    {
        box-sizing:border-box;
    }
    .sliderContainer
    {
        display: flex;
        justify-content: center;
        flex-direction: column;
        width: 100%;
        padding: 10px 0 0 0;
        background-image: url("http://127.0.0.1/wordpress/wp-content/uploads/2021/07/Header_Welle_1900x600.png");
        box-shadow: rgb(0 0 0 / 16%) 0px 3px 6px, rgb(0 0 0 / 23%) 0px 3px 6px;
    }
    .slideshow-container
    {
        max-width: 100%;
        height: 330px;
        position: relative;
        margin: 0 0 10px 0;
        display: flex;
        justify-content: center;
    }
    .sliderSemHeadline
    {
        color: var(--color-default-white);
        font-family: var(--fontfamily-global);
        font-size: 28px;
        display: flex;
        justify-content: center;
    }
    .mySlides
    {
        display: flex;
    }
    .arrows
    {
        width: 48px;
        height: 48px;
        border-color: #000;
        position: absolute;
        top: 26%;
        color: white;
    }
    .prev
    {
        border-bottom: 6px solid;
        border-left: 6px solid;
        transform: rotate(45deg);
        left: 40px;
    }
    .next
    {
        border-bottom: 6px solid;
        border-left: 6px solid;
        transform: rotate(-135deg);
        right: 40px;
    }
    .text
    {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }
    .fade
    {
        margin: 0 0 0 0;
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
    }
    @-webkit-keyframes fade
    {
        from {opacity: .4}
        to {opacity: 1}
    }

    @keyframes fade
    {
        from {opacity: .4}
        to {opacity: 1}
    }
</style>
