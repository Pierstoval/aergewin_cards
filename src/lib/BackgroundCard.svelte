<script lang="ts">
    import { Buffer } from 'buffer';
    import svg from '$lib/svg_filter';

    export let style: string = '';

    const svgImage = Buffer.from(svg).toString('base64');
</script>

<div class="card-container {style}">
    <div class="rel card-image"></div>
    <div class="rel card-filter" style="background:url(data:image/svg+xml;base64,{svgImage});"></div>
</div>

<style lang="scss">
    .rel {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .card-container {
        display: inline-block;
        border: 0 none transparent;
        position: relative;
        width: 500px;
        height: 700px;
        margin: 5px;
        border-radius: 0;
        box-sizing: border-box;
        background: #171314;
        overflow: hidden;
    }
    .card-image {
        z-index: 0;
        background-image: url(/bg_parchment.png);
        background-repeat: no-repeat;
        background-position: center;
        background-size: 500px 700px;
        filter: invert(0%);
        --imgratio: 0.75;
        .event & {
            filter: hue-rotate(250deg) saturate(300%);
        }
        .monster & {
            filter: hue-rotate(0deg) saturate(300%);
        }
        .discovery & {
            filter: hue-rotate(180deg) saturate(100%);
        }
    }
    .card-filter {
        z-index: 1;
        filter: saturate(0%) contrast(100%) invert(100%) opacity(0.2);
    }
</style>
