<script lang="ts">
    import Victory from '$lib/Victory.svelte';
    import victories from '$lib/data/victories.json';
    import {VictoryItem} from "../../lib/VictoryItem";

    let data: Array<VictoryItem> = victories;

    let background_only = false;
</script>

<button on:click={() => background_only = !background_only}>Background only: {background_only ? 'true' : 'false'}</button>

<div style="text-align: center;">
    {#each data as victory}
        <Victory {victory} {background_only} />
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
