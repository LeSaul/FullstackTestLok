<template>
  <ul class="list-unstyled">
      <li>Lat: {{ locationData.lat }}</li>
      <li>Lng: {{ locationData.long }}</li>
  </ul>
</template>

<script>
export default {
    props:['location'],
    data(){
        return {
            locationData:{},
        }
    },
    mounted(){
        this.locationData = JSON.parse(this.location);
    }
}
</script>

<style>

</style>