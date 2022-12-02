<template>
  <div class="wrapper">
    <div class="header"><span>CALCULATOR</span></div>
    <div class="content">
      <span class="title">Enter the numbers</span>
      <input placeholder="number1" v-model="number1" />
      <input placeholder="number2" v-model="number2" />
      <button @click="handleSum(number1, number2)">Sum</button>
      <div class="line"></div>
      <span>Result</span>
      <input v-model="result" class="result" />
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
    async handleSum(numb1, numb2) {
      try {
        const response = await axios.post("/api/sum-number", {
          numb1: numb1,
          numb2: numb2,
        });
        if (response) {
          this.result = response.data;
        }
      } catch (e) {
        console.log("err", e);
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.wrapper {
  background: #ffffff 0% 0% no-repeat padding-box;
  opacity: 1;
  width: 375px;
  height: 811px;
  text-align: center;
  margin: 0 auto;
  border: 1px solid grey;
  .header {
    background-color: #c10708;
    width: 100%;
    height: 69px;
    position: relative;
    span {
      text-align: center;
      font: normal normal normal 18px/16px Varela Round;
      letter-spacing: 0.54px;
      color: #ffffff;
      text-transform: uppercase;
      opacity: 1;
      font-size: 18px;
      position: absolute;
      top: 72%;
      left: 40%;
      margin: -25px 0 0 -25px;
    }
  }
  .content {
    display: flex;
    flex-direction: column;
    width: 215px;
    height: 406px;
    opacity: 1;
    background: #ffffff 0% 0% no-repeat padding-box;
    box-shadow: 2px 6px 10px #00000029;
    border: 0.5px solid #a4a4a4;
    border-radius: 4px;
    margin: 59px auto;
    padding: 50px;
    .title {
      width: 100%;
      text-align: center;
      font: normal normal normal 16px/16px Varela Round;
      letter-spacing: 0px;
      color: #a4a4a4;
      opacity: 1;
      margin-bottom: 11px;
    }
    input {
      margin-bottom: 10px;
      width: 100%;
      height: 36px;
      &::placeholder {
        padding: 10px;
        text-align: left;
        font: normal normal normal 16px/16px Varela Round;
        letter-spacing: 0px;
        color: #a4a4a4;
        opacity: 1;
      }
    }

    button {
      width: 223px;
      height: 30px;
      margin-bottom: 10px;
      text-align: center;
      font: normal normal normal 16px/18px Varela Round;
      letter-spacing: 0.16px;
      background: #c10708;
      color: #ffffff;
      opacity: 1;
      &:hover {
        opacity: 0.8;
      }
    }
    .line {
      height: 1px;
      width: 100%;
      background-color: #c10708;
      margin: 30px 0;
    }
    .result {
      border: 1px solid #c10708;
    }
  }
}
</style>