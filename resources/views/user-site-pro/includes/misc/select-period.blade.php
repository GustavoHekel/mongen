<div class="row">
    <div class="col-md-6">
        <select name="mes-{{ $name }}" class="form-control" id="mes-{{ $name }}">
            <option value="01" @if($mes == '01') selected @endif>Enero</option>
            <option value="02" @if($mes == '02') selected @endif>Febrero</option>
            <option value="03" @if($mes == '03') selected @endif>Marzo</option>
            <option value="04" @if($mes == '04') selected @endif>Abril</option>
            <option value="05" @if($mes == '05') selected @endif>Mayo</option>
            <option value="06" @if($mes == '06') selected @endif>Junio</option>
            <option value="07" @if($mes == '07') selected @endif>Julio</option>
            <option value="08" @if($mes == '08') selected @endif>Agosto</option>
            <option value="09" @if($mes == '09') selected @endif>Septiembre</option>
            <option value="10" @if($mes == '10') selected @endif>Octubre</option>
            <option value="11" @if($mes == '11') selected @endif>Noviembre</option>
            <option value="12" @if($mes == '12') selected @endif>Diciembre</option>
        </select>
    </div>
    <div class="col-md-6">
        <select name="anio-{{ $name }}" class="form-control" id="anio-{{ $name }}">
            @for($i = date('Y'); $i > date('Y') - 80; $i--)
                @if ($i == $anio)
                <option selected value="{{$i}}">{{ $i }}</option>
                @else
                <option value="{{$i}}">{{ $i }}</option>
                @endif
            @endfor
        </select>
    </div>
</div>
