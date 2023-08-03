<style>
    .wedo-cards__container {
        max-width: 100%;
        margin: 50px auto;
    }

    @media screen and (min-width: 992px) {
        .wedo-cards__container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            gap: 15px;
        }
    }

    .wedo-cards__item {
        background-size: cover;
        background-position: center;
        border-radius: 10px;
        overflow: hidden;
        width: 100%;
        -webkit-box-shadow: 0 13px 27px -5px hsla(240deg, 30%, 28%, 0.25), 0 8px 16px -8px hsla(0deg, 0%, 0%, 0.3), 0 -6px 16px -6px hsla(0deg, 0%, 0%, 0.03);
        box-shadow: 0 13px 27px -5px hsla(240deg, 30%, 28%, 0.25), 0 8px 16px -8px hsla(0deg, 0%, 0%, 0.3), 0 -6px 16px -6px hsla(0deg, 0%, 0%, 0.03);
        position: relative;
        top: 0;
        -webkit-transition: top 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
        transition: top 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
        margin-bottom: 20px;
        text-align: left;
    }

    @media screen and (min-width: 992px) {
        .wedo-cards__item {
            width: 100%;
            margin: 0;
            min-height: 475px;
        }

        .wedo-cards__item:hover,
        .wedo-cards__item:focus {
            top: -40px;
            -webkit-transition: top 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            transition: top 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
        }

        .wedo-cards__item:hover .wedo-cards__content,
        .wedo-cards__item:focus .wedo-cards__content {
            top: 0;
            height: 110%;
            padding: 10%;
            -webkit-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
        }

        .wedo-cards__item:hover .wedo-cards__heading,
        .wedo-cards__item:focus .wedo-cards__heading {
            margin-bottom: 20px;
        }

        .wedo-cards__item:hover .wedo-cards__sub-heading,
        .wedo-cards__item:focus .wedo-cards__sub-heading {
            opacity: 1;
            height: auto;
            -webkit-transition: opacity 0.8s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            transition: opacity 0.8s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
        }
    }

    .wedo-cards__content {
        padding: 20px;
        margin-top: 200px;
        background-image: -webkit-gradient(linear, left top, right top, from(rgba(174, 10, 70, 0.8)), color-stop(rgba(168, 11, 110, 0.8)), to(rgba(88, 40, 115, 0.8)));
        background-image: linear-gradient(90deg, rgba(174, 10, 70, 0.8), rgba(168, 11, 110, 0.8), rgba(88, 40, 115, 0.8));
    }

    @media screen and (min-width: 992px) {
        .wedo-cards__content {
            padding: 3% 10%;
            margin: 0;
            position: absolute;
            width: 100%;
            top: 70%;
            -webkit-transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
        }
    }

    .wedo-cards__heading,
    .wedo-cards__sub-heading {
        color: #fff;
        line-height: 1.5em;
        margin: 0;
    }

    .wedo-cards__heading {
        font-size: 36px;
        margin: 0;
    }

    .wedo-cards__sub-heading {
        font-size: 18px;
    }

    @media screen and (min-width: 992px) {
        .wedo-cards__sub-heading {
            font-size: 18px;
            opacity: 0;
            height: 0;
            overflow: hidden;
            -webkit-transition: opacity 0.8s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            transition: opacity 0.8s cubic-bezier(0.68, -0.55, 0.27, 1.55);
        }
    }

    .wedo-cards__cta {
        background-color: #fff;
        padding: 19px 35px 18px;
        -webkit-appearance: none;
        display: inline-block;
        margin-top: 10px;
        color: #ae0a46;
        border: 2px solid #5f5753;
        font-size: 14px;
        font-weight: 400;
    }

    @media screen and (min-width: 992px) {
        .wedo-cards__cta {
            margin-top: 10%;
        }
    }

    .wedo-cards__cta:hover,
    .wedo-cards__cta:focus {
        background-color: #5f5753;
        color: #fff;
    }
</style>
