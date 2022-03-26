<h1>Area<h1>

    
    <table>
        <th>
            <tr>
                <td>
                    nombre
                </td>
                <td>
                    telefono
                </td>
                <td>
                    codigo
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
            {{$item["telefono"]}}
        </td>
        <td>
            {{$item["codigoSucursal"]}}
        </td>
    </tr>
    @endforeach
        </tbody>
    </table>