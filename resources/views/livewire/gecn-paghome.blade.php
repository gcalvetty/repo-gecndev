<div>
    <h1>Ejercicios - LIVEWIRE:</h1>
    <ul>
        <li>
            <h2>Data Binding</h2>
            <label for="fnombre">Nombre:</label>
            <input type="text" wire:model="nombre" id="fnombre" name="fnombre">  
            <input type="checkbox" wire:model="exclamacion" name="excl" id="excl">  

            <select wire:model="saludos" name="sel" id="sel" multiple>
                <option value="Hola">Hola</option>
                <option value="Buenos Días">Buenos Días</option>
                <option value="Buenas Noches">Buenas Noches</option>
                <option value="Ad-os">Ad-os</option>
            </select>    
            {{ implode(', ',$saludos) }} {{ $nombre }} @if ($exclamacion) !!! @endif
        </li>
        <li>
            <h2>Action</h2>
            <h3>Cambiar 11</h3>
            <button wire:click="reiniciarNombre('BinGO11')">Reiniciar Nombre 11</button>
            <br>
            <h3>Cambiar 22</h3>
            <form action="#" wire:submit.prevent="$set('nombre','BinGO22')">
                <button>Reiniciar Nombre 22</button>
            </form>
        </li>
        <li>
            <h2>Lifecycle Hooks</h2>
            <label for="fapellido">Apellido:</label>
            <input type="text" wire:model="apellido" id="fapellido" name="fapellido"> 
            {{ $apellido }}
        </li>
        <li>
            <h2>Nesting - Anidamiento</h2>
            @livewire('decir-hola')
        </li>
    </ul>
</div>
