<template>
    <footer style="background: #EEEEEE">
    <v-container>
      <v-layout row wrap>
        
        <v-flex xs12 md4>
          <v-flex class="leftfoot">
            <!-- <img src="../assets/logo produk tani fix-01.png" class="logofooter"> -->
            <prismic-image class="logofooter" :field="fields.logo" />
          </v-flex>
        </v-flex>

        <v-flex xs12 md4>
          <p></p>
          <v-flex class="midfoot">
            <!-- <img src="../assets/facebook.png" class="socmedfooter"> -->
            <prismic-image class="socmedfooter" :field="fields.fblogo" />
            <!-- <img src="../assets/instagram.png" class="socmedfooter"> -->
            <prismic-image class="socmedfooter" :field="fields.iglogo" />
              <prismic-link :field="fields.walink">
                <prismic-image class="socmedfooter" :field="fields.walogo" />
              </prismic-link>

            <prismic-rich-text class="linkfoot" v-if="fields.address" :field="fields.address" wrapper="div" />
            <prismic-rich-text class="linkfoot" v-if="fields.phone" :field="fields.phone" wrapper="div" />
          </v-flex>
        </v-flex>

        <v-flex xs12 md4>
          <!-- <v-btn outline block class="success">3rd</v-btn> -->
          <v-flex class="rightfoot">
            
            <button class="linkfoot" @click="$router.push('Terms_condition')">Terms Condition</button>
            <p></p>
            <button class="linkfoot" @click="$router.push('Privacy_policy')">Privacy Policy</button>
          </v-flex>
        </v-flex>

        <v-flex xs12 md12>
          <p class="copyright">Copyright © {{ new Date().getFullYear() }} Avatar Solutions</p>

        </v-flex>
      
      </v-layout>
    </v-container>
  </footer>
</template>

<script>
export default {

  data() {
    return {
      fields: {
        logo: null,
        iglogo: null,
        fblogo: null,
        walogo: null,
        address: null,
        phone: null,
        walink: null,

      }
    }
  },
  methods: {
    async getContent() {
      const data = await this.$prismic.client.getSingle('footer');
      console.log(data);
      this.fields.logo = data.data.logo;
      this.fields.iglogo = data.data.iglogo;
      this.fields.fblogo = data.data.fblogo;
      this.fields.walogo = data.data.walogo;
      this.fields.address = data.data.address;
      this.fields.phone = data.data.phone;
      this.fields.walink = data.data.walink;

    }
  },
  created(){
    this.getContent();
  }  

}



</script>

<style>
/* background image for mobile device */
@media (max-width:540px){
  .leftfoot {
    text-align: center;
    margin-top: 10px;
    bottom: 0;
  }

  .midfoot {
    text-align: center;
    bottom: 0;
    margin-top: 10px;
  }

  .rightfoot {
    text-align: center;
    /* margin-right: 40px; */
    bottom: 0;
    margin-top: 10px;
  }
}

@media (min-width:541px) and (max-width:1024px) {

}
@media (min-width:1025px) and (max-width:1499px) {



  .leftfoot {
    text-align: left;

    bottom: 0;
  }

  .midfoot {
    text-align: center;
    bottom: 0;
  }

  .rightfoot {
    text-align: right;
    /* margin-right: 40px; */
    bottom: 0;
  }


}

@media (min-width:1500px){



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
  text-align: center;
}
</style>