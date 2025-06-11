@extends('layouts.app')


@section('content')

    <h1>ToDo List</h1>


    <table class="table table-bordered">

        <tr>
            <th>Tache:</th>
            <td>{{ $projet->tache }}</td>
        </tr>


    </table>

@endsection