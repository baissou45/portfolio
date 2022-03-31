@extends('layouts.blanc')

@section('contenu')

<section class="about-sec mt-180 mt-sm-120  mb-30">
    <div class="row">
        <div class="col-lg-12">
            <div class="mdl-card mdl-shadow--2dp">

                <h2 class="text-center mb-30">Liste des expériences éducative</h2>

                <a href="{{ route('education.create') }}" class="btn btn-primary pull-right mb-30"> <i class="zmdi zmdi-plus mr-5"></i> Ajouter une éducation</a>


                <table class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
                    <thead class="thead-inverse|thead-default">
                        <tr>
                            <th class="text-center">Ecole</th>
                            <th class="text-center">Annee</th>
                            <th class="text-center">Formation</th>
                            <th class="text-center">Couleur</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($educations as $education)

                        <tr>
                            <td class="text-center" scope="row"> {{ $education->ecole }} </td>
                            <td class="text-center" scope="row"> {{ $education->annee }} </td>
                            <td class="text-center" scope="row"> {{ $education->formation }} </td>
                            <td class="text-center" scope="row"> {{ $education->couleur }} </td>
                            <td class="text-center">
                                <a href="{{ route('education.edit', $education->id) }}" class="mr-5 text-primary">edit</a>
                                <a href="" class="text-danger">del</a>
                            </td>
                        </tr>

                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Aucune expérience éducative trouvée</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>



            </div>
        </div>
    </div>
</section>

@endsection
