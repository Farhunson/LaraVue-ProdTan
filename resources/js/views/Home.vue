<template>
  <div class="home">
    <v-container fluid px-10>
      <v-flex xs3 md1 >
        <router-link to="/"><prismic-image class="logoresize" :field="fields.logo" /></router-link>
      </v-flex>
    </v-container>
    <v-container style="padding-bottom:60px">
      <v-layout row wrap>
        <v-flex xs12 md6 order-xs2 order-md1>
          <div style="padding: 45px 50px">
            <!-- <v-btn outline block class="primary">test</v-btn> -->
            <prismic-rich-text class="title" v-if="fields.title1" :field="fields.title1" wrapper="div" />
            <prismic-rich-text class="title" v-if="fields.title2" :field="fields.title2" wrapper="div" />
            <p class="texthome">Gunakan aplikasi Produk Tani untuk membantu pertanian nusantara</p>
            <!-- <prismic-rich-text class="texthome" v-if="fields.text" :field="fields.text" wrapper="div" /> -->
           
            <div style="text-align:left; padding-top:25px">
              <button class="contactus" @click="$router.push('Contact_us')"> Contact Us </button>
            </div>
            <p></p>
            <div style="text-align:left; margin-top:20px">
              <!-- <a href="https://play.google.com/"> -->
              <prismic-link :field="fields.playstore">
                <!-- <img src="../assets/google-play-badge.png" style="width:230px; margin-right:10px"> -->
                <prismic-image :field="fields.playlogo" style="width:230px; margin-right:10px" />
              </prismic-link>
              <!-- </a> -->
              <!-- <a href="https://www.apple.com/ios/app-store/"> -->
              <prismic-link :field="fields.appstore">
                <!-- <img src="../assets/5a902db97f96951c82922874.png" style="width:205px"> -->
                <prismic-image :field="fields.applogo" style="width:205px"/>
              </prismic-link>
              <!-- </a> -->
            
            </div>
            <div>
              
            </div>
          </div>
        </v-flex>

        <v-flex xs12 md6 order-xs1 order-md2>
          <!-- <img src="../assets/mockuphp.png" class="mockuphpresize" > -->
          <prismic-image class="mockuphpresize" :field="fields.mockuphp" />
        </v-flex>

      </v-layout>
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
        title1: null,
        title2: null,
        text: null,
        playstore: null,
        appstore: null,
        mockuphp: null,
        playlogo: null,
        applogo: null,
      }
    }
  },
  methods: {
    async getContent() {
      const data = await this.$prismic.client.getSingle('home');
      console.log(data);
      this.fields.logo = data.data.logo;
      this.fields.title1 = data.data.title1;
      this.fields.title2 = data.data.title2;
      this.fields.text = data.data.text;
      this.fields.playstore = data.data.playstore;
      this.fields.appstore = data.data.appstore;
      this.fields.mockuphp = data.data.mockuphp;
      this.fields.playlogo = data.data.playlogo;
      this.fields.applogo = data.data.applogo;
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
@media (max-width:540px){
  .home {
    background-image: url('../assets/Path_1.png') ;
    background-repeat: no-repeat;
    background-size: 1180px;
    background-position: right -700px top -260px;
    overflow: hidden;
  }
  .logoresize {
    width: 60px;
    height: 60px;
  }
  .mockuphpresize {
    width: 290px;
    margin-left: 30px;
    margin-right: 30px;
    margin-bottom: 50px;
    text-align: center;
  }
}

@media (min-width:541px) and (max-width:1024px) {
  .home {
    background-image: url('../assets/Path_1.png') ;
    background-repeat: no-repeat;
    background-size: 1180px;
    background-position: right -650px top -370px;
    overflow: hidden;
  }

  .logoresize {
    width: 90px;
    height: 90px;
    margin-left: 50px;
    margin-top: 10px;

  }
  .mockuphpresize {
    width: 270px;
    margin-left: 190px;
    margin-top: -55px;
    
  }

}
@media (min-width:1025px) and (max-width:1499px) {
  .home {
    background-image: url('../assets/Path_1.png') ;
    background-repeat: no-repeat;
    background-size: 1280px;
    background-position: right -500px top -400px;
    overflow: hidden;
  }
  .logoresize {
    width: 90px;
    height: 90px;
    margin-left: 50px;
    margin-top: 10px;

  }

  .mockuphpresize {
    width: 270px;
    margin-left: 170px;
    margin-top: -55px;
    
  }



}

@media (min-width:1500px){

  .home {
    background-image: url('../assets/Path_1.png');
    background-repeat: no-repeat;
    background-size: 1280px;
    background-position: right -370px top -400px;
    overflow: hidden;
  }
  .logoresize {
    width: 90px;
    height: 90px;
    margin-left: 50px;
    margin-top: 10px;

  }
  .mockuphpresize {
    width: 270px;
    margin-left: 150px;
    margin-top: -55px;
    
  }





}


  .title {
    text-align: left;
    font: 45px Roboto ;
    font-weight: bold;
    color: #2BAD6C;
    /* margin-right: 140px; */
  }

  .texthome {
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




.copyright {
  padding-top: 30px;
  color: #2BAD6C;
  font: 8pt Roboto;
}

</style>