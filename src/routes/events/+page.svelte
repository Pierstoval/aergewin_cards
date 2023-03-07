<script lang="ts">
    import type {EventItem} from '$lib/EventItem.ts';
    import EventCard from '$lib/EventCard.svelte';
    import BackgroundCard from '$lib/BackgroundCard.svelte';
    import cards from '$lib/data/events.json';

    let data: Array<EventItem> = cards;

    let background_only = false;
</script>

<button on:click={() => background_only = !background_only}>Background only: {background_only ? 'true' : 'false'}</button>

<div style="text-align: center;">
    {#each data as card}
        {#if background_only}
            <BackgroundCard type="event" />
        {:else}
            <EventCard {card} />
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
