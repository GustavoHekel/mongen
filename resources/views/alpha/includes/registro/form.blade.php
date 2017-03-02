<section class="box special">
    <!-- <header class="major">
        <h2>Completá los siguientes datos</h2>
    </header> -->
    <!-- <span class="image featured"><img src="images/pic01.jpg" alt="" /></span> -->
    @if (count($errors) > 0)
    <div class="row uniform 50%">
        <div class="8u -2u 12u(mobilep)">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <form method="post" action="registro" id="new-user">
        {{ csrf_field() }}
        <div class="row uniform 50%">
            <div class="8u -2u 12u(mobilep)">
                <input type="text" name="nombre" placeholder="Nombre completo" maxlength="255" value="{{ old('nombre') }}">
            </div>
        </div>
        <div class="row uniform 50%">
            <div class="8u -2u 12u(mobilep)">
                <input type="text" name="email" placeholder="Email" maxlength="255" value="{{ old('email') }}">
            </div>
        </div>

        <div class="row uniform 50%">
            <div class="8u -2u 12u(mobilep)">
                <div class="select-wrapper">
                    <select name="pais">
                        <option value="">- País -</option>
                        @foreach($paises as $pais)
                            <option value="{{ $pais->id_pais }}">{{ ucwords($pais->nombre) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row uniform 50%">
            <div class="8u -2u 12u(mobilep)">
                <div class="select-wrapper">
                    <select name="provincia">
                        <option value="">- Provincia -</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row uniform 50%">
            <div class="8u -2u 12u(mobilep)">
                <input type="password" name="password" placeholder="Contraseña" maxlenght="255">
            </div>
        </div>

        <div class="row uniform 50%">
            <div class="8u -2u 12u(mobilep)">
                <div class="form-group">
                    <label>Fecha de nacimiento</label>
                    <div class="row uniform 50%">
                        <div class="4u">
                            <div class="select-wrapper">
                                <select name="dia">
                                    <option value="">- Dia -</option>
                                    @for($i = 1; $i <= 31; $i ++)
                                    <option {{ old('dia') != $i ?: 'selected' }} value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="4u">
                            <div class="select-wrapper">
                                <select name="mes">
                                    <option value="">- Mes -</option>
                                    @foreach($meses as $key => $mes)
                                    <option {{ old('mes') != $key+1 ?: 'selected' }} value="{{ $key+1 }}">{{ $mes }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="4u">
                            <div class="select-wrapper">
                                <select name="ano">
                                    <option value="">- Año -</option>
                                    @for($i = date('Y'); $i >= 1905 ; $i --)
                                    <option {{ old('ano') != $i ?: 'selected' }} value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row uniform 50%">
            <div class="12u">
                <ul class="actions">
                    <li>
                        <input type="submit" value="Crear cuenta">
                    </li>
                </ul>
            </div>
        </div>

    </form>
</section>

@push('scripts')
<script>
    $(function(){

        $('#new-user').validate({
            rules: {
                nombre: {
                    required: true,
                    maxlength: 255
                },
                email: {
                    required: true,
                    email: true,
                    maxlength: 255,
                    remote: {
                        method: 'get',
                        url: 'usuario' + $(this).val()
                    }
                },
                pais: {
                    required: true
                },
                provincia: {
                    required: true
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 255
                },
                dia: {
                    required: true
                },
                mes: {
                    required: true
                },
                ano: {
                    required: true
                }
            },
            messages: {
                email: {
                    remote: 'Email en uso'
                }
            },
            submitHandler: function(form){
                form.submit();
            }
        });

        $('select[name=provincia]').change(function(){
            localStorage.setItem('provincia', $(this).val());
        });

        $('select[name=pais]').change(function(){
            var pais = $(this).val();
            if (localStorage.provincias === undefined || localStorage.pais !== pais) {
                localStorage.setItem('pais', pais);
                $.get('provincias/' + $(this).val(), function(data){
                    localStorage.setItem('provincias', JSON.stringify(data));
                    populateProvincias();
                });
            } else {
                populateProvincias();
            }
        });

        function populateProvincias()
        {
            $('select[name=provincia]').empty();
            $('<option>', {
                value: '',
                text: '- Provincia -'
            })
            .appendTo('select[name=provincia]');

            var provincias = JSON.parse(localStorage.provincias);
            $.each(provincias.provincias, function(index, provincia){
                $('<option>', {
                    value: provincia.id_provincia,
                    text: provincia.nombre,
                    selected: provincia.id_provincia == localStorage.provincia
                })
                .appendTo('select[name=provincia]');
            });
        }

        function checkPais()
        {
            if (localStorage.pais === undefined) {
                return
            }

            $('select[name=pais]').val(localStorage.pais);
            $('select[name=pais]').trigger('change');
        }

        checkPais();
    });
</script>
@endpush
