const pokemonContainer = document.querySelector('.pokemon-container');
const ddl = document.querySelector('.select-pokemon');

function fetchPokemon(id){
    fetch(`https://pokeapi.co/api/v2/pokemon/${id}/`)
    .then(res => res.json())
    .then(data => { 
        /* createPokemon(data); */
        ddlPokemon(data);
    });
}

function fetchPokemon2(id){
    fetch(`https://pokeapi.co/api/v2/pokemon/${id}/`)
    .then(res => res.json())
    .then(data => { 
        createPokemon(data);
    });
}

function fetchPokemons(number){
    for(let i = 1; i <= number; i++){
        fetchPokemon(i);
    }
}

/* por qué el primero lo deja como undefine? */
function ddlPokemon(pokemon){
    const namePokemon = document.createElement('option');
    namePokemon.value = pokemon.id;
    namePokemon.text = pokemon.name;

    ddl.appendChild(namePokemon);
}


function createPokemon(pokemon){
    const card = document.createElement('div');
    card.classList.add('text-center');

    const spriteCointainer = document.createElement('div');
    spriteCointainer.classList.add('img-container');

    const sprite = document.createElement('img');
    sprite.src = pokemon.sprites.front_default;

    spriteCointainer.appendChild(sprite);

    const number = document.createElement('p');
    number.textContent = `#${pokemon.id.toString().padStart(3, 0)}`;

    const name = document.createElement('p');
    name.classList.add('name');
    name.textContent = pokemon.name;

    card.appendChild(spriteCointainer);
    card.appendChild(number);
    card.appendChild(name);

    pokemonContainer.appendChild(card);
}

fetchPokemons(99);
ddlPokemon(9);

function cambio(){
    const selected = document.getElementById("select-pokemon");
    
    pokemonContainer.removeChild(pokemonContainer.lastChild);

    fetchPokemon2(selected.value);
}

