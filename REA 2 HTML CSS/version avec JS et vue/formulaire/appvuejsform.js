const app = Vue.createApp({
    data(){
      return{
      }
    }
  },

methods: {
    popup(event){ 
        alert('Formulaire envoyé');
      },
  
  });
  app.mount("#form");
  