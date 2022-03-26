<h1>Sucursal<h1>

    
    <table>
        <th>
            <tr>
                <td>
                    nombre
                </td>
                <td>
                    direccion
                </td>
               
            </tr>
        </th>
        <tbody>
            @foreach ($data as $item)
    <tr>
        
        <td>
            {{$item["nombre"]}}
        </td>
        <td>
            {{$item["direccion"]}}
        </td>
      
    </tr>
    @endforeach
        </tbody>
    </table>