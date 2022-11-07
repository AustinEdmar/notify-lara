<template>
 <div>
  <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Notifications({{notifications.length}})
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
       

        <notification
        
        v-for="notification in notifications "  
        :key="notification.id" 
        :notification="notification.data">

        </notification>
        
        <a class="dropdown-item" href="">
          Limpar Notificacoes 
        </a>

        
    </div>
</li>
 </div>
</template>

<script>
export default {
    created(){
      this.loadNotifications()
    },
    computed: {
      notifications (){
       return this.notificationsItems;
      }
    },
    data(){
      return {
        notificationsItems: [],
      }
    },

    methods: {
      loadNotifications(){
        axios.get('/notifications')
        .then(response => {
          this.notificationsItems = response.data.notifications
          console.log(response)
        })
      }
    }
}
</script>

<style>

</style>

