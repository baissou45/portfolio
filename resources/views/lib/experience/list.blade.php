@extends('layouts.blanc')

@section('contenu')

<section class="about-sec mt-180 mt-sm-120  mb-30">
    <div class="row">
        <div class="col-lg-12">
            <div class="mdl-card mdl-shadow--2dp">

                <h2 class="text-center mb-30">Liste des expériences pro</h2>

                <a href="{{ route('experience.create') }}" class="btn btn-primary pull-right mb-30"> <i class="zmdi zmdi-plus mr-5"></i> Ajouter une expérience</a>

                <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
                    <thead class="thead-inverse|thead-default">
                        <tr>
                            <th class="text-center">Poste</th>
                            <th class="text-center">Annee</th>
                            <th class="text-center">Structure</th>
                            <th class="text-center">Icon</th>
                            <th class="text-center">Couleur</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($experiences as $experience)

                        <tr>
                            <td class="text-center" scope="row"> {{ $experience->poste }} </td>
                            <td class="text-center" scope="row"> {{ $experience->annee }} </td>
                            <td class="text-center" scope="row"> {{ $experience->structure }} </td>
                            <td class="text-center" scope="row"> {{ $experience->icon }} </td>
                            <td class="text-center" scope="row"> {{ $experience->couleur }} </td>
                            <td class="text-center" scope="row"> {{ Str::limit($experience->description, 50, '...') }} </td>
                            <td class="text-center">
                                <a href="{{ route('experience.edit', $experience->id) }}" class="mr-5 text-primary">edit</a>
                                <a href="" class="text-danger">del</a>
                            </td>
                        </tr>

                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Aucune expérience trouvée</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>



            </div>
        </div>
    </div>
</section>

@endsection
