<script lang="ts">
    import type {MonsterItem} from '$lib/MonsterItem.ts';
    import MonsterCard from '$lib/MonsterCard.svelte';
    import BackgroundCard from '$lib/BackgroundCard.svelte';
    import cards from '$lib/data/monsters.json';

    let data: Array<MonsterItem> = [];

    cards.forEach((card: MonsterItem) => {
        for (let i = 0; i < card.amount; i++) {
            console.info({data});
            data.push(card);
        }
    });

    let background_only = false;
</script>

<button on:click={() => background_only = !background_only}>Background only: {background_only ? 'true' : 'false'}</button>

<div style="text-align: center;">
    {#each data as card}
        {#if background_only}
            <BackgroundCard style="monster" />
        {:else}
            <MonsterCard {card} />
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
