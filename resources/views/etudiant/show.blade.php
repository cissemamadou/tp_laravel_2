
                <table border="2" class="table table-striped table-active">
                    <thead>
                    <tr bgcolor="#7fff00">
                        <td>Id</td>
                        <td>Nom </td>
                        <td>Prenom </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr bgcolor="#f0ffff">
                        <td>{{$etudiant->id}}</td>
                        <td>{{$etudiant->nom}}</td>
                        <td>{{$etudiant->prenom}}</td>

                    </tr>
                    </tbody>

                </table>

                <a class="btn btn-primary btn-xs" href="{{url('/home')}}">Retour à la liste ---></a>

