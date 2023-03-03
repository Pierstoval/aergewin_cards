<script lang="ts">
    import MonsterToken from '$lib/MonsterToken.svelte';
    let soldiers = Array(5);
</script>

<div style="text-align: center; display: flex; flex-wrap: wrap; justify-content: center">
    {#each soldiers as card}
        <MonsterToken card={{type: 'soldat'}} />
    {/each}
</div>
