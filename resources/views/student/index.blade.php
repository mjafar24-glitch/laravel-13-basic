<x-app>

  <x-slot:title>{{ $title }}</x-slot:title>
<a class="btn btn-primary mb-4" href="{{ route('student.create') }}">Create</a>
<ul class="list-group">
  @foreach ($students as $student )
   <li class="list-group-item  "> 
    {{ $loop->iteration }}. {{ $student->nim }} -- {{ $student->name }}
    <form action="{{ route('student.destroy', $student) }}" method="POST" class="d-inline">
      @method('DELETE')
      @csrf
       <a href="{{ route('student.edit', $student) }}" class="btn btn-warning  ">Edit</a>
      <button type="submit" class="btn btn-danger " onclick="return confirm('Anda Yakin')">Delete</button>
    </form>
   </li>
  @endforeach
  
</ul>
</x-app>