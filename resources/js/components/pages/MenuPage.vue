<template>
  <div>
    <div>
      <div class="content">
        <div class="container-fluid">
          <!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
          <div
            class="
              _1adminOverveiw_table_recent
              _box_shadow
              _border_radious
              _mar_b30
              _p20
            "
          >
            <p class="_title0">
              Archivos
              <button
                @click="modalActive = true"
                style="padding: 10px 15px"
                type="button"
                class="btn btn-outline-primary"
              >
                <Icon type="md-add" />Nuevo Archivo
              </button>
            </p>
            <div class="_overflow _table_div">
              <table class="_table">
                <!-- TABLE TITLE -->
                <tr>
                  <th>Nro. Folder</th>
                  <th>Zona</th>
                  <th>Nro. Tramite</th>
                  <th>Descripcion</th>
                  <th>Nombres y Apellidos</th>
                  <th>Sup. Aprobada</th>
                  <th>Sup. Afectada</th>
                  <th>Sup. Avance</th>
                  <th>Area Verde</th>
                  <th>Cod. Catastral</th>
                  <th>Fecha R. M.</th>
                  <th>R. M.</th>
                  <th>Observaciones</th>
                  <th>Acciones</th>
                </tr>
                <!-- TABLE TITLE -->

                <!-- ITEMS -->
                <tr v-for="archivo in archivos" :key="archivo.id">
                  <template v-if="archivo.id != 1">
                    <td>{{ archivo.folder_tramite[0].numeroFolder }}</td>
                    <td>{{ archivo.registro_zonas[0].nombre }}</td>
                    <td>{{ archivo.numero_tramite[0].numero }}</td>
                    <td>{{ archivo.registro_tipo[0].nombre }}</td>
                    <td
                      class="_table_name"
                      style="white-space: nowrap; width: 100%"
                    >
                      {{ archivo.registro_personas[0].nombre }}
                    </td>
                    <td>
                      {{ archivo.registro_sup_total[0].pivot.superficieTotal }}
                    </td>
                    <td>
                      {{
                        archivo.registro_sup_afectada[0].pivot
                          .superficieAfectada
                      }}
                    </td>
                    <td>
                      {{
                        archivo.registro_sup_avance[0].pivot.superficieAvance
                      }}
                    </td>
                    <td>
                      {{
                        archivo.registro_sup_area_verde[0].pivot
                          .superficieAreaVerde
                      }}
                    </td>
                    <td>{{ archivo.catastro_tramite[0].codigoCatastral }}</td>
                    <td>{{ archivo.fecha_resolucion[0].fecha }}</td>
                    <td>
                      {{ archivo.registro_resolucion[0].registroResolucion }}
                    </td>
                    <td>{{ archivo.observacion_tramite[0].observacion }}</td>
                    <td style="white-space: nowrap">
                      <button class="_btn _action_btn view_btn1" type="button">
                        Ver
                      </button>
                      <button class="_btn _action_btn edit_btn1" type="button">
                        Editar
                      </button>
                    </td>
                  </template>
                </tr>
              </table>
            </div>
          </div>
          <Page :total="100" />

          <!--~~~~~~~ MODAL ~~~~~~~~~-->
          <Modal
            :styles="{ top: '5vh' }"
            v-model="modalActive"
            title="Nuevo Archivo"
            :mask-closable="false"
            :closable="false"
            width="1150"
          >
            <Form label-position="right" :label-width="150">
              <FormItem label="Nombres y Apellidos">
                <Input
                  placeholder="Ingrese Nombres y Apellidos"
                  v-model="registroPersona.nombre"
                ></Input>
              </FormItem>
              <Row>
                <FormItem label="Nro. Folder">
                  <Input
                    placeholder="Numero de Folder"
                    v-model="folderTramite.numeroFolder"
                  ></Input>
                </FormItem>
                <Col span="1"></Col>
                <FormItem label="Zona">
                  <Select
                    filterable
                    placeholder="Seleccione una zona"
                    v-model="zonaTramite.nombre"
                  >
                    <Option value="Sacaba">Sacaba</Option>
                    <Option value="Cercado">Cercado</Option>
                    <Option value="Cercado">Cercado2</Option>
                    <Option value="Norte">Norte</Option>
                  </Select>
                </FormItem>
                <Col span="1"></Col>
                <FormItem label="Nro. Tramite">
                  <Input
                    placeholder="Numero de tramite"
                    v-model="numeroTramite.numero"
                  ></Input>
                </FormItem>
              </Row>
              <FormItem label="Descripcion">
                <Input
                  placeholder="Ingrese descripcion"
                  v-model="tipoTramite.nombre"
                ></Input>
              </FormItem>
              <Row>
                <FormItem label="Sup. Aprobada">
                  <Input
                    placeholder="Superficie Aprobada"
                    v-model="unidadTramite.superficieTotal"
                  ></Input>
                </FormItem>
                <Col span="1"></Col>
                <FormItem label="Sup. Afectada">
                  <Input
                    placeholder="Superficie Afectada"
                    v-model="unidadTramite.superficieAfectada"
                  ></Input>
                </FormItem>
                <Col span="1"></Col>
                <FormItem label="Sup. Avance">
                  <Input
                    placeholder="Superficie Avance"
                    v-model="unidadTramite.superficieAvance"
                  ></Input>
                </FormItem>
              </Row>
              <Row>
                <FormItem label="Sup. Area Verde">
                  <Input
                    placeholder="Area Verde"
                    v-model="unidadTramite.superficieAreaVerde"
                  ></Input>
                </FormItem>
                <Col span="1"></Col>
                <FormItem label="Cod. Catastral">
                  <Input
                    placeholder="Codigo Catastral"
                    v-model="catastroTramite.codigoCatastral"
                  ></Input>
                </FormItem>
                <Col span="1"></Col>
                <FormItem label="Fecha R. M.">
                  <DatePicker
                    type="date"
                    format="yyyy/MM/dd"
                    placeholder="Seleccione fecha"
                    v-model="fechaResolucion.fecha"
                  ></DatePicker>
                </FormItem>
              </Row>
              <Row>
                <FormItem label="Resolucion Municipal">
                  <Input
                    placeholder="Resolucion Municipal"
                    v-model="resolucionTramite.registroResolucion"
                  ></Input>
                </FormItem>
                <Col span="1"></Col>
                <Col span="14">
                  <FormItem label="Responsable">
                    <Input
                      placeholder="Nombre responsable"
                      v-model="responsableTramite.nombreResponsable"
                    ></Input>
                  </FormItem>
                </Col>
              </Row>
              <Row>
                <Col span="16">
                  <FormItem label="Observaciones">
                    <Input
                      type="textarea"
                      :autosize="{ minRows: 2, maxRows: 5 }"
                      placeholder="Ingrese Observaciones"
                      v-model="observacionesTramite.observacion"
                    ></Input>
                  </FormItem>
                </Col>
                <Col span="1"></Col>
                <Col>
                  <div class="custom-file">
                    <input
                      type="file"
                      class="custom-file-input"
                      id="customFile"
                    />
                    <label class="custom-file-label" for="customFile"
                      >Subir plano</label
                    >
                  </div>
                </Col>
              </Row>
            </Form>
            <div slot="footer">
              <Button type="defauld" @click="modalActive = false"
                >Cancelar</Button
              >
              <!-- @click="addArchivo" -->

              <Button type="primary" @click="registrarTramite">
                Aceptar
              </Button>
            </div>
          </Modal>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  // data() {
  //   return {
  //     data: {
  //       nroTramite: "",
  //       nombresApellido: "",
  //     },
  //     modalActive: false,
  //     isAdding: false,
  //   };
  // },
  // methods: {
  //   async addArchivo() {
  //     if (this.data.nroTramite.trim() == "") return this.e("Ingrese un nombre");
  //     const res = await this.callApi("post", "app/nuevoArchivo", this.data);
  //     if (res.status === 201) {
  //       this.s("Archivo creado correctamente");
  //       this.modalActive = false;
  //     } else {
  //       this.swr();
  //     }
  //   },
  //   async created() {
  //     const res = await this.callApi("get", "app/getArchivo");
  //     if (res.status === 200) {
  //       this.nroTramite = res.data;
  //     } else {
  //       this.swr();
  //     }
  //   },
  // },
  name: "Archivos",
  data() {
    return {
      archivos: [],
      modalActive: false,
      isAdding: false,
      registroPersona: {
        identificacion: "-",
        nombre: "",
      },
      tipoTramite: {
        nombre: "",
      },
      folderTramite: {
        numeroFolder: "",
      },
      numeroTramite: {
        numero: "",
      },
      zonaTramite: {
        abreviatura: "--",
        nombre: "",
      },
      unidadTramite: {
        unidad: "m2",
        descripcion: "metros cuadrados",
        superficieTotal: "",
        superficieAfectada: "",
        superficieAvance: "",
        superficieAreaVerde: "",
      },
      catastroTramite: {
        codigoCatastral: "",
      },
      fechaResolucion: {
        fecha: "",
      },
      resolucionTramite: {
        registroResolucion: "",
      },
      responsableTramite: {
        nombreResponsable: "",
      },
      observacionesTramite: {
        observacion: "",
      },
      planoTramite: {
        codigoPlano: "1",
        nombrePlano: "plano1",
        planoTramite: "imagenPlano",
      },
    };
  },
  mounted() {
    this.mostrarArchivos();
  },
  methods: {
    async mostrarArchivos() {
      await this.axios
        .get("api/registroTramite")
        .then((response) => {
          console.log(response.data[5]);
          this.archivos = response.data;
        })
        .catch((error) => {
          console.log(error, "------------");
          this.archivos = [];
        });
    },
    async registrarTramite() {
      await this.axios
        .all([
          axios.post("api/registroTramite"),
          axios.post("api/registroNumeroTramite", this.numeroTramite),
          axios.post("api/registroZonaTramite", this.zonaTramite),
          axios.post("api/registroTipoTramite", this.tipoTramite),
          axios.post("api/registroPersonaTramite", this.registroPersona),
          axios.post("api/registroUnidadTramite", this.unidadTramite),
          axios.post("api/registroFolderTramite", this.folderTramite),
          axios.post("api/registroCatastroTramite", this.catastroTramite),
          axios.post("api/registroFechaResolucion", this.fechaResolucion),
          axios.post("api/registroResolucionTramite", this.resolucionTramite),
          axios.post("api/registroResponsableTramite", this.responsableTramite),
          axios.post(
            "api/registroObservacionesTramite",
            this.observacionesTramite
          ),
          axios.post("api/registroPlanoTramite", this.planoTramite),
        ])
        .then((response) => {
          (this.modalActive = false), this.$router.go();
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>