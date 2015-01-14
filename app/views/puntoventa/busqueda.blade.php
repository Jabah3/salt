

<div id="display">

  <table>
    @if($productos)   
      @foreach($productos as $prod)
        <tr>
            <td>{{$prod->nombre}}</td>     
        </tr>
      @endforeach
    @endif
  </table>


</div>