<template>
  <div class="content">
    <div class="container-fluid">
      <Form
        ref="formValidate"
        :model="formValidate"
        :rules="ruleValidate"
        :label-width="80"
      >
        <FormItem label="Name" prop="name">
          <Input
            v-model="formValidate.name"
            placeholder="Enter your name"
          ></Input>
        </FormItem>
        <FormItem label="E-mail" prop="mail">
          <Input
            v-model="formValidate.mail"
            placeholder="Enter your e-mail"
          ></Input>
        </FormItem>
        <FormItem label="City" prop="city">
          <Select v-model="formValidate.city" placeholder="Select your city">
            <Option value="beijing">New York</Option>
            <Option value="shanghai">London</Option>
            <Option value="shenzhen">Sydney</Option>
          </Select>
        </FormItem>
        <FormItem label="Date">
          <Row>
            <Col span="11">
              <FormItem prop="date">
                <DatePicker
                  type="date"
                  placeholder="Select date"
                  v-model="formValidate.date"
                ></DatePicker>
              </FormItem>
            </Col>
            <Col span="2" style="text-align: center">-</Col>
            <Col span="11">
              <FormItem prop="time">
                <TimePicker
                  type="time"
                  placeholder="Select time"
                  v-model="formValidate.time"
                ></TimePicker>
              </FormItem>
            </Col>
          </Row>
        </FormItem>
        <FormItem label="Gender" prop="gender">
          <RadioGroup v-model="formValidate.gender">
            <Radio label="male">Male</Radio>
            <Radio label="female">Female</Radio>
          </RadioGroup>
        </FormItem>
        <FormItem label="Hobby" prop="interest">
          <CheckboxGroup v-model="formValidate.interest">
            <Checkbox label="Eat"></Checkbox>
            <Checkbox label="Sleep"></Checkbox>
            <Checkbox label="Run"></Checkbox>
            <Checkbox label="Movie"></Checkbox>
          </CheckboxGroup>
        </FormItem>
        <FormItem label="Desc" prop="desc">
          <Input
            v-model="formValidate.desc"
            type="textarea"
            :autosize="{ minRows: 2, maxRows: 5 }"
            placeholder="Enter something..."
          ></Input>
        </FormItem>
        <FormItem>
          <Button type="primary" @click="handleSubmit('formValidate')"
            >Submit</Button
          >
          <Button @click="handleReset('formValidate')" style="margin-left: 8px"
            >Reset</Button
          >
        </FormItem>
      </Form>
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
              <Option disabled selected value="">Seleccione una zona</Option>
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
            <DatePicker type="date" placeholder="Seleccione fecha"></DatePicker>
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
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      formValidate: {
        name: "",
        mail: "",
        city: "",
        gender: "",
        interest: [],
        date: "",
        time: "",
        desc: "",
      },
      ruleValidate: {
        name: [
          {
            required: true,
            message: "The name cannot be empty",
            trigger: "blur",
          },
        ],
        mail: [
          {
            required: true,
            message: "Mailbox cannot be empty",
            trigger: "blur",
          },
          { type: "email", message: "Incorrect email format", trigger: "blur" },
        ],
        city: [
          {
            required: true,
            message: "Please select the city",
            trigger: "change",
          },
        ],
        gender: [
          {
            required: true,
            message: "Please select gender",
            trigger: "change",
          },
        ],
        interest: [
          {
            required: true,
            type: "array",
            min: 1,
            message: "Choose at least one hobby",
            trigger: "change",
          },
          {
            type: "array",
            max: 2,
            message: "Choose two hobbies at best",
            trigger: "change",
          },
        ],
        date: [
          {
            required: true,
            type: "date",
            message: "Please select the date",
            trigger: "change",
          },
        ],
        time: [
          {
            required: true,
            type: "string",
            message: "Please select time",
            trigger: "change",
          },
        ],
        desc: [
          {
            required: true,
            message: "Please enter a personal introduction",
            trigger: "blur",
          },
          {
            type: "string",
            min: 20,
            message: "Introduce no less than 20 words",
            trigger: "blur",
          },
        ],
      },
    };
  },
  methods: {
    handleSubmit(name) {
      this.$refs[name].validate((valid) => {
        if (valid) {
          this.$Message.success("Success!");
        } else {
          this.$Message.error("Fail!");
        }
      });
    },
    handleReset(name) {
      this.$refs[name].resetFields();
    },
  },
};
</script>