<x-app>

  <x-slot:title>{{ $title }}</x-slot:title>
<a class="btn btn-primary mb-4" href="{{ route('department.create') }}">Create</a>
<ul class="list-group">
  @foreach ($departments as $department)
   <li class="list-group-item  "> 
    {{ $loop->iteration }}. {{ $department->nim }} -- {{ $department->name }}
    <form action="{{ route('department.destroy', $department ) }}" method="POST" class="d-inline">
      @method('DELETE')
      @csrf
       <a href="{{ route('department.destroy', $department) }}" class="btn btn-warning  ">Edit</a>
      <button type="submit" class="btn btn-danger " onclick="return confirm('Anda Yakin')">Delete</button>
    </form>
   </li>
  @endforeach
  
</ul>
</x-app>