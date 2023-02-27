<script lang="ts">
    import type {MonsterItem} from "./MonsterItem";

    export let card: MonsterItem;
</script>

<div class="icons">
    <div class="monster-icon top" style="background-image: url('/cards/{card.type}.png');">
    </div>
    <div class="monster-icon bottom" style="background-image: url('/cards/{card.type}_invert.png');">
    </div>
</div>

<style lang="scss">
    :root {
        --pin-height: 15px;
    }
    .icons {
        position: relative;
        width: 100px;
        height: 250px;
        margin: calc(var(--pin-height) / 4) 1px;
    }
    .monster-icon {
        position: relative;
        display: inline-block;
        width: 100px;
        height: 100px;
        background-size: cover;
        border-radius: 50%;
        margin: var(--pin-height) 2px 30px 2px;
        border: solid 6px lightgray;
        z-index: 100;
        &.top {
            &:before {
                position: absolute;
                bottom: calc(-4 * var(--pin-height));
                height: calc(4 * var(--pin-height));
                left: 50%;
                margin-left: -15px;
                width: 30px;
                background: lightgray;
                content: "";
                display: inline-block;
            }
        }
        &.bottom {
            display: inline-block;
            z-index: 200;
        }
    }
</style>
