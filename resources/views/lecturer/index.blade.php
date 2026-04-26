<x-app>

  <x-slot:title>{{ $title }}</x-slot:title>
<a class="btn btn-primary mb-4" href="{{ route('lecturer.create') }}">Create</a>
<ul class="list-group">
  @foreach ($lecturers as $lecturer) 
   <li class="list-group-item  "> 
    {{ $loop->iteration }}. {{ $lecturer->name }} -- {{ $lecturer->department->name }}
    <form action="{{ route('lecturer.destroy', $lecturer) }}" method="POST" class="d-inline">
      @method('DELETE')
      @csrf
       <a href="{{ route('lecturer.edit', $lecturer) }}" class="btn btn-warning  ">Edit</a>
      <button type="submit" class="btn btn-danger " onclick="return confirm('Anda Yakin')">Delete</button>
    </form>
   </li>
  @endforeach
  
</ul>
</x-app>