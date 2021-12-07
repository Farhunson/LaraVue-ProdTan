
<template>
    <div >
        <router-view/>
        <Footer/>
    </div>
</template>

<script>
import Footer from './components/Footer'

export default {
  Name: 'App',
  components: {  
      Footer, 
  },
}
</script>