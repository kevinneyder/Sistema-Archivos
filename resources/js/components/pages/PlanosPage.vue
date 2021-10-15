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
              Planos
              <button
                @click="modalActive = true"
                style="padding: 10px 15px"
                type="button"
                class="btn btn-outline-primary"
              >
                <Icon type="md-add" />Nuevo Plano
              </button>
            </p>
            <div class="_overflow _table_div">
              <table class="_table">
                <!-- TABLE TITLE -->
                <tr>
                  <th>Nro. Plano</th>
                  <th>Codigo</th>
                  <th>Nombre Plano</th>
                  <th>Acciones</th>
                </tr>
                <!-- TABLE TITLE -->

                <!-- ITEMS -->
                <tr>
                  <td>0120</td>
                  <td>002/2020</td>
                  <td
                    class="_table_name"
                    style="white-space: nowrap; width: 100%"
                  >
                    Plano vivienda
                  </td>
                  <td style="white-space: nowrap">
                    <button class="_btn _action_btn view_btn1" type="button">
                      Ver Plano
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
          <Modal v-model="modalActive" title="Nuevo Plano" width="650">
            <Form label-position="top">
              <FormItem label="Nombre Plano">
                <Input placeholder="Ingrese Nombres y Apellidos"></Input>
              </FormItem>
              <Row>
                <FormItem label="Nro. Plano">
                  <Input placeholder="Numero de plano"></Input>
                </FormItem>
                <Col span="1"></Col>
                <Col span="1"></Col>
                <FormItem label="Codigo">
                  <Input placeholder="Codigo plano"></Input>
                </FormItem>
              </Row>
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