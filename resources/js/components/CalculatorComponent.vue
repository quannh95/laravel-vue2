<template>
  <div class="wrapper">
    <div class="header">CALCULATOR</div>
    <div class="content">
      <span class="title">Enter the numbers</span>
      <input placeholder="number1" v-model="number1" />
      <input placeholder="number2" v-model="number2" />
      <button @click="handleSum(number1, number2)">Sum</button>
      <div class="line"></div>
      <input placeholder="result" v-model="result" class="result" />
    </div>
  </div>
</template>

<script>
export default {
  name: "Calculator",
  components: {},
  data() {
    return {
      number1: "",
      number2: "",
      result: "",
    };
  },
  methods: {
    handleSum(num1, num2) {
      this.result = (Number(num1) + Number(num2)) / 2;
    },
  },
};
</script>

<style lang="scss" scoped>
.wrapper {
  background-color: white;
  width: 375px;
  height: 411px;
  text-align: center;
  margin: 0 auto;
  border: 1px solid grey;
  .header {
    background-color: red;
    width: 100%;
    height: 40px;
  }
  .content {
    display: flex;
    flex-direction: column;
    padding: 20px;
    .title {
      width: 100%;
    }
    input {
      height: 30px;
      margin-bottom: 10px;
    }

    button {
      height: 30px;
      margin-bottom: 10px;
      &:hover {
        background-color: red;
      }
    }
    .line {
        height: 1px;
        width: 100%;
        background-color: red;
        margin: 30px 0;
    }
    .result {
      border: 1px solid red;
    }
  }
}
</style>