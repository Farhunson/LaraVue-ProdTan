<template>
  <div class="home">
    <div class="top">
      <v-container fluid px-10>
        <v-flex xs3 md1 >
          <router-link to="/"><prismic-image class="logoresize" :field="fields.logo" /></router-link>
        </v-flex>
      </v-container>
    </div>
    <v-container style="padding: 20px 30px 60px 30px">
      <div style="text-align:center">
        <prismic-rich-text class="termstitle" v-if="fields.title" :field="fields.title" wrapper="div" />
      </div>
      <p class="termscontent">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
      <p class="termscontent">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
    </v-container>



  </div>
</template>

<script>
// @ is an alias to /src

export default {
  name: 'Home',
  data() {
    return {
      fields: {
        logo: null,
        title: null,
        text1: null,
        text2: null,

      }
    }
  },
  methods: {
    async getContent() {
      const data = await this.$prismic.client.getSingle('templatepage1');
      console.log(data);
      this.fields.logo = data.data.logo;
      this.fields.title = data.data.title;
      this.fields.text1 = data.data.text1;
      this.fields.text2 = data.data.text2;

    }
  },
  created(){
    this.getContent();
  }
}

// bootstrap 4


</script>

<style scoped>

/* background image for mobile device */
@media (max-width:480px){
 
  .logoresize {
    width: 60px;
    height: 60px;
  }
  .mockuphpresize {
    width: 290px;
  }
}

@media (min-width:481px) and (max-width:1024px) {

}
@media (min-width:1025px){

  .logoresize {
    width: 90px;
    height: 90px;
    margin-left: 50px;
    margin-top: 10px;

  }
  .mockuphpresize {
    width: 270px;
    margin-left: -80px;
    margin-top: -55px;
    
  }

  .leftfoot {
    text-align: left;
    margin-left: 40px;  
    bottom: 0;
  }

  .midfoot {
    text-align: center;
    bottom: 0;
  }

  .rightfoot {
    text-align: right;
    margin-right: 40px;
    bottom: 0;
  }


}



  .title {
    text-align: left;
    font: 45px Roboto ;
    font-weight: bold;
    color: #2BAD6C;
  }

  .text {
    padding-top: 5px;
    color: #69BD52;
    font: 24px Roboto;
    text-align: left;
  }

  .contactus {
    text-align: left;
    background-color: white;
    border: 2px solid #2BAD6C;
    color: #2BAD6C;
    border-radius: 15px;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    font: 22px Roboto;
    margin: 4px 2px;
    cursor: pointer;
  }


  .socmedfooter {
    padding: 20px;
  }

  .logofooter {
    width: 90px;
    height: 90px;

  }

  .linkfoot {
    color: #2BAD6C;
    font: 12pt Roboto;
    padding-top: 10px;
  }

.footerv {
  background-color: #EFEFEF;
}

.copyright {
  padding-top: 30px;
  color: #2BAD6C;
  font: 8pt Roboto;
}

.top {
  background: rgb(46,166,147);
  background: linear-gradient(90deg, rgba(46,166,147,1) 0%, rgba(61,172,117,1) 55%, rgba(66,174,106,1) 68%, rgba(74,177,91,1) 100%);  
}

.termstitle {
  font: 24pt Roboto;
  color:  #2BAD6C;
  margin-top: 60px;
  margin-bottom: 60px;
}

.termscontent {
  font: 14pt Roboto;
  color:  #2BAD6C;
  margin-bottom: 60px;
  text-align: left;
}
</style>