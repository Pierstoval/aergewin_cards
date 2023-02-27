<script lang="ts">
    import type {MonsterItem} from '$lib/MonsterItem.ts';
    import MonsterToken from '$lib/MonsterToken.svelte';
    import cards from '$lib/data/monsters.json';

    let data: Array<MonsterItem> = [];

    cards.forEach((card: MonsterItem) => {
        for (let i = 0; i < card.amount; i++) {
            data.push(card);
        }
    });
</script>

<div style="text-align: center; display: flex; flex-wrap: wrap; justify-content: center">
    {#each data as card}
        <MonsterToken {card} />
    {/each}
</div>
