@extends ('layouts.app')
@section ('content')
<h1 class="text-center">Patients</h1>
<p>
<table class="table">
    <thead>
        <tr>
            <th>HN</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Division</th>
            <th>Last Treatment</th>
            <th>Treatment Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($patients as $patient)
        <tr>
            <td>{{$patient->id}}</td>
            <td>{{$patient->first_Name}}</td>
            <td>{{$patient->last_Name}}</td>
            <td>{{$patient->DOB}}</td>
            <td>{{$patient->division_id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="pagination justify-content-left">
{{ $patients->links() }}
</div>
</p>
@endsection