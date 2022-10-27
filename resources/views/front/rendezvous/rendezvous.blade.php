@extends('layouts.master_home')


@section('home_content')




<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">



                <div class="card-header">
                    <h4>Rendez-Vous


                    </h4>

                </div>


                <form action="{{ url('rendezvous/add') }}" method="POST">
                    @csrf

                    <div class="card-body">


                        <div class="mb-3">
                            <label> choisir seance</label>
                            <select name="seance_id" class="form-control">
                                @foreach ($seances as $item)
                                <option value="{{ $item->id}}">{{ $item->seance_name}}</option>
                                @endforeach

                            </select>
                        </div>



                        <div class="mb-3">
                            <label> Nom client</label>
                            <input type="text" name="nomClient" class="form-control">

                        </div>




                    </div>




                    <div class="card-body">

                        <div class="mb-3">
                            <label> Prenom client</label>
                            <input type="text" name="prenomClient" class="form-control">

                        </div>

                    </div>


                    <div class="card-body">

                        <div class="mb-3">
                            <label> Telephone</label>
                            <input type="text" name="telephone" class="form-control">

                        </div>

                    </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label> Date </label>
                            <input type="date" name="date" class="form-control">

                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">save</button>
                        </div>
                    </div>

            </div>

            </form>


        </div>




    </div>


</div>

</div>






@endsection