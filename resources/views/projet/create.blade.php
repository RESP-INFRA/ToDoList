@extends('layouts.app')


@section('content')

    <h1>Ajouter une tache</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ url('projet') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="tache">Tache :</label>
            <input type="text" class="form-control" id="tache" placeholder="Entrez une tache" name="tache">
        </div>

        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

@endsection