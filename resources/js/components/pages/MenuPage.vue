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
                <tr>
                  <td>01/20</td>
                  <td>Central</td>
                  <td>002/2020</td>
                  <td>Lote</td>
                  <td
                    class="_table_name"
                    style="white-space: nowrap; width: 100%"
                  >
                    Juan Luis Perez
                  </td>
                  <td>600</td>
                  <td>100</td>
                  <td>200</td>
                  <td>100</td>
                  <td>33</td>
                  <td>27/09/215</td>
                  <td>144/98</td>
                  <td>Sin Planos</td>
                  <td style="white-space: nowrap">
                    <button class="_btn _action_btn view_btn1" type="button">
                      Ver
                    </button>
                    <button class="_btn _action_btn edit_btn1" type="button">
                      Editar
                    </button>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <Page :total="100" />

          <!--~~~~~~~ MODAL ~~~~~~~~~-->
          <Modal v-model="modalActive" title="Nuevo Archivo" width="1150">
            <Form label-position="right" :label-width="150">
              <FormItem label="Nombres y Apellidos">
                <Input placeholder="Ingrese Nombres y Apellidos"></Input>
              </FormItem>
              <Row>
                <FormItem label="Nro. Folder">
                  <Input placeholder="Numero de Folder"></Input>
                </FormItem>
                <Col span="1"></Col>
                <FormItem label="Zona">
                  <Select filterable placeholder="Seleccione una zona">
                    <Option disabled selected value=""
                      >Seleccione una zona</Option
                    >
                    <Option value="Sacaba">Sacaba</Option>
                    <Option value="Cercado">Cercado</Option>
                    <Option value="Cercado">Cercado2</Option>
                    <Option value="Norte">Norte</Option>
                  </Select>
                </FormItem>
                <Col span="1"></Col>
                <FormItem label="Nro. Tramite">
                  <Input placeholder="Numero de tramite"></Input>
                </FormItem>
              </Row>
              <FormItem label="Descripcion">
                <Input placeholder="Ingrese descripcion"></Input>
              </FormItem>
              <Row>
                <FormItem label="Sup. Aprobada">
                  <Input placeholder="Superficie Aprobada"></Input>
                </FormItem>
                <Col span="1"></Col>
                <FormItem label="Sup. Afectada">
                  <Input placeholder="Superficie Afectada"></Input>
                </FormItem>
                <Col span="1"></Col>
                <FormItem label="Sup. Avance">
                  <Input placeholder="Superficie Avance"></Input>
                </FormItem>
              </Row>
              <Row>
                <FormItem label="Area Verde">
                  <Input placeholder="Area Verde"></Input>
                </FormItem>
                <Col span="1"></Col>
                <FormItem label="Cod. Catastral">
                  <Input placeholder="Codigo Catastral"></Input>
                </FormItem>
                <Col span="1"></Col>
                <FormItem label="Fecha R. M.">
                  <DatePicker
                    type="date"
                    placeholder="Seleccione fecha"
                  ></DatePicker>
                </FormItem>
              </Row>
              <FormItem label="Observaciones">
                <Input
                  type="textarea"
                  :autosize="{ minRows: 2, maxRows: 5 }"
                  placeholder="Ingrese Observaciones"
                ></Input>
              </FormItem>
            </Form>
            <div slot="footer">
              <Button type="defauld">Cancelar</Button>
              <Button type="primary">Aceptar</Button>
            </div>
          </Modal>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      data: {
        nroArchivo: "",
      },
      modalActive: false,
    };
  },
};
</script>