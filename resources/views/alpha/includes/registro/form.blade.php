<section class="box special">
    <!-- <header class="major">
        <h2>Completá los siguientes datos</h2>
    </header> -->
    <!-- <span class="image featured"><img src="images/pic01.jpg" alt="" /></span> -->
    <form method="post" action="registrar">
        <div class="row uniform 50%">
            <div class="8u -2u 12u(mobilep)">
                <input type="text" name="nombre" placeholder="Nombre completo">
            </div>
        </div>
        <div class="row uniform 50%">
            <div class="8u -2u 12u(mobilep)">
                <input type="text" name="email" placeholder="Email">
            </div>
        </div>

        <div class="row uniform 50%">
            <div class="8u -2u 12u(mobilep)">
                <div class="select-wrapper">
                    <select name="pais">
                        <option value="">- País -</option>
                        @foreach($paises as $pais)
                        <option value="{{ $pais->id_pais }}">{{ $pais->nombre }}</option>
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
                <input type="password" name="password" placeholder="Contraseña">
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
                                    <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="4u">
                            <div class="select-wrapper">
                                <select name="mes">
                                    <option value="">- Mes -</option>
                                    @foreach($meses as $key => $mes)
                                    <option value="{{ $key++ }}">{{ $mes }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="4u">
                            <div class="select-wrapper">
                                <select name="ano">
                                    <option value="">- Año -</option>
                                    @for($i = date('Y'); $i >= 1905 ; $i --)
                                    <option value="{{ $i }}">{{ $i }}</option>
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

        $('form').validate({
            rules: {
                nombre: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                pais: {
                    required: true
                },
                provincia: {
                    required: true
                },
                password: {
                    required: true
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
            submitHandler: function(form){
                $.ajax({
                    method: 'post',
                    url: 'registrar',
                    data: $(form).serialize(),
                    success: function(data){
                        console.log(data);
                    }
                })
            }
        });

        $('select[name=pais]').change(function(){
            $.get('provincias/' + $(this).val(), function(data){

                $('select[name=provincia]').empty();

                $('<option>', {
                    value: '',
                    text: '- Provincia -'
                })
                .appendTo('select[name=provincia]');

                $.each(data.provincias, function(index, provincia){
                    $('<option>', {
                        value: provincia.id_provincia,
                        text: provincia.nombre
                    })
                    .appendTo('select[name=provincia]');
                });
            });
        });

    });
</script>
@endpush
