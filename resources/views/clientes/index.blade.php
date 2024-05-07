@extends('layouts.app')

@section('content')

    <div class="container-fluid" id="form_clientes">
        <div class="row">
            <div class="col-md-12">
                <h1>Api-Rest -- Clientes</h1>
            </div>

            <div class="col-md-6"> <!-- Columna izquierda -->
                <div class="box box-default">
                    <div class="box-body">
                        <div class="card">
                            <div class="card-body">

                                <form @submit.prevent="save()">
                                    <div class="form-row">



                                        <div class="form-group col-sm-6">
                                            <label for="nombres">Nombre</label>
                                            <input  type="text"
                                                    required
                                                    class="form-control"
                                                    id="nombres"
                                                    v-model="registroEdicion.nombres"
                                                    @keydown.enter.prevent="save()"
                                            >
                                        </div>


                                        <div class="form-group col-sm-6">
                                            <label for="apellidos">Apellido</label>
                                            <input  type="text"
                                                    required
                                                    class="form-control"
                                                    id="apellidos"
                                                    v-model="registroEdicion.apellidos"
                                                    @keydown.enter.prevent="save()"
                                            >
                                        </div>


                                        <div class="form-group col-sm-6">
                                            <label for="dpi">DPI</label>
                                            <input  type="number"
                                                    required
                                                    class="form-control"
                                                    id="dpi"
                                                    v-model="registroEdicion.dpi"
                                                    @keydown.enter.prevent="save()"
                                            >
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="direccion">Direccion</label>
                                            <input  type="text"
                                                    required
                                                    class="form-control"
                                                    id="correo"
                                                    v-model="registroEdicion.direccion"
                                                    @keydown.enter.prevent="save()"
                                            >
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="telefono">Telefono</label>
                                            <input  type="number"
                                                    required
                                                    class="form-control"
                                                    id="telefono"
                                                    v-model="registroEdicion.telefono"
                                                    @keydown.enter.prevent="save()"
                                            >
                                        </div>


                                        <div class="form-group col-sm-6">
                                            <label for="correo">Correo</label>
                                            <input  type="text"
                                                    class="form-control"
                                                    id="correo"
                                                    v-model="registroEdicion.correo"
                                                    @keydown.enter.prevent="save()"
                                            >
                                        </div>




                                        <div class="form-group col-sm-12 pull-right">

                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-primary" @click="save()">
                                                <i class="fa fa-save"></i> <span v-text="textoBotonGuardar"></span>
                                            </button>
                                            <button type="button" class="btn btn-primary" @click="crearItem()">
                                                <i class="fa fa-reload"></i> Limpiar
                                            </button>

                                        </div>

                                        <div class="form-group col-sm-12">

                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6"> <!-- Columna derecha -->
                <div class="box box-default">
                    <div class="box-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-sm table-hover">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                                <th>DPI</th>
                                                <th>Dirección</th>
                                                <th>Telefono</th>
                                                <th>Correo</th>
                                                <th>Creación</th>
                                                <th width="10%">Acciones</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr v-if="registros.length == 0">
                                                <td colspan="50" class="text-center">Ningún Registro agregado</td>
                                            </tr>

                                            <tr v-for="(registro,index) in registros" >
                                                <td  v-text="registro.id"></td>


                                                <td v-text="registro.nombres"></td>
                                                <td v-text="registro.apellidos"></td>
                                                <td v-text="registro.dpi"></td>
                                                <td v-text="registro.direccion"></td>
                                                <td v-text="registro.telefono"></td>
                                                <td v-text="registro.correo"></td>
                                                <td v-text="registro.created_at"></td>


                                                <td class="text-center">
                                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Editar" @click="editItem(registro)">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Eliminar" @click="deleteItem(registro)">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection


@push('scripts')
    <script>


        let vMformCliente = new Vue({
            el: '#form_clientes',
            name: 'form_clientes',
            created() {

                this.getDetalles();

            },
            data: {

                registros: [],

                registroEdicion: {
                    id: 0,
                },

                registroPorDefecto: {
                    id: 0,
                },

                itemElimina: {},

                loading: false,
            },
            methods: {

                editItem(item) {
                    this.registroEdicion = Object.assign({}, item);
                },
                crearItem() {
                    this.registroEdicion = Object.assign({}, this.registroPorDefecto);
                },
                close () {
                    this.loading = false;
                    this.registroEdicion = Object.assign({}, this.registroPorDefecto);
                },

                async getDetalles() {
                    try {
                        let data = {
                            params : {
                                limit: 10,
                                ultimo_primero: 1,
                                con_media: 1,
                            }
                        }
                        let res = await axios.get(route('api.clientes.index'),data);
                        this.registros = res.data.data;
                    } catch (e) {
                        notifyErrorApi(e)
                    }
                },

                async save () {

                    this.loading = true;
                    try {
                        let data = this.registroEdicion;
                        let res = null;
                        if(this.registroEdicion.id === 0){

                            res = await axios.post(route('api.clientes.store'),data);

                        }else {

                            res = await axios.patch(route('api.clientes.update',this.registroEdicion.id),data);

                        }
                        iziTs(res.data.message);
                        this.getDetalles();
                        this.close();

                    }catch (e) {
                        notifyErrorApi(e);
                        this.loading = false;
                    }

                },

                async deleteItem(item) {
                    let confirm = await Swal.fire({
                        title: '¿Estás seguro?',
                        text: "¡No podrás revertir esto!",
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, elimínalo\n!'
                    });
                    if (confirm.isConfirmed){
                        try{
                            let res = await  axios.delete(route('api.clientes.destroy',item.id))

                            iziTs(res.data.message);
                            this.getDetalles();
                        }catch (e){
                            notifyErrorApi(e);
                            this.itemElimina = {};
                        }
                    }
                }
            },
            computed: {
                tituloModal () {
                    return this.registroEdicion.id === 0 ? 'Nuevo Detalle' : 'Editar Detalle'
                },
                textoBotonGuardar () {
                    if (this.loading){
                        return this.registroEdicion.id === 0 ? 'Guardando...' : 'Actualizando...'

                    }else {
                        return this.registroEdicion.id === 0 ? 'Guardar' : 'Actualizar'

                    }
                },
            },
            watch: {
                loading(valorCambia){

                    if(valorCambia){
                        esperar();
                    }else {
                        finEspera();
                    }
                }
            }
        });
    </script>
@endpush
