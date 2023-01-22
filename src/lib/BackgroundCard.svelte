<script lang="ts">
    import { Buffer } from 'buffer';
    import svg from '$lib/svg_filter';

    export let monster: boolean = false;

    const svgImage = Buffer.from(svg).toString('base64');
</script>

<div class="card-container">
    <div class="card-background" class:monster style="background:url(data:image/svg+xml;base64,{svgImage});"></div>
    {#if monster}
        <img id="barbu" src="/barbu.png" />
    {/if}
</div>

<style lang="scss">
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
    }
    .card-background {
        filter: saturate(967%) contrast(121%) invert(100%);
        &.monster {
            filter: invert(100%) brightness(20%) saturate(0);
        }
        position: absolute;
        top: 0;
        left: 0;
        width: calc(100% - 40px);
        height: calc(100% - 40px);
        margin: 20px;
        border-radius: 20px;
        display: flex;
        z-index: 0;
    }
    #barbu {
        --barburatio: 0.75;
        --barbuheight: 395px;
        width: calc(255px * var(--barburatio));
        height: calc(var(--barbuheight) * var(--barburatio));
        position: relative;
        top: 50%;
        margin-top: calc(-0.38 * var(--barbuheight));
        z-index: 1;
        mix-blend-mode: difference;
        filter: drop-shadow(0 0 1px white) drop-shadow(0 0 1px white) drop-shadow(0 0 1px white) drop-shadow(0 0 10px red) drop-shadow(0 0 30px black) drop-shadow(0 0 30px black) drop-shadow(0 0 30px black);
    }
</style>
