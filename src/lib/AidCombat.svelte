<main>
    <section>
        <div class="inner">
            <h2>Actions possibles</h2>
            <table>
                <tr>
                    <th class="action">Action</th>
                    <th class="cost">Coût</th>
                    <th class="effect">Effet</th>
                    <th class="xp_gain">XP</th>
                </tr>
                <tr>
                    <td class="action">Activer une zone</td>
                    <td class="cost">Variable</td>
                    <td class="effect">Voir la section Zones activables.</td>
                    <td class="xp_gain">Variable</td>
                </tr>
                <tr>
                    <td class="action">Attaquer un ennemi</td>
                    <td class="cost">1 act°</td>
                    <td class="effect">Voir la section Système de combat.</td>
                    <td class="xp_gain">Spécial</td>
                </tr>
                <tr>
                    <td class="action">Explorer une nouvelle zone</td>
                    <td class="cost">2 act°</td>
                    <td class="effect">Pose une nouvelle tuile zone sur une case vide adjacente</td>
                    <td class="xp_gain">+1</td>
                </tr>
                <tr>
                    <td class="action">Se déplacer</td>
                    <td class="cost">1 act°</td>
                    <td class="effect">Déplace le personnage sur une case adjacente.</td>
                    <td class="xp_gain">-</td>
                </tr>
                <tr>
                    <td class="action">Déposer des ressources</td>
                    <td class="cost">-</td>
                    <td class="effect">Dépose des ressources de son inventaire sur sa zone.</td>
                    <td class="xp_gain">-</td>
                </tr>
                <tr>
                    <td class="action">Récupérer des ressources</td>
                    <td class="cost">-</td>
                    <td class="effect">Prend des ressources sur sa zone.</td>
                    <td class="xp_gain">-</td>
                </tr>
            </table>

            <br>
            <br>

            <h2>Zones activables</h2>
            <table>
                <tr>
                    <th class="zone">Zone</th>
                    <th class="action">Action</th>
                    <th class="cost">Coût</th>
                    <th class="effect">Effet</th>
                    <th class="xp_gain">XP</th>
                </tr>
                <tr>
                    <td class="zone" rowspan="3">Village</td>
                    <td class="action">Réparer le village</td>
                    <td class="cost">2 act° + 1 bois</td>
                    <td class="effect">+1 PV pour le village (maximum 10)</td>
                    <td class="xp_gain">-</td>
                </tr>
                <tr>
                    <td class="action">Construire une barricade</td>
                    <td class="cost">1 act° + 3 bois</td>
                    <td class="effect">Construit une barricade sur le village</td>
                    <td class="xp_gain">+1</td>
                </tr>
                <tr>
                    <td class="action">Regagner des PV</td>
                    <td class="cost">2 act°</td>
                    <td class="effect">Soigne 1 point de vie</td>
                    <td class="xp_gain">-</td>
                </tr>
                <tr>
                    <td class="zone" rowspan="2">Forêt</td>
                    <td class="action">Récolter de la nourriture</td>
                    <td class="cost">1 act°</td>
                    <td class="effect">+1 unité de nourriture</td>
                    <td class="xp_gain">-</td>
                </tr>
                <tr>
                    <td class="action">Couper du bois</td>
                    <td class="cost">2 act°</td>
                    <td class="effect">+1 unité de bois</td>
                    <td class="xp_gain">-</td>
                </tr>
                <tr>
                    <td class="zone">Rivière</td>
                    <td class="action">Récolter de la nourriture</td>
                    <td class="cost">1 act°</td>
                    <td class="effect">+1 unité de nourriture</td>
                    <td class="xp_gain">-</td>
                </tr>
                <tr>
                    <td class="zone">Plaine</td>
                    <td class="action">-</td>
                    <td class="cost">-</td>
                    <td class="effect">-</td>
                    <td class="xp_gain">-</td>
                </tr>
                <tr>
                    <td class="zone">Montagne</td>
                    <td class="action">-</td>
                    <td class="cost">-</td>
                    <td class="effect">-</td>
                    <td class="xp_gain">-</td>
                </tr>
                <tr>
                    <td class="zone">Angarde</td>
                    <td class="action">Recruter un Soldat</td>
                    <td class="cost">2 act° + 1 nourriture + 1 arme</td>
                    <td class="effect">Entraîne un villageois pour en faire un soldat</td>
                    <td class="xp_gain">+1</td>
                </tr>
                <tr>
                    <td class="zone">Ferme</td>
                    <td class="action">Récolter de la nourriture</td>
                    <td class="cost">1 act°</td>
                    <td class="effect">+2 unités de nourriture</td>
                    <td class="xp_gain">-</td>
                </tr>
                <tr>
                    <td class="zone">Forge</td>
                    <td class="action">Forger une arme</td>
                    <td class="cost">1 act° + 2 minerais</td>
                    <td class="effect">Forge une arme pour un soldat ou un personnage</td>
                    <td class="xp_gain">+1</td>
                </tr>
                <tr>
                    <td class="zone">Mines</td>
                    <td class="action">Récolter du minerai</td>
                    <td class="cost">2 act°</td>
                    <td class="effect">+1 unité de minerai</td>
                    <td class="xp_gain">-</td>
                </tr>
                <tr>
                    <td class="zone" rowspan="2">Sanctuaire</td>
                    <td class="action">Regagner des PV</td>
                    <td class="cost">1 act°</td>
                    <td class="effect">Soigne 1 point de vie</td>
                    <td class="xp_gain">-</td>
                </tr>
                <tr>
                    <td class="action">Blesser un ennemi</td>
                    <td class="cost">2 act°</td>
                    <td class="effect">Inflige 3 dégâts à un ennemi à 2 cases max</td>
                    <td class="xp_gain">+1</td>
                </tr>
                <tr>
                    <td class="zone">Cimetière</td>
                    <td class="action">-</td>
                    <td class="cost">-</td>
                    <td class="effect">Si un ennemi apparaît à 1 case ou moins, un ennemi de plus apparaît au Cimetière. Effet cumulable.</td>
                    <td class="xp_gain">-</td>
                </tr>
            </table>
        </div>
    </section>
</main>

<style lang="scss">
    main {
        display: flex;
        align-items: center;
        section {
            --width: 900px;
            --height: 1175px;
            font-size: 15px;
            background: transparent url('/esteren_set1_parchemin2.png') no-repeat;
            background-size: var(--width) var(--height);
            width: var(--width);
            height: var(--height);
            padding: calc(var(--height) / 16) calc(var(--width) / 18);
            margin: 0 auto;
            .inner {
                width: 100%;
                height: 100%;
                h2 {
                    font-family: 'carolingia', serif;
                    font-size: 42px;
                    text-align: center;
                }
                table {
                    width: 100%;
                    th, td {
                        padding: 6px;
                        border: solid 4px white;
                        vertical-align: middle;
                    }
                    th {
                        font-weight: bold;
                    }
                    //.action { width: 27%; }
                    //.cost { width: 10%; text-align: center; }
                    //.effect { width: 25%; }
                    //.xp_gain { width: 11%; text-align: center; }
                }
            }
        }
    }
</style>
