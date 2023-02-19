<script lang="ts">
    import type {DiscoveryCard} from "$lib/DiscoveryCard";
    import { Buffer } from 'buffer';
    import svg from '$lib/svg_filter';

    export let card: DiscoveryCard;

    let invert = 80;
    let hueRotate = 250;

    const svgImage = Buffer.from(svg).toString('base64');

    const faIconCardStyle = getIcon();

    function getIcon(): string {
        if (card.type === 'Bonus') {
            invert = 20;
            hueRotate = 60;
            return 'heart';
        }
        return 'skull-crossbones';
    }
</script>

<div class="card-container" class:malus={card.style === 'Malus'} class:bonus={card.style === 'Bonus'}>
    <div class="card-background" style="filter:grayscale(50%) sepia(20%) invert({invert}%) hue-rotate({hueRotate}deg) contrast(150%);background:url(data:image/svg+xml;base64,{svgImage});"></div>
    <div class="card-frame">
        <div class="frame-header">
            <div>
                <h1 class="name">{card.nom.trim()}</h1>
                <h2 class="type">{card.style} {card.type}</h2>
            </div>
            <span class="frame-icon fa fa-{faIconCardStyle}"></span>
        </div>

        <div class="frame-text-box">
            <p class="description ftb-inner-margin">
                {card.effet}
            </p>
            <p class="flavour-text">"{card.storyline}"</p>
        </div>

        <div class="frame-bottom-info inner-margin">
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
    .frame-type-line {
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

    /*
        ----------------------
        ----------------------
                OVERFLOW
        ----------------------
        ----------------------
    */
    .frame-header,
    .frame-type-line,
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
        box-sizing: border-box;
        background: #171314;
        &.malus {
            --frame-color: #CC5555;
        }
        &.bonus {
            --frame-color: #5555CC;
        }
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
    .frame-type-line {
        background:
                linear-gradient( 0deg, rgba(201, 216, 201, .3), rgba(201, 216, 209, .3) ),
                url("https://image.ibb.co/jKByZn/tile_bg_1.jpg");
        margin-top: 10px;
        margin-left: 5px;
        margin-right: 5px;
        padding: 8px 0;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        border-radius: 18px/40px;
    }
    /*
      Tue 27/3
    */
    .name,
    .type {
        text-align: left;
        margin-left: 10px;
        align-self: baseline;
    }
    .name {
        font-size: 1.8em;
        font-weight: 600;
        margin-bottom: 8px;
    }
    .type {
        font-size: 1em;
    }

    .frame-art {
        width: 425px;
        height: 320px;
        margin: 0 10px;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    .frame-type-line {
        margin-top: 0;
    }
    .frame-icon {
        margin-right: 14px;
        font-size: 40px;
        align-self: center;
    }

    .frame-text-box {
        width: 425px;
        height: 527px;
        margin: 10px;
        background: #d3ded6 url(https://image.ibb.co/dFcNx7/tile_bg_2.jpg);
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        padding: 50px 10px;
        font-size: 2.2em;
        border-radius: 20px;
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
        display: flex;
        justify-content: space-between;
        margin: 5px 15px 0 15px;
    }

    fbi-left {
        flex: 1;
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
