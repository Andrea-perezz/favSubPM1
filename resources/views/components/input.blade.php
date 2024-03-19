@props(['titulo','type', 'nombre'])
<div class="mt-5 font-serif">
    <label class="pr-2 ">{{$titulo}}</label>
    <input type={{$type}} name={{$nombre}} class="border border-emerald-700 rounded-lg px-5 py-2 ">
    @error($nombre)
    <p>{{$message}}</p>
    @enderror
</div>

