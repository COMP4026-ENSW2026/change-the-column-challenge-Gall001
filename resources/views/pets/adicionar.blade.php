Adicionar novo pet:

<form action="/pets" method="post">
    @csrf

    <label for="name">Nome</label>
    <input id="name" name="name" type="text" /> <br/>

    <label for="color">Cor</label>
    <input id="color" name="color" type="text" /> <br/>

    <label for="specie">Especie</label>
    <select name="specie" id="specie">
        <option value="cachorro">cachorro</option>
        <option value="gato">gato</option>
        <option value="coelho">coelho</option>
        <option value="passaro">passaro</option>
    </select>

    <label for="SubSpecies">SubSpecie (Optional)</label>
    <input id="SubSpecies" name="SubSpecies" type="text" /> <br/>

    <label for="size">Size</label>
    <select name="size" id="size">
        <option value="Extra Small">Extra Small</option>
        <option value="Medium Small">Medium Small</option>
        <option value="Medium">Medium</option>
        <option value="Large">Large</option>
        <option value="Extra Large">Extra Large</option>
    </select>

    <label for="SizeCM">Size in Centimeter (Optional)</label>
    <input id="SizeCM" name="SizeCM" type="text" /> <br/>

    <br/>
    <button type="submit">
        Cadastrar
    </button>
</form>

<a href="/pets">Voltar</a>
