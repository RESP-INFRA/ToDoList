@extends('layouts.app')


@section('content')


    <h1>Modifier tache</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('projet/'. $projet->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="tache">Tache:</label>
            <input type="text" class="form-control" id="tache" placeholder="Entrer Tache" name="tache" value="{{ $projet->tache }}">

        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

@endsection