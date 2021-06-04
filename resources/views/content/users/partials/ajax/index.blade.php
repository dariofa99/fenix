    <table class="table table-bordered">
                <thead class="thead-green">
                  <tr class="text-center">
                    <th>Nombres</th>
                    <th>No. Identificación</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($users as $user )
                    <tr>
                      <td>{{$user->name}}</td>
                      <td>{{$user->identification_number}}</td>
                      <td>{{$user->phone_number}}</td>                      
                      <td>{{$user->email}}</td>
                      
                      <td class="text-center">
                   
                      <a href="/admin/users/{{$user->id}}/edit" class="btn btn-primary">Editar</a>
               
                   
                      <a href="#" id="{{$user->id}}"  class="btn btn-danger btn_delete_user">Eliminar</a>
                 
                      </td>
                      
                  </tr>
                  @endforeach
                  
                   </tbody>
                  </table>
                  <hr>
                   {{ $users->appends(request()->query())->links() }}