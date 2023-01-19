<script lang="ts">
    import { Buffer } from 'buffer';
    import svg from '$lib/svg_filter';

    const svgImage = Buffer.from(svg).toString('base64');
</script>

<div class="card-container">
    <div class="card-background" style="background:url(data:image/svg+xml;base64,{svgImage});"></div>
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
</style>
