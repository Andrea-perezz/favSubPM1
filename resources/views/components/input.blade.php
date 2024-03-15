@props(['titulo','type', 'nombre'])

<label class="pr-2 ">{{$titulo}}</label>
<input type={{$type}} name={{$nombre}} class="border borderto-emerald-400 rounded-lg px-5 py-2 ">
@error($nombre)
<p>{{$message}}</p>
@enderror

