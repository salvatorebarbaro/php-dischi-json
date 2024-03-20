const { createApp } = Vue;

createApp({
    data() {
        return {
            // mi carico l'array che ho preso da json su un nostro arry cosi da poterci lavorare sopra 
            dischi_lista:[],
            selectedDisc:false,
            
        }
    },
    methods: {
        handleClick(disco){
            // mi passo nella variabile selectedDisc il valore del mio disco attuale che sto prendendo tramire il click
            this.selectedDisc=disco;

        }
        
    },

    mounted() {

        // mi vedo in pagina praticamente l'array che ho preso da jason
        axios.get('./server.php').then(res =>{
            
            this.dischi_lista=res.data
            console.log(this.dischi_lista)
            
        })

    },
}).mount('#app');