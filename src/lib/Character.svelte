<script lang="ts">
    import type {CharacterItem} from "./CharacterItem";

    export let character: CharacterItem;
    export let background_only: boolean;
</script>

<div class="character-container" class:background_only>
    <div class="character-content relative">
        <div class="flex toppart">
            <h1>{character.classe}</h1>
        </div>

        <table id="actions" class="absolute left0 bottom0">
            <tr>
                <td class="titletext">
                    <div class="actionleft">
                        <i class="fa-duotone fa-heart"></i>
                    </div>
                </td>
                <td class="titletext">
                    <div class="actionright">
                        {character.pv || ''}
                    </div>
                </td>
            </tr>
            <tr>
                <td class="titletext relative">
                    <div class="actionleft">
                        <img src="/speed_icon.png" class="absolute speed_icon">
                    </div>
                </td>
                <td class="titletext">
                    <div class="actionright">
                        {character.nombre_actions|| ''}
                    </div>
                </td>
            </tr>
            <tr>
                <td class="titletext">
                    <div class="actionleft">
                        <i class="fa-duotone fa-sword"></i>
                    </div>
                </td>
                <td class="titletext">
                    <div class="actionright">
                        {character.attaque || ''}
                    </div>
                </td>
            </tr>
            <tr>
                <td class="titletext">
                    <div class="actionleft">
                        <i class="fa-duotone fa-shield-quartered"></i>
                    </div>
                </td>
                <td class="titletext">
                    <div class="actionright">
                        {character.defense || ''}
                    </div>
                </td>
            </tr>
        </table>
        <table class="absolute right0 bottom0">
            <tr>
                <td class="capacity">
                    <span class="titletext2">Capacités spéciales</span>
                    <br>{character.capacite_speciale || ''}
                </td>
            </tr>
            <tr>
                <td class="inventory titletext2">Inventaire &amp; expérience</td>
            </tr>
        </table>
    </div>
</div>

<style lang="scss">
    :root {
        --imgratio: 1.20;
        --sizesratio: 0.75;
        --background-width: calc(600px * var(--sizesratio));
        --background-height: calc(500px * var(--sizesratio));
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
        font-size: calc(26px * var(--sizesratio));
    }
    .titletext2 {
        font-family: 'carolingia', serif;
        font-size: calc(20px * var(--sizesratio));
    }
    .flex {
        display: flex;
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
        --actionsheight: 28px;
        text-align: center;
        font-weight: bolder;
        * {
            padding: calc(1px * var(--sizesratio)) 0;
            margin: 0;
        }
        .actionleft,
        .actionright {
            width: calc(75px * var(--sizesratio));
            min-width: calc(75px * var(--sizesratio));
            max-width: calc(75px * var(--sizesratio));
            height: calc(var(--actionsheight) * var(--sizesratio));
            min-height: calc(var(--actionsheight) * var(--sizesratio));
            max-height: calc(var(--actionsheight) * var(--sizesratio));
            line-height: unset;
            font-size: calc(var(--actionsheight) * var(--sizesratio));
            overflow: hidden;
            //font-size: calc(var(--actionsheight) * var(--sizesratio));
        }
        .actionright {
            padding-top: calc(5px * var(--sizesratio));
        }
        .speed_icon {
            top: calc(1px * var(--sizesratio));
            left: 50%;
            margin-left: calc(-13px * var(--sizesratio));
            height: calc(var(--actionsheight) * 1.15 * var(--sizesratio));
        }
    }
    .capacity,
    .inventory {
        width: calc(249px * var(--sizesratio));
        height: calc(130px * var(--sizesratio));
        text-align: left;
        vertical-align: top;
    }
    .capacity {
        font-size: calc(13px * var(--sizesratio));
    }
    .inventory {
    }
    .character-container {
        --padY: 35px;
        --padX: 30px;
        font-size: calc(16px * var(--sizesratio));
        display: inline-block;
        width: calc(var(--background-width) / var(--imgratio));
        height: calc(var(--background-height) / var(--imgratio));
        background: transparent url('/esteren_set1_parchemin2.png') no-repeat;
        background-size: calc(var(--background-width) / var(--imgratio)) calc(var(--background-height) / var(--imgratio));
        padding: calc(var(--padY) * var(--sizesratio)) calc(var(--padX) * var(--sizesratio));
        .character-content {
            width: calc(var(--background-width) / var(--imgratio) - var(--padX) * 2);
            height: calc(var(--background-height) / var(--imgratio) - var(--padY) * 2);
        }
        &.background_only {
            transform: scaleX(-1);
            .character-content {
                display: none;
                visibility: hidden;
            }
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
</style>
