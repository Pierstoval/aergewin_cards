<script lang="ts">
    import type {CharacterItem} from "./CharacterItem";

    export let character: CharacterItem;
    export let background_only: boolean;
</script>

<div class="character-container" class:background_only>
    <div class="character-content">
        <div class="flex toppart">
            <h1>{character.classe}</h1>
            <div class="flex">
                <table>
                    <tr>
                        <td class="pvmaxtablecell titletext2">PV max</td>
                        <td class="text-l pvtablecellmax titletext">{character.pv || ''}</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td class="pvtablecelltitle titletext2">PV actuels</td>
                        <td class="text-l pvtablecell">&nbsp;</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="flex actionscapacities">
            <table class="actions">
                <tr>
                    <td class="firsttableleft titletext">Actions</td>
                    <td class="firsttableright">{character.nombre_actions|| ''}</td>
                </tr>
                <tr>
                    <td class="firsttableleft titletext">Attaque</td>
                    <td class="firsttableright">{character.attaque || ''}</td>
                </tr>
                <tr>
                    <td class="firsttableleft titletext">Défense</td>
                    <td class="firsttableright">{character.defense || ''}</td>
                </tr>
                <tr>
                    <td class="firsttableleft titletext">Dégâts</td>
                    <td class="firsttableright">{character.degats || ''}</td>
                </tr>
                <tr>
                    <td class="firsttableleft titletext">Arme</td>
                    <td class="firsttableright">{character.arme || ''}</td>
                </tr>
            </table>
            <div>
                <table>
                    <tr>
                        <td class="weaponinhandtitle">
                            <span class="titletext2">Arme en main</span>
                        </td>
                        <td class="weaponinhandtxt">{character.degats ? 'oui' : ''}</td>
                    </tr>
                </table>
                <table class="capacities">
                    <tr>
                        <td class="capacity">
                            <span class="titletext2">Capacité arme</span>
                            <br>{character.capacite_arme || ''}
                        </td>
                    </tr>
                    <tr>
                        <td class="capacity">
                            <span class="titletext2">Capacité spéciale</span>
                            <br>{character.capacite_speciale || ''}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="flex bonusesandinventory">
            <div>
                <table>
                    <tr>
                        <td class="bonustableleft titletext2">Bonus d'attaque</td>
                        <td class="bonustableright"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td class="bonustableleft titletext2">Bonus de dégâts</td>
                        <td class="bonustableright"></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td class="bonustableleft titletext2">Bonus de défense</td>
                        <td class="bonustableright"></td>
                    </tr>
                </table>
            </div>
            <table>
                <tr>
                    <td class="inventoryleft titletext2">Inventaire &amp; expérience</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<style lang="scss">
    :root {
        --imgratio: 1.20;
        --sizesratio: 1.2666;
    }
    @font-face {
        font-family: 'carolingia';
        src: url('/carolingia.ttf');
    }
    .titletext {
        font-family: 'carolingia', serif;
        font-size: calc(24px * var(--sizesratio));
    }
    .titletext2 {
        font-family: 'carolingia', serif;
        font-size: calc(20px * var(--sizesratio));
    }
    .text-l {
        font-size: calc(24px * var(--sizesratio));
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
        .pvmaxtablecell {
            width: calc(105px * var(--sizesratio));
        }
        .pvtablecellmax {
            width: calc(70px * var(--sizesratio));
            text-align: center;
        }
        .pvtablecelltitle {
            width: calc(140px * var(--sizesratio));
        }
        .pvtablecell {
            width: calc(118px * var(--sizesratio));
        }
    }
    .actionscapacities {
        justify-content: space-between;
        .actions {
            .firsttableleft {
                width: calc(130px * var(--sizesratio));
            }
            .firsttableright {
                text-align: center;
                width: calc(120px * var(--sizesratio));
            }
        }
        .capacities {
            width: calc(444px * var(--sizesratio));
            .capacity {
                vertical-align: top;
                text-align: left;
                height: calc(62px * var(--sizesratio));
                font-size: calc(13px * var(--sizesratio));
            }
        }
    }
    .weaponinhandtitle {
        width: calc(176px * var(--sizesratio));
        text-align: left;
    }
    .weaponinhandtxt {
        width: calc(80px * var(--sizesratio));
    }
    .bonusesandinventory {
        justify-content: space-between;
        .bonustableleft {
            width: calc(200px * var(--sizesratio));
        }
        .bonustableright {
            width: calc(50px * var(--sizesratio));
            text-align: center;
        }
        .inventoryleft {
            width: calc(445px * var(--sizesratio));
            vertical-align: top;
            text-align: left;
        }
    }
    .character-container {
        font-size: calc(16px * var(--sizesratio));
        display: inline-block;
        width: calc(1200px / var(--imgratio));
        height: calc(611px / var(--imgratio));
        background: transparent url('/esteren_set1_parchemin2.png') no-repeat;
        background-size: calc(1200px / var(--imgratio)) calc(611px / var(--imgratio));
        padding: calc(40px * var(--sizesratio));
        &.background_only {
            transform: scaleX(-1);
            .character-content {
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
