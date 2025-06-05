<x-layout>
    <h2>editar materias</h2>
</x-layout>
<div> 
  @foreach ($materias as $materia)
        <h3>{{ $materia['nombre'] }}</h3>
        <p>Estado:{{ $materia['status'] }}</p>
    @endforeach
</div>

