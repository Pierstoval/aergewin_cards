<script lang="ts">
    import type {VictoryItem} from "./VictoryItem";

    export let victory: VictoryItem;
    export let background_only: boolean;
</script>

<div class="victory-container" class:background_only>
    <div class="backdrop"></div>
    <div class="victory-content">
        <h1>Conditions de victoire</h1>

        <div class="conditiontext titletext2">
            <p>
                {victory.condition_victoire}
            </p>
        </div>
    </div>
</div>

<style lang="scss">
    :root {
        --imgratio: 1.20;
        --sizesratio: 0.75;
        --background-width: calc(600px * var(--sizesratio));
        --background-height: calc(300px * var(--sizesratio));
    }
    @font-face {
        font-family: 'carolingia';
        src: url('/carolingia.ttf');
    }
    .titletext2 {
        font-family: 'carolingia', serif;
        font-size: calc(25px * var(--sizesratio));
    }
    .victory-container {
        --padY: 35px;
        --padX: 30px;
        font-size: calc(16px * var(--sizesratio));
        display: inline-block;
        width: calc(var(--background-width) / var(--imgratio));
        height: calc(var(--background-height) / var(--imgratio));
        background: transparent url('/esteren_set1_parchemin2.png') no-repeat;
        background-size: calc(var(--background-width) / var(--imgratio)) calc(var(--background-height) / var(--imgratio));
        padding: calc(var(--padY) * var(--sizesratio)) calc(var(--padX) * var(--sizesratio));
        position: relative;
        margin: 0;
        .backdrop {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
            backdrop-filter: hue-rotate(200deg);
        }
        .victory-content {
            position: relative;
            z-index: 2;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            margin: 0 auto;
            h1 {
                font-family: 'carolingia', serif;
                font-size: calc(40px * var(--sizesratio));
                position: relative;
                z-index: 2;
            }
            .conditiontext {
                position: relative;
                z-index: 2;
                width: 100%;
                margin: 0 auto;
                height: calc(100px * var(--sizesratio));
                vertical-align: middle;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }
        &.background_only {
            transform: scaleX(-1);
            .victory-content {
                display: none;
                visibility: hidden;
            }
        }
    }
</style>
