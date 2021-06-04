<table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nombre</th>                                      
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($roles as $role)
                      <tr>                    
                       <td>
                      {{$role->name}}
                      </td>                    
                       <td>
                     <a class="btn btn-primary btn_edit_role" id="btn_edit_role-{{$role->id}}">Editar</a>
                     <a class="btn btn-danger btn_delete_role" id="btn_delete_role-{{$role->id}}">Eliminar</a>
                      </td>
                      </tr>
                  @endforeach
                  </tbody>
                  </table>

                 {{ $roles->links('pagination::bootstrap-4') }}