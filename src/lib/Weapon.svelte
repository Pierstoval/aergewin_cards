<script lang="ts">
    import type {WeaponItem} from "./WeaponItem";

    export let weapon: WeaponItem;
    export let background_only: boolean;
</script>

<div class="weapon-container" class:background_only>
    <div class="weapon-content relative">
        <div class="flex toppart">
            <h1>{weapon.nom}</h1>
        </div>

        <table id="actions" class="absolute left0 bottom0">
            <tr>
                <td class="actionleft titletext relative">
                    <i class="fa-duotone fa-dagger absolute"></i>
                    <i class="fa-duotone fa-droplet absolute"></i>
                </td>
                <td class="actionright titletext">
                    {weapon.degats || ''}
                </td>
            </tr>
        </table>
        <div class="weapon-image-container">
            <img class="weapon-image" src="/armes/{weapon.nom}.png" alt="{weapon.nom}">
        </div>
        <table class="absolute right0 bottom0">
            <tr>
                <td id="capacity">
                    <span class="titletext2">Capacités spéciales</span>
                    <br>{weapon.carac || ''}
                </td>
            </tr>
        </table>
    </div>
</div>

<style lang="scss">
    :root {
        --imgratio: 1.20;
        --sizesratio: 0.75;
        --background-width: calc(600px * var(--sizesratio));
        --background-height: calc(275px * var(--sizesratio));
    }
    @font-face {
        font-family: 'carolingia';
        src: url('/carolingia.ttf');
    }
    .right0 {
        right: 0;
    }
    .left0 {
        left: 0;
    }
    .bottom0 {
        bottom: 0;
    }
    .relative {
        position: relative;
    }
    .absolute {
        position: absolute;
    }
    .titletext {
        font-family: 'carolingia', serif;
        font-size: calc(35px * var(--sizesratio));
    }
    .titletext2 {
        font-family: 'carolingia', serif;
        font-size: calc(20px * var(--sizesratio));
    }
    .flex {
        display: flex;
    }
    .fa-dagger {
        transform: rotate(-135deg);
        top: calc(6px * var(--sizesratio));
        left: calc(14px * var(--sizesratio));
    }
    .fa-droplet {
        transform: rotate(-16deg) scaleX(80%);
        color: darkred;
        top: calc(14px * var(--sizesratio));
        left: calc(39px * var(--sizesratio));
        font-size: calc(10px * var(--sizesratio));
    }
    .toppart {
        justify-content: space-between;
        h1 {
            font-family: 'carolingia', serif;
            font-size: calc(42px * var(--sizesratio));
            height: calc(40px * var(--sizesratio));
        }
    }
    #actions {
        .actionleft {
            width: calc(60px * var(--sizesratio));
            height: calc(10px * var(--sizesratio));
        }
        .actionright {
            text-align: center;
            width: calc(60px * var(--sizesratio));
            font-weight: bolder;
        }
    }
    .weapon-image-container {
        --imgw: calc(72px * var(--sizesratio));
        --imgh: calc(132px * var(--sizesratio));
        height: var(--imgh);
        width: var(--imgw);
        position: absolute;
        top: 0;
        left: 32%;
        text-align: center;
    }
    .weapon-image {
        max-height: var(--imgh);
        max-width: var(--imgw);
    }
    #capacity {
        vertical-align: top;
        text-align: left;
        width: calc(200px * var(--sizesratio));
        height: calc(130px * var(--sizesratio));
        font-size: calc(13px * var(--sizesratio));
    }
    .weapon-container {
        --padY: 35px;
        --padX: 30px;
        font-size: calc(16px * var(--sizesratio));
        display: inline-block;
        width: calc(var(--background-width) / var(--imgratio));
        height: calc(var(--background-height) / var(--imgratio));
        background: transparent url('/esteren_set1_parchemin2.png') no-repeat;
        background-size: calc(var(--background-width) / var(--imgratio)) calc(var(--background-height) / var(--imgratio));
        padding: calc(var(--padY) * var(--sizesratio)) calc(var(--padX) * var(--sizesratio));
        .weapon-content {
            width: calc(var(--background-width) / var(--imgratio) - var(--padX) * 2);
            height: calc(var(--background-height) / var(--imgratio) - var(--padY) * 2);
        }
        &.background_only {
            transform: scaleX(-1);
            .weapon-content {
                display: none;
                visibility: hidden;
            }
        }


        table {
            margin: 5px 5px 0 5px;
            td {
                padding: 6px 5px 2px 5px;
                border: solid 2px #fff;
                vertical-align: middle;
            }
        }
    }
</style>
