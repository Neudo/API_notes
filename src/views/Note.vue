<template>
  <ion-page>
    <ion-header>
      <ion-toolbar>
        <ion-title>Nouvelle note</ion-title>
      </ion-toolbar>
    </ion-header>

    <ion-content>
      <ion-list>
        <ion-item>
          <ion-label position="floating">Écrivez ici ..</ion-label>
          <ion-textarea v-model="content"></ion-textarea>
        </ion-item>
      </ion-list>

      <ion-button @click.prevent="addNote" expand="block" color="primary" >Enregistrer</ion-button>
    </ion-content>
  </ion-page>
</template>
<script lang="js">
import { IonPage, IonContent} from '@ionic/vue';


export default {
  components: { IonPage,IonContent},
  data() {
    return {
    };
  },
  methods:{
    async addNote() {
      const content = "Contenu de la note";
      const url = "http://127.0.0.1:8000/api/notes/";

      const response = await fetch(url, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Authorization': `Bearer ${token}`
        },
        body: JSON.stringify({ message: content })
      });

      if (response.ok) {
        const data = await response.json();
        console.log(data.message);
      } else {
        console.error('Erreur lors de l\'enregistrement de la note');
      }
    },
  }
};
</script>

<style scoped>
ion-content {
  --padding-top: 75px;
}

</style>