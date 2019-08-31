<table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Acceso</th>
                            <th scope="col">Consulta</th>
                            <th scope="col">Agregar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $dato)
                            <tr>
                                <th scope="row">{{$dato->id}}</th>
                                <td>{{$dato->name}}</td>
                                <td>{{$dato->username}}</td>
                                <td>{{$dato->access_permission}}</td>
                                <td>{{$dato->cunsult_permission}}</td>
                                <td>{{$dato->add_permission}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>