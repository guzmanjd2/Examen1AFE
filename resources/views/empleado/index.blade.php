<h1>Empleados<h1>

    
    <table>
        <th>
            <tr>
                <td>
                    nombre
                </td>
                <td>
                    edad
                </td>
                <td>
                    sueldo Base
                </td>
                <td>
                    codigo de Area
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
            {{$item["edad"]}}
        </td>
        <td>
            {{$item["sueldoBase"]}}
        </td>
        <td>
            {{$item["codigoArea"]}}
        </td>
    </tr>
    @endforeach
        </tbody>
    </table>
