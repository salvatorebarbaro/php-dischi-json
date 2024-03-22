const { createApp } = Vue;

createApp({
    data() {
        return {
            // mi carico l'array che ho preso da json su un nostro arry cosi da poterci lavorare sopra 
            dischi_lista: [],
            // qui lo imposto vuoto cosi quando lo vado a premere lui si mostra grazie al v-if
            selectedDisc: {},
            
        }
    },
    methods: {
       selezioneDisco(index)
        {
            // facciamo una chiamata axios al nostro server php passandogli l'index del disco scelto
            axios.get('./server.php?discIndex=' + index)
            .then(res =>{

                console.log(res.data);
                this.selectedDisc=res.data;
            })

        }
        
    },

    mounted() {

        // mi vedo in pagina praticamente l'array che ho preso da jason
        axios.get('./server.php').then(res =>{
            
            this.dischi_lista=res.data
            // console.log(this.dischi_lista)
            
        })
        

    }
}).mount('#app');