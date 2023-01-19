<script lang="ts">
    import type {CardItem} from '$lib/CardItem.ts';
    import Card from '$lib/Card.svelte';
    import BackgroundCard from '$lib/BackgroundCard.svelte';
    import cards from '$lib/data/cards.json';

    let data: Array<CardItem> = cards;

    let background_only = false;
</script>

<button on:click={() => background_only = !background_only}>Background only: {background_only ? 'true' : 'false'}</button>

<div style="text-align: center;">
    {#each data as card}
        {#if background_only}
            <BackgroundCard />
        {:else}
            <Card {card} />
        {/if}
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
