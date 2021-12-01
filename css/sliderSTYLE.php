<style>
    /* Slideshow container */
    *
    {
        box-sizing:border-box;
    }
    .slideshow-container
    {
        max-width: 100%;
        height: 330px;
        background-image: url("http://127.0.0.1/wordpress/wp-content/uploads/2021/07/Header_Welle_1900x600.png");
        position: relative;
        margin: 0;
        display: flex;
        justify-content: center;
        box-shadow: rgb(0 0 0 / 16%) 0px 3px 6px, rgb(0 0 0 / 23%) 0px 3px 6px;
    }

    .mySlides
    {
        display: none;
    }
    .arrows
    {
        width: 48px;
        height: 48px;
        border-color: #000;
        position: absolute;
        top: 32%;
        color: white;
    }
    .prev
    {
        border-bottom: 6px solid;
        border-left: 6px solid;
        transform: rotate(45deg);
        left: 10px;
        margin-left: 10px;
    }
    .next
    {
        border-bottom: 6px solid;
        border-left: 6px solid;
        transform: rotate(-135deg);
        right: 10px;
        margin-right: 10px;
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
        margin: 20px 0 0 0;
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
