<script lang="ts">
    import type {MonsterItem} from "./MonsterItem";
    import { Buffer } from 'buffer';
    import svg from '$lib/svg_filter';

    export let card: MonsterItem;

    const svgImage = Buffer.from(svg).toString('base64');

    const hueRotate = 0;
    const invert = 0;
</script>

<div class="card-container">
    <div class="card-background" style="filter:grayscale(50%) sepia(20%) invert({invert}%) hue-rotate({hueRotate}deg) contrast(150%);background:url(data:image/svg+xml;base64,{svgImage});"></div>
    <div class="card-frame">
        <div class="frame-header">
            <h1 class="name">{card.type}</h1>
        </div>

        <div class="frame-art" style="background-image: url('/cards/{card.type}.png');">
        </div>

        <div class="frame-type-line">
            <span class="type">
                {card.special || ''}
            </span>
        </div>

        <div class="frame-badges">
            <div class="frame-bottom"><i class="fa-duotone fa-sword"></i>  <span>{card.attaque}</span></div>
            <div class="frame-bottom"><i class="fa-duotone fa-shield-quartered"></i>  <span>{card.attaque}</span></div>
            <div class="frame-bottom"><i class="fa-duotone fa-heart-half"></i>  <span>{card.pv}</span></div>
            <div class="frame-bottom"><img src="/speed_icon.png" width="23" height="23">  <span>{card.vitesse}</span></div>
        </div>

        <div class="frame-bottom-info">

            <div class="fbi-left">
                <p>Aergewin</p>
                <p>2023 &#x2022; FR</p>
            </div>

            <div class="fbi-right">
                &#x99; &amp; &#169; 2023 Alex Rock
            </div>

        </div>
    </div>
</div>

<style lang="scss">

    /*
        -------------------------
        -------------------------
                BORDERS
        -------------------------
        -------------------------
    */
    .frame-header,
    .frame-type-line,
    .frame-bottom {
        border-bottom: 4px solid #a9a9a9;
        border-left: 2px solid #a9a9a9;
        border-top: 1px solid #fff;
        border-right: 1px solid #fff;
    }

    .frame-header,
    .frame-art,
    .frame-type-line {
        box-shadow: 0 0 0 2px #171314, 0 0 0 5px var(--frame-color), -3px 3px 2px 5px #171314;

        margin-bottom: 7px;
    }

    .frame-text-box {
        box-shadow: 0 0 0 5px var(--frame-color), -3px 3px 2px 5px #171314;
    }

    .frame-bottom {
        box-shadow: 0 0 0 2px #171314, 0 0 0 5px var(--frame-color), 0 3px 2px 7px #171314;
    }

    /*
        ----------------------
        ----------------------
                OVERFLOW
        ----------------------
        ----------------------
    */
    .frame-header,
    .frame-type-line,
    .frame-bottom,
    .frame-text-box {
        overflow: hidden;
    }

    .card-container {
        display: inline-block;
        border: 1px solid black;
        position: relative;
        width: 500px;
        height: 700px;
        margin: 5px;
        border-radius: 25px;
        box-sizing: border-box;
        background: #171314;
        --frame-color: #d7915d;
    }
    .card-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 458px;
        height: 600px;
        margin: 20px 20px 0 20px;
        border-radius: 6px 6px 8% 8%;
        display: flex;
        z-index: 0;
    }


    /*
      ----------------------------------------
      ----------------------------------------
                CARD FRAME
      ----------------------------------------
      ----------------------------------------
    */
    .card-frame {
        z-index: 1;
        position: absolute;
        height: 648px;
        width: 445px;
        margin: 20px 20px 0 20px;
        top: 0.5%;
        left: 1.2%;
        display: flex;
        flex-direction: column;
    }



    .frame-header,
    .frame-bottom,
    .frame-type-line {
        background:
                linear-gradient( 0deg, rgba(201, 216, 201, .3), rgba(201, 216, 209, .3) ),
                url("https://image.ibb.co/jKByZn/tile_bg_1.jpg");
        margin-top: 10px;
        margin-left: 5px;
        margin-right: 5px;
        padding: 8px 0;
        display: flex;
        justify-content: space-between;
        border-radius: 18px/40px;
    }
    .frame-type-line {
        padding: 50px 0;
        margin: 20px auto 45px auto;
        width: 95%;
        height: 170px;
        border-radius: 18px/20px;
    }


    .frame-badges {
        position: absolute;
        bottom: 27px;
        width: 100%;
        padding: 0 15px;
        display: flex;
        justify-content: space-between;
        .frame-bottom {
            padding: 4px 8px 2px;
            color: black;
            font-weight: bold;
            font-size: 23px;
        }
    }

    .name,
    .type {
        font-size: 1.3em;
        margin-left: 10px;
        align-self: baseline;
    }
    .name {
        font-weight: 600;
    }
    .type {
        text-align: left;
    }

    #mana-icon {
        font-size: 1.4em;
        background: #ADD3AC;
        border-radius: 50%;
        box-sizing: border-box;
        box-shadow: -0.05em 0.12em 0px 0 black;
        margin-right: 5px;
        height: 20px;
        align-self: center;
    }
    .frame-art {
        width: 415px;
        height: 320px;
        margin: 1px auto 0;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    .frame-icon {
        margin-right: 14px;
        font-size: 20px;
        align-self: center;
    }

    .frame-text-box {
        width: 425px;
        height: 232px;
        margin: 0 10px;
        background: #d3ded6 url(https://image.ibb.co/dFcNx7/tile_bg_2.jpg);
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        padding: 50px 6px;
        font-size: 1.2em;
    }

    .flavour-text {
        font-style: italic;
        padding: 10px 0;
    }

    p {
        margin-bottom: 5px;
    }

    .ftb-inner-margin {
        margin: 5px 1px;
    }





    .frame-bottom-info {
        color: white;
        position: relative;
        display: flex;
        justify-content: space-between;
        margin: 15px 15px -10px 15px;
    }

    .fbi-left p:first-of-type {
        margin-bottom: 1px;
    }
    .fbi-left,
    .fbi-right {
        font-size: 10px;
        position: relative;
        top: 6px;
    }

    .inner-margins {
        margin: 0 10px;
    }

    .fbi-right {
        flex: 1;
        text-align: right;
    }
    .frame-bottom-info img {
        overflow: hidden;
        max-width: 10px;
    }
</style>
