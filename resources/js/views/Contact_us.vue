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
          <form class="formcontainer" @submit.prevent="addData()">
              <v-layout row wrap>
                <v-flex xs12 md6>
                  <div style="text-align:left">
                    <span class="labelinput">Name</span>
                    <p></p>
                    <input class="form-control" type="text" v-model="form.name" style="width:95%" >
                  </div>
                </v-flex>
                <v-flex xs 12 md6>
                  <div class="form-group" style="text-align:left">
                    <span class="labelinput">Business Name</span>
                    <p></p>
                    <input class="form-control" type="text" v-model="form.business_name" style="width:95%" >
                  </div>
                </v-flex>
                <v-flex xs 12 md6>
                  <div class="form-group" style="text-align:left;padding-top:20px">
                    <span class="labelinput">Email</span>
                    <p></p>
                    <input class="form-control" type="text" v-model="form.email" style="width:95%" >
                  </div>
                </v-flex>
                <v-flex xs 12 md6>
                  <div class="form-group" style="text-align:left;padding-top:20px">
                    <span class="labelinput">Website</span>
                    <p></p>
                    <input class="form-control" type="text" v-model="form.website" style="width:95%" >
                  </div>
                </v-flex>
                <v-flex xs 12 md6>
                  <div class="form-group" style="text-align:left;padding-top:20px">
                    <span class="labelinput">Phone</span>
                    <p></p>
                    <input class="form-control" type="text" v-model="form.phone" style="width:95%"  >
                  </div>
                </v-flex>
                <v-flex xs 12 md12>
                  <div class="form-group" style="text-align:left;padding-top:20px">
                    <span class="labelinput">Comments</span>
                    <p></p>
                    <textarea class="form-control" v-model="form.comments" style="width:95%;" ></textarea>
                  </div>
                </v-flex>

               <v-flex xs12 md12>
                  <div style="text-align:right; padding-top:25px">
                    <button class="submit" > Submit </button>
                  </div>
               </v-flex>
              </v-layout>

          </form>
        </v-flex>

        <v-flex xs12 md6 order-xs1 order-md2>
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
      form: {
        name: '',
        business_name: '',
        email: '',
        website: '',
        phone: '',
        comments: '',
      },
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
    },
    addData() {
      // post data ke api menggunakan axios
      console.log("masuk ke addData()");
        axios.post("http://localhost:8000/web/sendmail/send", {
          name: this.form.name,
          business_name: this.form.business_name,
          email: this.form.email,
          website: this.form.website,
          phone: this.form.phone,
          comments: this.form.comments          
        });      
        axios.post("http://localhost:8000/api/business", {
          name: this.form.name,
          business_name: this.form.business_name,
          email: this.form.email,
          website: this.form.website,
          phone: this.form.phone,
          comments: this.form.comments
          
        })
        .then(response => {
          // push router ke read data
          this.$router.push("/");
        });

    }
  },

  created(){
    this.getContent();
  }
};

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
  input[type=text] {
    border: 0.5pt solid #707070;
    border-radius: 2px;
    width: 230px;
    height: 20px;
  }
}

@media (min-width:540px) and (max-width:1024px) {
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

  .formcontainer {
    padding-right : 40px;
    padding-left: 40px;
    padding-top: 20px;

  }

  input[type=text] {
    border: 0.5pt solid #707070;
    border-radius: 2px;
    width: 250px;
    height: 40px;
  }



  .title {
    text-align: left;
    font: 45px Roboto ;
    font-weight: bold;
    color: #2BAD6C;
  }

  .labelinput {
    padding-top: 5px;
    color: #2BAD6C;
    font: 23px Roboto;
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

  .submit {
    background-color: #44AF67;
    border: 2px solid #44AF67;
    color: white;
    border-radius: 10px;
    padding: 10px 28px;
    text-align: center;
    text-decoration: none;
    font: 18px Roboto;
    margin: 4px 2px;
    cursor: pointer;
  }



textarea {
    border: 0.5pt solid #707070;
    border-radius: 2px;
    height: 100px;
}

</style>