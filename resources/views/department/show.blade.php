<x-app>

  <x-slot:title>{{ $title }}</x-slot:title>
<a class="btn btn-warning mb-4" href="{{ route('department.index') }}" role="button">Back</a>
{{-- department --}}
<h4>Data Department</h4>
<ul class="list-group mb-3">
  <li class="list-group-item">Name : {{ $department->name }}</li>
  <li class="list-group-item">Created At : {{ $department->created_at->format('d F Y H:i:s') }}</li>
  <li class="list-group-item">Last Update : {{ $department->updated_at->diffForHumans() }}</li>
  
 
</ul>
{{-- lecturer --}}
<h4>Data Lecture</h4>
<ul class="list-group">
    @foreach ($department->lecturers as $lecturer)
        <li class="list-group-item">{{ $lecturer->name }}</li>
    @endforeach
  
</ul>
</x-app>