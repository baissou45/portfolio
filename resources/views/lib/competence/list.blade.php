@extends('layouts.blanc')

@section('contenu')

<section class="about-sec mt-180 mt-sm-120  mb-30">
    <div class="row">
        <div class="col-lg-12">
            <div class="mdl-card mdl-shadow--2dp">

                <h2 class="text-center mb-30">Liste des compétences</h2>

                <a href="{{ route('competence.create') }}" class="btn btn-primary pull-right mb-30"> <i class="zmdi zmdi-plus mr-5"></i> Ajouter compétence</a>

                <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
                    <thead class="thead-inverse|thead-default">
                        <tr>
                            <th class="text-center">Nom</th>
                            <th class="text-center">Couleur</th>
                            <th class="text-center">Niveau</th>
                            <th class="text-center">Type</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($competences as $competence)

                        <tr>
                            <td class="text-center" scope="row"> {{ $competence->nom }} </td>
                            <td class="text-center"> {{ $competence->couleur }} </td>
                            <td class="text-center"> {{ $competence->type }} </td>
                            <td class="text-center"> {{ $competence->niveau }} </td>
                            <td class="text-center">
                                <a href="{{ route('competence.edit', $competence->id) }}" class="mr-5 text-primary">edit</a>
                                <a href="" class="text-danger">del</a>
                            </td>
                        </tr>

                        @empty

                        @endforelse
                    </tbody>
                </table>



            </div>
        </div>
    </div>
</section>

@endsection
