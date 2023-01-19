<script lang="ts">
    import Character from '$lib/Character.svelte';
    import {CharacterItem} from "$lib/CharacterItem";

    let data: Array<CharacterItem> = [];

    for (let i = 0; i < 3; i++) {
        data.push(new CharacterItem());
    }

    let background_only = false;
</script>

<button on:click={() => background_only = !background_only}>Background only: {background_only ? 'true' : 'false'}</button>

<div style="text-align: center;">
    {#each data as character}
        <Character {character} {background_only} />
    {/each}
</div>

<style lang="scss">
    button {
        display: block;
        position: fixed;
        top: 15px;
        right: 15px;
        z-index: 100;
    }
    @media print {
        button {
            display: none;
        }
    }
</style>
